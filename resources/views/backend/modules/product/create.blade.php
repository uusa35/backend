@extends('backend.layouts.app')

@section('content')
<div class="portlet box blue">
    @include('backend.partials.forms.form_title')
    <div class="portlet-body form">
        <form class="horizontal-form" role="form" method="POST" action="{{ route('backend.product.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                <h3 class="form-section">Create Product</h3>
                <div class="mt-element-step">
                    <div class="row step-default">
                        <div class="col-md-4 bg-grey mt-step-col {{ Route::currentRouteName() === 'backend.product.create' ? 'active' : null  }}">
                            <div class="mt-step-number bg-white font-grey">1</div>
                            <div class="mt-step-title uppercase font-grey-cascade">Create Product</div>
                            <div class="mt-step-content font-grey-cascade">products</div>
                        </div>
                        <div class="col-md-4 bg-grey mt-step-col {{ Route::currentRouteName() === 'backend.attribute.create' ? 'active' : null  }}">
                            <div class="mt-step-number bg-white font-grey">2</div>
                            <div class="mt-step-title uppercase font-grey-cascade">Add Attribute</div>
                            <div class="mt-step-content font-grey-cascade">different Colors , Sizes , Qunatities for each product</div>
                        </div>
                        <div class="col-md-4 bg-grey mt-step-col {{ Route::currentRouteName() === 'backend.gallery.create' ? 'active' : null  }}">
                            <div class="mt-step-number bg-white font-grey">3</div>
                            <div class="mt-step-title uppercase font-grey-cascade">Create Gallery</div>
                            <div class="mt-step-content font-grey-cascade">Create Gallery For Your Product</div>
                        </div>
                    </div>
                    <br />
                    <br />
                </div>
                <br>
                {{--name arabic / name english --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('sku') ? ' has-error' : '' }}">
                            <label for="sku" class="control-label">sku *</label>
                            <input id="sku" type="text" class="form-control" name="sku" value="{{ old('sku') }}" placeholder="name in arabic" required autofocus>
                            @if ($errors->has('sku'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('sku') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('name_ar') ? ' has-error' : '' }}">
                            <label for="name_ar" class="control-label">Name Arabic*</label>
                            <input id="name_ar" type="text" class="form-control" name="name_ar" value="{{ old('name_ar') }}" placeholder="name in arabic" required autofocus>
                            @if ($errors->has('name_ar'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('name_ar') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group{{ $errors->has('name_en') ? ' has-error' : '' }}">
                            <label for="name_en" class="control-label">Name English*</label>
                            <input id="name_en" type="text" class="form-control" name="name_en" value="{{ old('name_en') }}" placeholder="name in english" required autofocus>
                            @if ($errors->has('name_en'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('name_en') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>


                {{-- email + mobile --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="control-label">price *</label>
                            <input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}" placeholder="price" maxlength="5" required autofocus>
                            @if ($errors->has('price'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('price') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group{{ $errors->has('sale_price') ? ' has-error' : '' }}">
                            <label for="sale_price" class="control-label">sale_price</label>
                            <input id="sale_price" type="text" class="form-control" name="sale_price" maxlength="5" value="{{ old('sale_price') }}" placeholder="sale_price" autofocus>
                            @if ($errors->has('sale_price'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('sale_price') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                            <label for="quantity" class="control-label">quantity</label>
                            <input id="quantity" type="text" class="form-control" name="quantity" maxlength="5" value="{{ old('quantity') }}" placeholder="quantity" autofocus>
                            @if ($errors->has('quantity'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('quantity') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
                            <label for="weight" class="control-label">weight *</label>
                            <input id="weight" type="text" class="form-control" name="weight" value="{{ old('weight') }}" placeholder="weight" required autofocus>
                            @if ($errors->has('weight'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('weight') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group{{ $errors->has('start_sale') ? ' has-error' : '' }}">
                            <label for="start_sale" class="control-label">start_sale Arabic</label>
                            <input id="start_sale" type="date" class="form-control" name="start_sale" value="{{ old('start_sale') }}" placeholder="name in arabic" autofocus>
                            @if ($errors->has('start_sale'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('start_sale') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="control-label">End Sale Date</label>
                            <div class="input-group date form_datetime">
                                <input type="text" size="16" readonly class="form-control" name="end_sale" value="{{ old('end_sale') ? old('end_sale') : '01 January 2019 - 07:55' }}" required>
                                <span class="input-group-btn"><button class="btn default date-set" type="button"><i class="fa fa-calendar"></i></button></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="form_control_1">Main Image*</label>
                            <input type="file" class="form-control" name="image" placeholder="image" required>
                            <div class="help-block text-left">
                                W * H - Best fit ['1080', '1440'] pixels
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="form_control_1">Image Chart</label>
                            <input type="file" class="form-control" name="size_chart_image" placeholder="size_chart_image">
                            <div class="help-block text-left">
                                W * H - Best fit 500 x 500 pixels
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <hr>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('notes_ar') ? ' has-error' : '' }}">
                            <label for="notes_ar" class="control-label">notes_ar arabic</label>
                            <input id="notes_ar" type="text" class="form-control" name="notes_ar" value="{{ old('notes_ar') }}" placeholder="notes_ar arabic" autofocus>
                            @if ($errors->has('notes_ar'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('notes_ar') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('notes_en') ? ' has-error' : '' }}">
                            <label for="notes_en" class="control-label">notes_en english</label>
                            <input id="notes_en" type="text" class="form-control" name="notes_en" value="{{ old('notes_en') }}" placeholder="notes_en arabic" autofocus>
                            @if ($errors->has('notes_en'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('notes_en') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('video_url_one') ? ' has-error' : '' }}">
                            <label for="video_url_one" class="control-label">video_url_one english</label>
                            <input id="video_url_one" type="text" class="form-control" name="video_url_one" value="{{ old('video_url_one') }}" placeholder="video_url_one arabic" autofocus>
                            @if ($errors->has('video_url_one'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('video_url_one') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('video_url_two') ? ' has-error' : '' }}">
                            <label for="video_url_two" class="control-label">video_url_two english</label>
                            <input id="video_url_two" type="text" class="form-control" name="video_url_two" value="{{ old('video_url_two') }}" placeholder="video_url_two arabic" autofocus>
                            @if ($errors->has('video_url_two'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('video_url_two') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description" class="control-label">description arabic</label>
                            <textarea type="text" class="form-control" id="description_ar" name="description_ar" aria-multiline="true" maxlength="500" {{ old('description_ar') }}></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description" class="control-label">description english</label>
                            <textarea type="text" class="form-control" id="description_en" name="description_en" aria-multiline="true" maxlength="500">{{ old('description_en') }}</textarea>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <hr>
                    @if(!$categories->isEmpty())
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Categories*</label>
                            <select multiple="multiple" class="multi-select" id="my_multi_select1" name="categories[]">
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}" style="background-color: {{ $category->isParent ? 'lightblue' : null  }}">{{ $category->name }}</option>
                                @if(!$category->children->isEmpty())
                                @foreach($category->children as $child)
                                <option value="{{ $child->id }}" style="padding-left: 15px">{{ $child->name }}</option>
                                @if(!$child->children->isEmpty())
                                @foreach($child->children as $subChild)
                                <option value="{{ $subChild->id }}" style="padding-left: 35px">{{ $subChild->name }}</option>
                                @endforeach
                                @endif
                                @endforeach
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @endif
                    @if(!$tags->isEmpty())
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Tags</label>
                            <select multiple="multiple" class="multi-select" id="my_multi_select2" name="tags[]">
                                @foreach($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @endif
                    @if(!$brands->isEmpty())
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Brands</label>
                            <select multiple="multiple" class="multi-select" id="my_multi_select3" name="brands[]">
                                @foreach($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @endif
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="single" class="control-label">User</label>
                            <select id="single" class="form-control select2">
                                <option></option>
                                @foreach($users as $user)
                                <option value="{{ $user->slug_en }}">{{ $user->slug_en }}</option>
                                @endforeach


                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="single" class="control-label">Shipment Package</label>
                            <select id="single" class="form-control select2">
                                <option></option>

                                @foreach($shipment_packages as $shipment_package)
                                <option value="{{ $shipment_package->slug_en }}">{{ $shipment_package->slug_en }}</option>
                                @endforeach


                            </select>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <hr>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label sbold">active</label></br>
                            <label class="radio-inline">
                                <input type="radio" name="active" id="optionsRadios3" checked value="1"> active</label>
                            <label class="radio-inline">
                                <input type="radio" name="active" id="optionsRadios4" value="0">not active</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label sbold">home_delivery_available</label></br>
                            <label class="radio-inline">
                                <input type="radio" name="home_delivery_available" id="optionsRadios3" checked value="1"> home_delivery_available</label>
                            <label class="radio-inline">
                                <input type="radio" name="home_delivery_available" id="optionsRadios4" value="0">not home_delivery_available</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label sbold">shipment_available</label></br>
                            <label class="radio-inline">
                                <input type="radio" name="shipment_available" id="optionsRadios3" checked value="1"> shipment_available</label>
                            <label class="radio-inline">
                                <input type="radio" name="shipment_available" id="optionsRadios4" value="0">not shipment_available</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label sbold">exclusive</label></br>
                            <label class="radio-inline">
                                <input type="radio" name="exclusive" id="optionsRadios3" checked value="1"> exclusive</label>
                            <label class="radio-inline">
                                <input type="radio" name="exclusive" id="optionsRadios4" value="0">not exclusive</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label sbold">on_sale_on_homepage</label></br>
                            <label class="radio-inline">
                                <input type="radio" name="on_sale_on_homepage" id="optionsRadios3" value="1"> on_sale_on_homepage</label>
                            <label class="radio-inline">
                                <input type="radio" name="on_sale_on_homepage" id="optionsRadios4" checked value="0">not on_sale_on_homepage</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label sbold">on_homepage</label></br>
                            <label class="radio-inline">
                                <input type="radio" name="on_homepage" id="optionsRadios3" value="1"> on_homepage</label>
                            <label class="radio-inline">
                                <input type="radio" name="on_homepage" id="optionsRadios4" checked value="0">not on_homepage</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label sbold">is_available</label></br>
                            <label class="radio-inline">
                                <input type="radio" name="is_available" id="optionsRadios3" value="1"> is_available</label>
                            <label class="radio-inline">
                                <input type="radio" name="is_available" id="optionsRadios4" checked value="0">not is_available</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label sbold">on_new</label></br>
                            <label class="radio-inline">
                                <input type="radio" name="on_new" id="optionsRadios3" value="1"> on_new</label>
                            <label class="radio-inline">
                                <input type="radio" name="on_new" id="optionsRadios4" checked value="0">not on_new</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label sbold">is_hot_deal</label></br>
                            <label class="radio-inline">
                                <input type="radio" name="is_hot_deal" id="optionsRadios7" checked value="1"> is_hot_deal</label>
                            <label class="radio-inline">
                                <input type="radio" name="is_hot_deal" id="optionsRadios8" value="0">not is_hot_deal</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label sbold">on_sale</label></br>
                            <label class="radio-inline">
                                <input type="radio" name="on_sale" id="optionsRadios3" value="1"> on_sale</label>
                            <label class="radio-inline">
                                <input type="radio" name="on_sale" id="optionsRadios4" checked value="0">not on_sale</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label sbold">check_stock</label></br>
                            <label class="radio-inline">
                                <input type="radio" name="check_stock" id="optionsRadios5" checked value="1"> check_stock</label>
                            <label class="radio-inline">
                                <input type="radio" name="check_stock" id="optionsRadios6" value="0">not in check_stock</label>
                            <div class="alert alert-danger text-danger">
                                <ul>
                                    <li>
                                        If Not whenever a successful order is made. qty will not be decreased
                                        accordingly.
                                    </li>
                                    <li>
                                        if Not Product will be added to cart without checking the current quantity.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-actions right">
                {{--<button type="button" class="btn default">Cancel</button>--}}
                <a href="{!! url()->previous() !!}" class="btn default">Cancel</a>
                {{--<button type="submit" class="btn btn-warning">--}}
                {{--<i class="fa fa-check"></i> Save & Go Back--}}
                {{--</button>--}}
                <button type="submit" class="btn btn-info">
                    <i class="fa fa-save"></i> Next
                </button>
            </div>
    </div>
    </form>
</div>
</div>
@endsection 