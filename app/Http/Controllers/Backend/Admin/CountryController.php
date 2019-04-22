<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Requests\Backend\CountryStore;
use App\Models\Country;
use App\Models\ShipmentPackage;
use App\Services\Traits\ImageHelpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class CountryController extends Controller
{
    use ImageHelpers;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elements = Country::with('currency')->get();
        return view('backend.modules.country.index', compact('elements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shipmentPackages = ShipmentPackage::active()->get();
        return view('backend.modules.country.create', compact('shipmentPackages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryStore $request)
    {
        $element = Country::create($request->except('flag', 'packages'));
        if ($element) {
            $element->shipment_packages()->sync($request->packages);
            if ($request->has('flag')) {
                $this->saveMimes($element, $request, ['flag'], ['400', '400'], false);
            }
            return redirect()->route('backend.admin.country.index')->with('success', trans('general.country_saved'));
        }
        return redirect()->route('backend.admin.country.index')->with('error', 'country not saved .. unknown error');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $element = Country::whereId($id)->first();
        return view('backend.modules.country.edit', compact('element'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = validator($request->request->all(), [
            'name_ar' => 'required|unique:countries,name_ar,' . $id,
            'name_en' => 'required|unique:countries,name_en,' . $id,
            'calling_code' => 'required|unique:countries,calling_code,' . $id,
            'country_code' => 'required|alpha|unique:countries,country_code,' . $id,
            'order' => 'required|numeric|max:99|min:1',
            'packages' => 'required|array'
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withInput(Input::all())->withErrors($validate);
        }
        $element = Country::whereId($id)->first();
        if ($element) {
            $element->update($request->except('flag', 'packages'));
            $element->shipment_packages()->sync($request->packages);
            if ($request->has('flag')) {
                $this->saveMimes($element, $request, ['flag'], ['400', '400'], false);
            }
            return redirect()->route('backend.country.index')->with('success', 'country updated');
        }
        return redirect()->route('backend.country.index')->with('error', 'country did not update .. unknown error');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $element = Country::whereId($id)->with('  currency', 'branches')->first();
        if (is_null($element->currency) && $element->branches->isEmpty()) {
            if ($element->delete()) {
                return redirect()->route('backend.country.index')->with('success', 'country deleted successfully');
            }
        }
        return redirect()->route('backend.country.index')->with('error', 'country can not be delete as long as it has currency or branch!!');
    }
}
