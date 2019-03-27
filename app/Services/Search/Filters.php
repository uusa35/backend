<?php

namespace App\Services\Search;

use App\Models\Category;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 * Created by PhpStorm.
 * User: usamaahmed
 * Date: 2/7/17
 * Time: 8:40 AM
 */
class Filters extends QueryFilters
{
    public $category;

    public function __construct(Request $request, Category $category)
    {
        parent::__construct($request);
        $this->category = $category;
    }

    public function search($search)
    {
        return $this->builder
            ->where('name_ar', 'like', "%{$search}%")
            ->orWhere('name_en', 'like', "%{$search}%")
            ->orWhere('description_ar', 'like', "%{$search}%")
            ->orWhere('description_en', 'like', "%{$search}%")
            ->orWhere('notes_ar', 'like', "%{$search}%")
            ->orWhere('notes_en', 'like', "%{$search}%");
    }

    public function product_category_id()
    {
        // dont bring parent products
//        $parent = $this->category->whereId(request()->product_category_id)->with('children.products')->first();
//        if ($parent->children->isNotEmpty() && $parent->children->pluck('products')->isNotEmpty()) {
//            $children = $parent->children->pluck('id');
//            return $this->builder->whereHas('categories', function ($q) use ($parent, $children) {
//                if ($parent->children->isEmpty()) {
//                    return $q->where('id', request('product_category_id'));
//                }
//                return $q->whereIn('id', $children);
//            });
//        }
        return $this->builder->whereHas('categories', function ($q) {
            return $q->where('id', request()->product_category_id);
        });
    }

    public function service_category_id()
    {
        // dont bring parent products
//        $parent = $this->category->whereId(request()->service_category_id)->with('children.services')->first();
//        dd($parent);
//        if ($parent->children->isNotEmpty() && $parent->children->pluck('services')->isNotEmpty()) {
//            $children = $parent->children->pluck('id');
//            return $this->builder->whereHas('categories', function ($q) use ($parent, $children) {
//                if ($parent->children->isEmpty()) {
//                    return $q->where('id', request('service_category_id'));
//                }
//                return $q->whereIn('id', [request('service_category_id'), $children]);
//            });
//        }
        return $this->builder->whereHas('categories', function ($q) {
            return $q->where('id', request()->service_category_id);
        });
    }

    public function user_id()
    {
        return $this->builder->where(['user_id' => request()->user_id]);
    }

    public function tag_id()
    {
        return $this->builder->whereHas('tags', function ($q) {
            return $q->where('tag_id', request()->tag_id);
        });
    }

    public function color_id()
    {
        return $this->builder->whereHas('product_attributes', function ($q) {
            return $q->where('color_id', request()->color_id);
        });
    }

    public function size_id()
    {
        return $this->builder->whereHas('product_attributes', function ($q) {
            return $q->where('size_id', request()->size_id);
        });
    }

    public function on_sale()
    {
        return $this->builder->where('on_sale', true)->whereDate('end_sale', '>', Carbon::now());
    }

    public function min()
    {
        return $this->builder->where('price', '>=', (double)request()->min);
    }

    public function max()
    {
        return $this->builder->where('price', '<=', (double)request()->max);
    }

    public function page()
    {
        return $this->builder;
    }

    public function brand_id()
    {
        return $this->builder->where(['brand_id' => request('brand_id')]);
    }

    public function sort()
    {
        switch (request('sort')) {
            case 'name' :
                return $this->builder->orderBy('name_' . app()->getLocale(), 'asc');
            default :
                return $this->builder->orderBy('price', request('sort'));
        }
    }

    public function area_id()
    {
        // List of users that servie area_id
        return $this->builder->whereHas('user.areas', function ($q) {
            return $q->where(['id' => request('area_id')]);
        });
    }

    public function day_selected()
    {
//        $services = Service::active()->available()->hasImage()->serveCountries()->whereHas('timings', function ($q) {
//            return $q->where(['day_no' => request('day_selected')])->whereDate('start','>=', Carbon::parse(request('timing_id'))->format('h:i a'));
//        })->whereHas('user', function($q) {
//            return $q->whereHas('areas', function ($q) {
//               return $q->where('id', request('area_id'));
//            });
//        })->get();
//        dd($services);
        return $this->builder->whereHas('timings', function ($q) {
            return $q->where(['day_no' => request('day_selected')]);
        });

    }

    public function timing_id()
    {
        return $this->builder->whereHas('timings', function ($q) {
            return $q->whereDate('start', '>=', Carbon::parse(request('timing_id'))->format('h:i a'));
        });
    }

    public function day_selected_format()
    {
        return $this->builder;
    }

    public function country_id()
    {
        return $this->builder->whereHas('user', function ($q) {
            return $q->where(['country_id' => request('country_id')]);
        });
    }

    public function save()
    {
        if (request()->has('save') && request()->save) {
            session()->put('day_selected_format', request()->day_selected_format);
            session()->put('day_selected', request()->day_selected);
            session()->put('area_id', request()->area_id);
        }
        return $this->builder;
    }

    public function designer_id()
    {
        $productIds = User::whereId(request('designer_id'))->first()->collections()->with(['products' => function ($q) {
            return $q->active()->hasStock()->hasImage();
        }])->get()->pluck('products')->flatten()->unique('id')->pluck('id')->toArray();
        return $this->builder->whereIn('id', $productIds);
    }


}