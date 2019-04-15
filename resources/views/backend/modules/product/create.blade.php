@extends('backend.layouts.app')

@section('breadcrumbs')
    {{ Breadcrumbs::render('backend.product.create') }}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box blue">
                @include('backend.partials.forms.form_title')
                <div class="portlet-body">
                    @include('backend.partials._admin_instructions',['title' => trans('general.products') ,'message' => trans('message.admin_product_message')])
                    <div class="portlet-body form">
                        <form class="horizontal-form" role="form" method="POST"
                              action="{{ route('backend.product.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <h3 class="form-section">{{ trans('general.create_product') }}</h3>
                                <div class="mt-element-step">
                                    <div class="row step-default">
                                        <div class="col-md-6 bg-success mt-step-col {{ Route::currentRouteName() === 'backend.product.create' ? 'active' : null  }}">
                                            <div class="mt-step-number bg-white font-grey">1</div>
                                            <div class="mt-step-title uppercase font-grey-cascade">{{ trans('general.create_product') }}</div>
                                            <div class="mt-step-content font-grey-cascade">{{ trans('message.create_product') }}</div>
                                        </div>
                                        <div class="col-md-6 bg-grey mt-step-col {{ Route::currentRouteName() === 'backend.attribute.create' ? 'active' : null  }}">
                                            <div class="mt-step-number bg-white font-grey">2</div>
                                            <div class="mt-step-title uppercase font-grey-cascade">{{ trans('general.add_attribute') }}</div>
                                            <div class="mt-step-content font-grey-cascade">different Colors , Sizes ,
                                                Qunatities for
                                                each product
                                            </div>
                                        </div>
                                        {{--<div class="col-md-4 bg-grey mt-step-col {{ Route::currentRouteName() === 'backend.gallery.create' ? 'active' : null  }}">--}}
                                        {{--<div class="mt-step-number bg-white font-grey">3</div>--}}
                                        {{--<div class="mt-step-title uppercase font-grey-cascade">{{ trans('general.create_gallery') }}
                                    </div>--}}
                                        {{--<div class="mt-step-content font-grey-cascade">{{ trans('general.create_gallery_for_product') }}
                                    </div>--}}
                                        {{--</div>--}}
                                    </div>
                                    <br/>
                                    <br/>
                                </div>
                                <br>
                                {{--name arabic / name english --}}
                                <div class="portlet box blue-dark">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i> {{ trans('general.product_main_details') }}
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="col-md-4">
                                                        <div class="form-group {{ $errors->has('sku') ? ' has-error' : '' }}">
                                                            <label for="sku"
                                                                   class="control-label">{{ trans('general.sku') }}
                                                                *</label>
                                                            <input id="sku" type="text" class="form-control tooltips"
                                                                   data-container="body" data-placement="top"
                                                                   data-original-title="{{ trans('message.sku') }}"
                                                                   name="sku" value="{{ old('sku') }}"
                                                                   placeholder="{{ trans('general.sku') }}" required
                                                                   autofocus>
                                                            @if ($errors->has('sku'))
                                                                <span class="help-block">
                                                <strong>
                                                    {{ $errors->first('sku') }}
                                                </strong>
                                            </span>
                                                            @endif
                                                            {{-- <span class="help-block">
                                                                                                <strong>{{ trans('message.sku') }}</strong>
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group {{ $errors->has('name_ar') ? ' has-error' : '' }}">
                                                            <label for="name_ar"
                                                                   class="control-label">{{ trans('general.name_arabic') }}
                                                                *</label>
                                                            <input id="name_ar" type="text"
                                                                   class="form-control tooltips" data-container="body"
                                                                   data-placement="top"
                                                                   data-original-title="{{ trans('message.name_ar') }}"
                                                                   name="name_ar" value="{{ old('name_ar') }}"
                                                                   placeholder="{{ trans('general.name_arabic') }}"
                                                                   required autofocus>
                                                            @if ($errors->has('name_ar'))
                                                                <span class="help-block">
                                                <strong>
                                                    {{ $errors->first('name_ar') }}
                                                </strong>
                                            </span>
                                                            @endif
                                                            {{-- <span class="help-block">
                                                                                                <strong>{{ trans('message.name_ar') }}</strong>
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group{{ $errors->has('name_en') ? ' has-error' : '' }}">
                                                            <label for="name_en"
                                                                   class="control-label">{{ trans('general.name_english') }}
                                                                *</label>
                                                            <input id="name_en" type="text"
                                                                   class="form-control tooltips" data-container="body"
                                                                   data-placement="top"
                                                                   data-original-title="{{ trans('message.name_en') }}"
                                                                   name="name_en" value="{{ old('name_en') }}"
                                                                   placeholder="{{ trans('general.name_english') }}"
                                                                   required autofocus>
                                                            @if ($errors->has('name_en'))
                                                                <span class="help-block">
                                                <strong>
                                                    {{ $errors->first('name_en') }}
                                                </strong>
                                            </span>
                                                            @endif
                                                            {{-- <span class="help-block">
                                                                                                <strong>{{ trans('message.name_en') }}</strong>
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="col-md-4">
                                                        <div class="form-group{{ $errors->has('delivery_time') ? ' has-error' : '' }}">
                                                            <label for="delivery_time"
                                                                   class="control-label">{{ trans('general.delivery_time') }}
                                                                *</label>
                                                            <input id="delivery_time" type="number"
                                                                   class="form-control tooltips" data-container="body"
                                                                   data-placement="top"
                                                                   data-original-title="{{ trans('message.delivery_time') }}"
                                                                   name="delivery_time"
                                                                   value="{{ old('delivery_time') }}"
                                                                   placeholder="{{ trans('general.delivery_time') }}"
                                                                   required autofocus>
                                                            @if ($errors->has('delivery_time'))
                                                                <span class="help-block">
                                                <strong>
                                                    {{ $errors->first('delivery_time') }}
                                                </strong>
                                            </span>
                                                            @endif
                                                            {{-- <span class="help-block">
                                                                                                <strong>{{ trans('message.delivery_time') }}</strong>
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                                            <label for="price"
                                                                   class="control-label">{{ trans('general.price') }}
                                                                *</label>
                                                            <input id="price" type="text" class="form-control tooltips"
                                                                   data-container="body" data-placement="top"
                                                                   data-original-title="{{ trans('message.price') }}"
                                                                   name="price" value="{{ old('price') }}"
                                                                   placeholder="{{ trans('general.price') }}"
                                                                   maxlength="5" required autofocus>
                                                            @if ($errors->has('price'))
                                                                <span class="help-block">
                                                <strong>
                                                    {{ $errors->first('price') }}
                                                </strong>
                                            </span>
                                                            @endif
                                                            {{-- <span class="help-block">
                                                                                                <strong>{{ trans('message.price') }}</strong>
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
                                                            <label for="weight"
                                                                   class="control-label">{{ trans('general.weight') }}
                                                                *</label>
                                                            <input id="weight" type="text" class="form-control tooltips"
                                                                   data-container="body" data-placement="top"
                                                                   data-original-title="{{ trans('message.weight') }}"
                                                                   name="weight" value="{{ old('weight') }}"
                                                                   placeholder="{{ trans('general.weight') }}" required
                                                                   autofocus>
                                                            @if ($errors->has('weight'))
                                                                <span class="help-block">
                                                <strong>
                                                    {{ $errors->first('weight') }}
                                                </strong>
                                            </span>
                                                            @endif
                                                            {{-- <span class="help-block">
                                                                                                <strong>{{ trans('message.weight') }}</strong>
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    @can('isAdminOrAbove')
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="single"
                                                                       class="control-label">{{ trans('general.owner') }}
                                                                    *</label>
                                                                <select name="user_id" class="form-control tooltips"
                                                                        data-container="body" data-placement="top"
                                                                        data-original-title="{{ trans('message.owner') }}">
                                                                    <option value="">{{ trans('general.choose_user') }}</option>
                                                                    @foreach($users as $user)
                                                                        <option value="{{ $user->id }}">{{ $user->slug_en }}</option>
                                                                    @endforeach


                                                                </select>
                                                                {{-- <span class="help-block">
                                                                                                        <strong>{{ trans('message.owner_instructions') }}</strong>
                                                                </span> --}}
                                                            </div>
                                                        </div>
                                                    @endcan
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="single"
                                                                   class="control-label">{{ trans('general.shipment_package') }}
                                                                *</label>
                                                            <select id="" name="shipment_package_id"
                                                                    class="form-control tooltips" data-container="body"
                                                                    data-placement="top"
                                                                    data-original-title="{{ trans('message.shipment_package') }}"
                                                                    required>
                                                                <option value="">{{ trans('choose_product_package_grade') }}</option>
                                                                @foreach($shipment_packages as $shipment_package)
                                                                    <option value="{{ $shipment_package->id }}">{{ $shipment_package->slug_en }}</option>
                                                                @endforeach
                                                            </select>
                                                            {{-- <span class="help-block">
                                                                                                <strong>{{ trans('message.shipment_instructions') }}</strong>
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="brand_id"
                                                                   class="control-label">{{ trans('general.brand') }}
                                                                *</label>
                                                            <select id="" name="brand_id" class="form-control tooltips"
                                                                    data-container="body" data-placement="top"
                                                                    data-original-title="{{ trans('message.brand') }}">
                                                                <option value="">{{ trans('general.choose_brand') }}</option>
                                                                @foreach($brands as $brand)
                                                                    <option value="{{ $brand->id }}">{{ $brand->slug }}</option>
                                                                @endforeach
                                                            </select>
                                                            {{-- <span class="help-block">
                                                                                                <strong>{{ trans('message.brand_instructions') }}</strong>
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-lg-12">
                                                    @if(!$categories->isEmpty())
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">{{ trans('general.categories') }}
                                                                    *</label>
                                                                <select multiple="multiple" class="multi-select"
                                                                        id="my_multi_select1" name="categories[]">
                                                                    @foreach($categories as $category)
                                                                        <option value="{{ $category->id }}"
                                                                                style="background-color: {{ $category->isParent ? 'lightblue' : null  }}">{{ $category->name }}</option>
                                                                        @if(!$category->children->isEmpty())
                                                                            @foreach($category->children as $child)
                                                                                <option value="{{ $child->id }}"
                                                                                        style="padding-left: 15px">{{ $child->name }}</option>
                                                                                @if(!$child->children->isEmpty())
                                                                                    @foreach($child->children as $subChild)
                                                                                        <option value="{{ $subChild->id }}"
                                                                                                style="padding-left: 35px">{{ $subChild->name }}</option>
                                                                                    @endforeach
                                                                                @endif
                                                                            @endforeach
                                                                        @endif
                                                                    @endforeach
                                                                </select>
                                                                {{-- <span class="help-block">
                                                                                                            <strong>{{ trans('message.categories_instructions') }}</strong>
                                                                </span> --}}
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="file"
                                                                   class="control-label">{{ trans('general.main_image') }}
                                                                *</label>

                                                            <input class="form-control tooltips" data-container="body"
                                                                   data-placement="top"
                                                                   data-original-title="{{ trans('message.main_image') }}"
                                                                   name="image" placeholder="images" type="file"/>
                                                            <div class="help-block text-left">
                                                                W * H - Best fit ['1080', '1440'] pixels
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="file"
                                                                   class="control-label">{{ trans('general.more_images') }}
                                                                *</label>

                                                            <input class="form-control tooltips" data-container="body"
                                                                   data-placement="top"
                                                                   data-original-title="{{ trans('message.more_iamges') }}"
                                                                   name="images[]" placeholder="images" type="file"
                                                                   multiple/>
                                                            <div class="help-block text-left">
                                                                W * H - Best fit ['1080', '1440'] pixels
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 text-right">
                                                    <button class="btn btn-success tooltips" data-container="body"
                                                            data-placement="top"
                                                            data-original-title="{{ trans('message.speed_saving_product') }}"
                                                            type="submit">{{ trans('general.save') }}</button>
                                                    <div class="help-block">
                                                        {{ trans('message.speed_saving_product') }}
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 class="text-center">{{ trans('general.have_more_details_for_your_product') }}</h2>
                                        <hr>
                                    </div>
                                </div>
                                <div class="portlet box blue ">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i> {{ trans('general.more_details') }}
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <div class="form-body">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="single"
                                                               class="control-label">{{ trans('general.color') }}
                                                            *</label>
                                                        <select id="color_id" name="color_id"
                                                                class="form-control tooltips" data-container="body"
                                                                data-placement="top"
                                                                data-original-title="{{ trans('message.color') }}"
                                                                required>
                                                            <option value="">{{ trans('choose_color') }}</option>
                                                            @foreach($colors as $color)
                                                                <option value="{{ $color->id }}">{{ $color->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        {{-- <span class="help-block">
                                                                                <strong>{{ trans('message.color_instructions') }}</strong>
                                                        </span> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="size_id"
                                                               class="control-label">{{ trans('general.size') }}
                                                            *</label>
                                                        <select id="size_id" name="size_id"
                                                                class="form-control tooltips" data-container="body"
                                                                data-placement="top"
                                                                data-original-title="{{ trans('message.size') }}">
                                                            <option value="">{{ trans('general.size_id') }}</option>
                                                            @foreach($sizes as $size)
                                                                <option value="{{ $size->id }}">{{ $size->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        {{-- <span class="help-block">
                                                                                <strong>{{ trans('message.size_instructions') }}</strong>
                                                        </span> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_control_1">{{ trans('general.image_chart') }}</label>
                                                        <input type="file" class="form-control tooltips"
                                                               data-container="body" data-placement="top"
                                                               data-original-title="{{ trans('message.image_chart') }}"
                                                               name="size_chart_image"
                                                               placeholder="{{ trans('general.image_chart') }}">
                                                        {{-- <div class="help-block text-left">
                                                                            W * H - Best fit 500 x 500 pixels
                                                                        </div>   --}}
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group{{ $errors->has('sale_price') ? ' has-error' : '' }}">
                                                        <label for="sale_price"
                                                               class="control-label">{{ trans('general.sale_price') }}</label>
                                                        <input id="sale_price" type="text" class="form-control tooltips"
                                                               data-container="body" data-placement="top"
                                                               data-original-title="{{ trans('message.sale_price') }}"
                                                               name="sale_price" maxlength="5"
                                                               value="{{ old('sale_price') }}"
                                                               placeholder="{{ trans('general.sale_price') }}"
                                                               autofocus>
                                                        @if ($errors->has('sale_price'))
                                                            <span class="help-block">
                                            <strong>
                                                {{ $errors->first('sale_price') }}
                                            </strong>
                                        </span>
                                                        @endif
                                                        {{-- <span class="help-block">
                                                                                            <strong>{{ trans('message.sale_price') }}</strong>
                                                        </span> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="description"
                                                               class="control-label">{{ trans('general.description_arabic') }}</label>
                                                        <textarea type="text" class="form-control tooltips"
                                                                  data-container="body" data-placement="top"
                                                                  data-original-title="{{ trans('message.description_ar') }}"
                                                                  id="description_ar" name="description_ar"
                                                                  aria-multiline="true"
                                                                  maxlength="500" {{ old('description_ar') }}></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="description"
                                                               class="control-label">{{ trans('general.description_english') }}</label>
                                                        <textarea type="text" class="form-control tooltips"
                                                                  data-container="body" data-placement="top"
                                                                  data-original-title="{{ trans('message.description_en') }}"
                                                                  id="description_en" name="description_en"
                                                                  aria-multiline="true"
                                                                  maxlength="500">{{ old('description_en') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group{{ $errors->has('notes_ar') ? ' has-error' : '' }}">
                                                        <label for="notes_ar"
                                                               class="control-label">{{ trans('general.notes_arabic') }}</label>
                                                        <input id="notes_ar" type="text" class="form-control tooltips"
                                                               data-container="body" data-placement="top"
                                                               data-original-title="{{ trans('message.notes_ar') }}"
                                                               name="notes_ar" value="{{ old('notes_ar') }}"
                                                               placeholder="{{ trans('general.notes_arabic') }} "
                                                               autofocus>
                                                        @if ($errors->has('notes_ar'))
                                                            <span class="help-block">
                                            <strong>
                                                {{ $errors->first('notes_ar') }}
                                            </strong>
                                        </span>
                                                        @endif
                                                        {{-- <span class="help-block">
                                                                                            <strong>{{ trans('message.notes_ar') }}</strong>
                                                        </span> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group{{ $errors->has('notes_en') ? ' has-error' : '' }}">
                                                        <label for="notes_en"
                                                               class="control-label">{{ trans('general.notes_english') }}</label>
                                                        <input id="notes_en" type="text" class="form-control tooltips"
                                                               data-container="body" data-placement="top"
                                                               data-original-title="{{ trans('message.notes_en') }}"
                                                               name="notes_en" value="{{ old('notes_en') }}"
                                                               placeholder="{{ trans('general.notes_english') }}"
                                                               autofocus>
                                                        @if ($errors->has('notes_en'))
                                                            <span class="help-block">
                                            <strong>
                                                {{ $errors->first('notes_en') }}
                                            </strong>
                                        </span>
                                                        @endif
                                                        {{-- <span class="help-block">
                                                                                            <strong>{{ trans('message.notes_en') }}</strong>
                                                        </span> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group{{ $errors->has('keywords') ? ' has-error' : '' }}">
                                                        <label for="keywords"
                                                               class="control-label">{{ trans('general.keywords') }}</label>
                                                        <input id="keywords" type="text" class="form-control tooltips"
                                                               data-container="body" data-placement="top"
                                                               data-original-title="{{ trans('message.keywords') }}"
                                                               name="keywords" value="{{ old('keywords') }}"
                                                               placeholder="{{ trans('general.keywords') }}" autofocus>
                                                        @if ($errors->has('keywords'))
                                                            <span class="help-block">
                                            <strong>
                                                {{ $errors->first('keywords') }}
                                            </strong>
                                        </span>
                                                        @endif
                                                        {{-- <span class="help-block">
                                                                                            <strong>{{ trans('message.notes_en') }}</strong>
                                                        </span> --}}
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group{{ $errors->has('video_url_one') ? ' has-error' : '' }}">
                                                        <label for="video_url_one"
                                                               class="control-label">{{ trans('general.video_url_one') }}</label>
                                                        <input id="video_url_one" type="url"
                                                               class="form-control tooltips" data-container="body"
                                                               data-placement="top"
                                                               data-original-title="{{ trans('message.video_url_one') }}"
                                                               name="video_url_one" value="{{ old('video_url_one') }}"
                                                               placeholder="{{ trans('general.video_url_one') }}"
                                                               autofocus>
                                                        @if ($errors->has('video_url_one'))
                                                            <span class="help-block">
                                            <strong>
                                                {{ $errors->first('video_url_one') }}
                                            </strong>
                                        </span>
                                                        @endif
                                                        {{-- <span class="help-block">
                                                                                            <strong>{{ trans('message.video_url_one') }}</strong>
                                                        </span> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group{{ $errors->has('video_url_two') ? ' has-error' : '' }}">
                                                        <label for="video_url_two"
                                                               class="control-label">{{ trans('general.video_url_two') }}</label>
                                                        <input id="video_url_two" type="url"
                                                               class="form-control tooltips" data-container="body"
                                                               data-placement="top"
                                                               data-original-title="{{ trans('message.video_url_two') }}"
                                                               name="video_url_two" value="{{ old('video_url_two') }}"
                                                               placeholder="{{ trans('general.video_url_two') }}"
                                                               autofocus>
                                                        @if ($errors->has('video_url_two'))
                                                            <span class="help-block">
                                            <strong>
                                                {{ $errors->first('video_url_two') }}
                                            </strong>
                                        </span>
                                                        @endif
                                                        {{-- <span class="help-block">
                                                                                            <strong>{{ trans('message.video_url_two') }}</strong>
                                                        </span> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group{{ $errors->has('start_sale') ? ' has-error' : '' }}">
                                                        <label for="start_sale"
                                                               class="control-label">{{ trans('general.start_sale_date') }}</label>
                                                        <div class="input-group date form_datetime">
                                                            <input type="text" readonly
                                                                   style="direction: ltr !important;"
                                                                   class="form-control tooltips" data-container="body"
                                                                   data-placement="top"
                                                                   data-original-title="{{ trans('message.start_sale_date') }}"
                                                                   name="start_sale"
                                                                   value="{{ old('start_sale') ? old('start_sale') : \Carbon\Carbon::now()->format('d F Y - h:i') }}"
                                                                   required>
                                                            <span class="input-group-btn"><button
                                                                        class="btn default date-set" type="button"><i
                                                                            class="fa fa-calendar"></i></button></span>
                                                        </div>
                                                        {{-- <span class="help-block">
                                                                                            <strong>{{ trans('message.start_sale_date') }}</strong>
                                                        </span> --}}
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="control-label">{{ trans('general.end_sale_date') }}</label>
                                                        <div class="input-group date form_datetime">
                                                            <input type="text" class="form-control tooltips"
                                                                   data-container="body" data-placement="top"
                                                                   data-original-title="{{ trans('message.end_sale_date') }}"
                                                                   readonly style="direction: ltr !important;"
                                                                   name="end_sale"
                                                                   value="{{ old('end_sale') ? old('end_sale') : \Carbon\Carbon::now()->addDay(1)->format('d F Y - h:i') }}"
                                                                   required>
                                                            <span class="input-group-btn"><button
                                                                        class="btn default date-set" type="button"><i
                                                                            class="fa fa-calendar"></i></button></span>
                                                        </div>
                                                        {{-- <span class="help-block">
                                                                                            <strong>{{ trans('message.end_sale_date') }}</strong>
                                                        </span> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                                                        <label for="quantity"
                                                               class="control-label">{{ trans('general.quantity') }}</label>
                                                        <input id="quantity" type="text" class="form-control tooltips"
                                                               data-container="body" data-placement="top"
                                                               data-original-title="{{ trans('message.quantity') }}"
                                                               name="qty" maxlength="5" value="{{ old('quantity') }}"
                                                               placeholder="{{ trans('general.quantity') }}" autofocus>
                                                        @if ($errors->has('quantity'))
                                                            <span class="help-block">
                                            <strong>
                                                {{ $errors->first('quantity') }}
                                            </strong>
                                        </span>
                                                        @endif
                                                        {{-- <span class="help-block">
                                                                                            <strong>{{ trans('message.quantity') }}</strong>
                                                        </span> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                @if(!$tags->isEmpty())
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">{{ trans('general.tags') }}</label>
                                                            <select multiple="multiple" class="multi-select"
                                                                    id="my_multi_select2" name="tags[]">
                                                                @foreach($tags as $tag)
                                                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            {{-- <span class="help-block">
                                                                                                        <strong>{{ trans('message.tags_instructions') }}</strong>
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>


                                        </div>
                                    </div>
                                </div>


                                <div class="portlet box blue ">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i> {{ trans('general.more_details') }}
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label sbold">{{ trans('general.active') }}</label></br>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="active" id="optionsRadios3"
                                                                   checked value="1">
                                                            {{ trans('general.active') }}</label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="active" id="optionsRadios4"
                                                                   value="0">
                                                            {{ trans('general.not_active') }}
                                                        </label>
                                                    </div>
                                                    <span class="help-block">
                                        <strong>{{ trans('message.active_instructions') }}</strong>
                                    </span>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label sbold">{{ trans('general.home_delivery_available') }}</label></br>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="home_delivery_availability"
                                                                   id="optionsRadios3" value="1">
                                                            {{ trans('general.home_delivery_available') }}</label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="home_delivery_availability"
                                                                   id="optionsRadios4" checked value="0">
                                                            {{ trans('general.not_home_delivery_available') }}</label>
                                                    </div>
                                                    <span class="help-block">
                                        <strong>{{ trans('message.home_delivery_instructions') }}</strong>
                                    </span>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label sbold">{{ trans('general.shipment_available') }}</label></br>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="shipment_availability"
                                                                   id="optionsRadios3" value="1">
                                                            {{ trans('general.shipment_available') }}</label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="shipment_availability"
                                                                   id="optionsRadios4" checked value="0">
                                                            {{ trans('general.not_shipment_available') }}</label>
                                                    </div>
                                                    <span class="help-block">
                                        <strong>{{ trans('message.shipment_available_instructions') }}</strong>
                                    </span>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label sbold">{{ trans('general.exclusive') }}</label></br>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="exclusive" id="optionsRadios3"
                                                                   value="1">
                                                            {{ trans('general.exclusive') }}</label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="exclusive" id="optionsRadios4"
                                                                   checked value="0">
                                                            {{ trans('general.not_exclusive') }}</label>
                                                    </div>
                                                    <span class="help-block">
                                        <strong>{{ trans('message.exclusive_instructions') }}</strong>
                                    </span>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label sbold">{{ trans('general.on_sale') }}</label></br>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="on_sale" id="optionsRadios3"
                                                                   value="1">
                                                            {{ trans('general.on_sale_on_homepage') }}</label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="on_sale" id="optionsRadios4"
                                                                   checked value="0">
                                                            {{ trans('general.on_sale') }}</label>
                                                    </div>
                                                    <span class="help-block">
                                        <strong>{{ trans('message.on_sale_homepage_instructions') }}</strong>
                                    </span>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label sbold">{{ trans('general.on_homepage') }}</label></br>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="on_home" id="optionsRadios3"
                                                                   value="1">
                                                            {{ trans('general.on_homepage') }}</label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="on_home" id="optionsRadios4"
                                                                   checked value="0">
                                                            {{ trans('general.not_on_homepage') }}</label>
                                                    </div>
                                                    <span class="help-block">
                                        <strong>{{ trans('message.on_homepage_instructions') }}</strong>
                                    </span>
                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label sbold">{{ trans('general.is_available') }}</label></br>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="is_available" id="optionsRadios3"
                                                                   value="1">
                                                            {{ trans('general.is_available') }}</label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="is_available" id="optionsRadios4"
                                                                   checked value="0">
                                                            {{ trans('general.not_is_available') }}</label>
                                                    </div>
                                                    <span class="help-block">
                                        <strong>{{ trans('message.is_available_instructions') }}</strong>
                                    </span>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label sbold">{{ trans('general.is_hot_deal') }}</label></br>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="is_hot_deal" id="optionsRadios7"
                                                                   value="1">
                                                            {{ trans('general.is_hot_deal') }}</label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="is_hot_deal" id="optionsRadios8"
                                                                   checked value="0">
                                                            {{ trans('general.not_is_hot_deal') }}</label>
                                                    </div>
                                                    <span class="help-block">
                                        <strong>{{ trans('message.hot_deal_instructions') }}</strong>
                                    </span>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label sbold">{{ trans('general.on_sale') }}</label></br>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="on_sale" id="optionsRadios3"
                                                                   value="1">
                                                            {{ trans('general.on_sale') }}</label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="on_sale" id="optionsRadios4"
                                                                   checked value="0">
                                                            {{ trans('general.not_on_sale') }}</label>
                                                    </div>
                                                    <span class="help-block">
                                        <strong>{{ trans('message.on_sale_instructions') }}</strong>
                                    </span>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label sbold">{{ trans('general.on_new') }}</label></br>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="on_new" id="optionsRadios3"
                                                                   value="1">
                                                            {{ trans('general.on_new') }}</label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="on_new" id="optionsRadios4"
                                                                   checked value="0">
                                                            {{ trans('general.not_on_new') }}</label>
                                                    </div>
                                                    <span class="help-block">
                                        <strong>{{ trans('message.on_new_instructions') }}</strong>
                                    </span>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label sbold">

                                                            {{ trans('general.check_stock') }}</label></br>
                                                        <label class="radio-inline" data-toggle="tooltip"
                                                               data-placement="bottom" data-html="true" title=" If Not whenever a successful order is made. qty will not be decreased
                                        accordingly.">
                                                            <input type="radio" data-toggle="tooltip"
                                                                   data-placement="bottom" title="hello"
                                                                   name="check_stock" id="optionsRadios5" value="1">
                                                            {{ trans('general.check_stock') }}</label>
                                                        <label class="radio-inline" data-toggle="tooltip"
                                                               data-placement="bottom" data-html="true"
                                                               title=" if Not Product will be added to cart without checking the current quantity.">
                                                            <input type="radio" name="check_stock" id="optionsRadios6"
                                                                   checked value="0">
                                                            in
                                                            {{ trans('general.not_check_stock') }}</label>

                                                    </div>
                                                    <span class="help-block">
                                        <strong>{{ trans('message.check_stock_instructions') }}</strong>
                                    </span>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label sbold">{{ trans('general.has_attributes') }}</label></br>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="has_attributes"
                                                                   id="optionsRadios3" value="1">
                                                            {{ trans('general.has_attributes') }}</label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="has_attributes"
                                                                   id="optionsRadios4" checked value="0">
                                                            {{ trans('general.not_has_attributes') }}</label>
                                                    </div>
                                                    <span class="help-block">
                                        <strong>{{ trans('message.on_new_instructions') }}</strong>
                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions right">
                                {{--<button type="button" class="btn default">Cancel</button>--}}
                                <a href="{!! url()->previous() !!}"
                                   class="btn btn-danger">{{ trans('general.cancel') }}</a>
                                {{--<button type="submit" class="btn btn-warning">--}}
                                {{--<i class="fa fa-check"></i> Save & Go Back--}}
                                {{--</button>--}}

                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-save"></i> {{ trans('general.save_product_and_add_attributes') }}
                                </button>
                                <button type="submit" class="btn btn-info">
                                    <i class="fa fa-save"></i> {{ trans("general.save_and_go_back") }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    @parent
    <script src="{{ mix('js/datepicker.js') }}"></script>
@endsection