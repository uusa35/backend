<?php

namespace App\Http\Controllers\Backend;

use App\Exports\CategoriesExport;
use App\Exports\OrderExport;
use App\Exports\ProductsExport;
use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Services\Search\Filters;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('type')) {
            switch ($request->type) {
                case 'paid_orders':
                    return Excel::download(new OrderExport(['paid' => true]), 'orders.xlsx');
//                    Excel::store(new OrderExport(['paid' => true]), storage_path('uploads/files/orders.xlsx'));
                    break;
                case 'cash_on_deliver_orders':
                    return Excel::download(new OrderExport(['cash_on_delivery' => true]), 'orders.xlsx');
                    break;
                case 2:
                    echo "i equals 2";
                    break;
            }
        }
        return view('backend.modules.excel.index');
    }

    public function download(Request $request)
    {

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function exportProducts(Filters $filters)
    {

        $elements = Product::filters($filters)->with('product_attributes', 'color', 'size')
            ->whereHas('user', function ($q) {
                return auth()->user()->isAdminOrAbove ? $q : $q->where('id', auth()->id());
            })
            ->with(['user' => function ($q) {
                return $q->select('slug_ar', 'slug_en', 'id');
            }])
            ->orderBy('id', 'desc');
        return Excel::download(new ProductsExport($elements), 'elements.xlsx');
    }

    public function exportUsers(Filters $filters)
    {
        $elements = User::filters($filters)->with('role')->orderBy('id', 'desc');
        return Excel::download(new UsersExport($elements), 'elements.xlsx');
    }

    public function exportCategories(Filters $filters)
    {
        $elements = Category::filters($filters)->orderBy('id', 'desc');
        return Excel::download(new CategoriesExport($elements), 'elements.xlsx');
    }
}
