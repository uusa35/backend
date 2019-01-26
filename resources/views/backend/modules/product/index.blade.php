@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light ">
                @include('backend.partials.forms.form_title')
                <div class="portlet-body">
                    <div class="m-heading-1 border-green m-bordered">
                        <h3>Important Information</h3>
                        <p>
                            Roles are very important for the application.
                        </p>
                        <p> Some Information about roles.
                            <a class="btn red btn-outline" href="http://datatables.net/" target="_blank">the official
                                documentation</a>
                        </p>
                    </div>
                    <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>sku</th>
                            <th>name_ar</th>
                            <th>price</th>
                            <th>sale_price</th>
                            <th>weight</th>
                            <th>image</th>
                            <th>end_sale</th>
                            <th>active</th>
                            <th>attributes x/clr/qty</th>
                            <th>actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>id</th>
                            <th>sku</th>
                            <th>name_ar</th>
                            <th>price</th>
                            <th>sale_price</th>
                            <th>weight</th>
                            <th>image</th>
                            <th>end_sale</th>
                            <th>active</th>
                            <th>attributes</th>
                            <th>actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($elements as $element)
                            <tr>
                                <td>{{ $element->id }}</td>
                                <td>{{ $element->sku }}</td>
                                <td>{{ $element->name_ar }}</td>
                                {{--<td>--}}
                                {{--<span class="label {{ activeLabel($element->home_delivery_availability) }}">{{ activeText($element->home_delivery_availability,'Yes') }}</span>--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                {{--<span class="label {{ activeLabel($element->shipment_availability) }}">{{ activeText($element->shipment_availability,'Yes') }}</span>--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--<span class="label {{ activeLabel($element->on_sale) }}">{{ activeText($element->on_sale,'OnSale') }}</span>--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--<span class="label {{ activeLabel($element->on_home) }}">{{ activeText($element->on_home,'onHome') }}</span>--}}
                                {{--</td>--}}
                                <td>
                                    {{ $element->price }}
                                </td>
                                <td>
                                    {{ $element->sale_price }}
                                </td>
                                <td>
                                    {{ $element->weight }}
                                </td>
                                <td>
                                    <img class="img-xs"
                                         src="{{ asset('storage/uploads/images/thumbnail/'.$element->image) }}" alt="">
                                </td>
                                <td>{{ !is_null($element->end_sale) ? $element->end_sale->format('Y-m-d') : null }}</td>
                                <td>
                                    <span class="label {{ activeLabel($element->active) }}">{{ activeText($element->active) }}</span>
                                </td>

                                <td>
                                    @if(!$element->product_attributes->isEmpty())
                                        @foreach($element->product_attributes as $attribute)
                                            <div class="btn-group">

                                                <button type="button"
                                                        style="background-color: {{ $attribute->color->name_en }}; color : black; font-weight: bolder"
                                                        class="btn green btn-sm btn-outline"
                                                        data-toggle="dropdown"> {{ $attribute->color->name_en }}
                                                    - {{ $attribute->size->name_en }} - {{ $attribute->qty }}
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="{{ route('backend.attribute.edit',$attribute->id) }}">
                                                            <i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="modal" href="#" data-target="#basic"
                                                           data-title="Delete"
                                                           data-content="Are you sure you want to delete attribute ? "
                                                           data-form_id="delete-{{ $attribute->id }}">
                                                            <i class="fa fa-fw fa-recycle"></i> delete</a>
                                                        <form method="post" id="delete-{{ $attribute->id }}"
                                                              action="{{ route('backend.attribute.destroy',$attribute->id) }}">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="delete"/>
                                                            <button type="submit" class="btn btn-del hidden">
                                                                <i class="fa fa-fw fa-times-circle"></i> delete
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                            <br>
                                            <br>
                                        @endforeach
                                    @else
                                        <span class="label label-danger">N/A</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn green btn-xs btn-outline dropdown-toggle"
                                                data-toggle="dropdown"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li>
                                                <a href="{{ route('backend.product.edit',$element->id) }}">
                                                    <i class="fa fa-fw fa-edit"></i> Edit</a>
                                            </li>
                                            @if($element->gallery)
                                                <li>
                                                    <a href="{{ route('backend.gallery.edit',['id' => $element->gallery->id, 'type' => 'product' , 'element_id' => $element->id]) }}"
                                                       target="_blank">
                                                        <i class="fa fa-fw fa-image"></i> edit Gallery</a>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="{{ route('backend.gallery.create',['id' => $element->id, 'type' => 'product' , 'element_id' => $element->id]) }}"
                                                       target="_blank">
                                                        <i class="fa fa-fw fa-plus-square-o"></i> create Gallery</a>
                                                </li>
                                            @endif
                                            <li>
                                                <a href="{{ route('backend.activate',['model' => 'product','id' => $element->id]) }}">
                                                    <i class="fa fa-fw fa-check-circle"></i> toggle active</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('backend.attribute.create',['product_id' => $element->id]) }}">
                                                    <i class="fa fa-fw fa-plus-square"></i> assign new attribute</a>
                                            </li>
                                            @if(!$element->trashed())
                                                <li>
                                                    <a data-toggle="modal" href="#" data-target="#basic"
                                                       data-title="Delete"
                                                       data-content="Are you sure you want to delete {{ $element->name  }}? "
                                                       data-form_id="delete-{{ $element->id }}"
                                                    >
                                                        <i class="fa fa-fw fa-recycle"></i> delete</a>
                                                    <form method="post" id="delete-{{ $element->id }}"
                                                          action="{{ route('backend.product.destroy',$element->id) }}">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="delete"/>
                                                        <button type="submit" class="btn btn-del hidden">
                                                            <i class="fa fa-fw fa-times-circle"></i> delete
                                                        </button>
                                                    </form>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="{{ route('backend.product.restore',$element->id) }}">
                                                        <i class="fa fa-fw fa-window-restore"></i> restore</a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection