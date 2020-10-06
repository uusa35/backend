<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Resources\ProductExtraLightResource;
use App\Mail\OrderShipped;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Services\Search\Filters;
use App\Services\Search\OrderFilters;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Mail\Markdown;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elements = Order::query();
        $companies = User::active()->whereHas('role', function ($q) {
            return $q->where('is_company', true)->orWhere('is_designer', true);
        })->whereHas('products', function ($q) {
            return $q->active();
        },'>',0)->get();
        if (request()->has('status')) {
            $elements = $elements->where('status', request()->status)
                ->with('order_metas.product.product_attributes', 'order_metas.product.user', 'order_metas.product_attribute.size', 'order_metas.product_attribute.color', 'order_metas.service')
                ->orderBy('id', 'desc')->paginate(parent::TAKE);
        } else if (request()->has('paid')) {
            $elements = $elements->where('paid', true)
                ->with('order_metas.product.product_attributes', 'order_metas.product.user', 'order_metas.product_attribute.size', 'order_metas.product_attribute.color', 'order_metas.service')
                ->orderBy('id', 'desc')->paginate(parent::TAKE);
        } else if (request()->has('company_id')) {
            $elements = $elements->where(['paid' => true])
                ->with('order_metas.product.product_attributes', 'order_metas.product.user', 'order_metas.product_attribute.size', 'order_metas.product_attribute.color', 'order_metas.service')
                ->whereHas('order_metas.product', function ($q) {
                    return $q->where('user_id', request()->company_id);
                })
                ->orderBy('id', 'desc')->paginate(parent::TAKE);
        } else {
            $elements = $elements->with('order_metas.product.product_attributes', 'order_metas.product.user', 'order_metas.product_attribute.size', 'order_metas.product_attribute.color', 'order_metas.service')
                ->orderBy('created_at', 'desc')
                ->paginate(parent::TAKE);
        }

        return view('backend.modules.order.index', compact('elements', 'companies'));
    }

    public function search(OrderFilters $filters)
    {
        $companies = User::active()->whereHas('role', function ($q) {
            return $q->where('is_company', true)->orWhere('is_designer', true);
        })->get();
        $elements = Order::filters($filters)->orderBy('id', 'desc')->paginate(Self::TAKE_MIN);
        if ($elements->isEmpty()) {
            return redirect()->route('backend.admin.order.index')->with('error', trans('message.no_items_found'));
        }
        return view('backend.modules.order.index', compact('elements', 'companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $element = Order::whereId($id)->with('order_metas.product.product_attributes', 'order_metas.product.user', 'user.country')->first();
        if ($element->order_metas->first()->isQuestionnaireType) {
            $markdown = new Markdown(view(), config('mail.markdown'));
            return $markdown->render('emails.order-complete', ['order' => $element, 'user' => $element->user]);
        }
        return view('backend.modules.order.show', compact('element'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $element = Order::whereId($id)->first();
        return view('backend.modules.order.edit', compact('element'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $element = Order::whereId($id)->first();
        $element->update(['shipment_reference' => $request->shipment_reference]);
        return redirect()->route('backend.admin.order.index')->with('success', 'reference updated');
    }

    public function changeStatus(Request $request)
    {

        $status = Order::whereId($request->id)->first()->update(['status' => $request->status]);
        return redirect()->back()->with('success', 'status changed successfully');
    }

    public function addOrderTrackId(Request $request)
    {
        $order = Order::whereId($request->id)->first();

        $order->update([
            'status' => 'shipped',
            'track_id' => ($request->trackId != '' ? $request->trackId : null)
        ]);

        $email = new OrderShipped($order);
        Mail::to($order->user->email)->send($email);

        return redirect()->back()->with('success', 'status changed successfully');
    }

    public function ordersBetweenDates(Request $request)
    {
        $orders = Order::with('user', 'order_metas', 'country')->whereBetween('created_at', array(Carbon::createFromFormat('m/d/Y', $request->from)->toDateString(), Carbon::createFromFormat('m/d/Y', $request->to)->toDateString()))->orderBy('created_at', 'desc')->get();

        return view('backend.modules.order.index', compact('orders'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $element = Order::whereId($id)->with('order_metas')->first();
        if ($element->order_metas->isNotEmpty()) {
            $element->order_metas()->delete();
        }
        if ($element->delete()) {
            return redirect()->route('backend.admin.order.index')->with('success', 'order deleted');
        }
        return redirect()->route('backend.admin.order.index')->with('error', 'order not deleted');
    }
}
