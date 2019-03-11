<?php

namespace App\Models;

use App\Services\Traits\LocaleTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, ModelHelpers, UserHelpers, SoftDeletes, LocaleTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [''];
    protected $with = [];
    protected $localeStrings = ['slug'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function branches()
    {
        return $this->hasMany(Branch::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function coupons()
    {
        return $this->belongsTo(Coupon::class);
    }

    public function favorites()
    {
        return $this->belongsToMany(Product::class, 'favorites');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imagable');
    }


    public function slides()
    {
        return $this->morphMany(Slide::class, 'slidable');
    }

    public function notificationAlerts()
    {
        return $this->morphMany(Notification::class, 'notificationable');
    }

    // only own tags
    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    public function collections()
    {
        return $this->morphToMany(Collection::class, 'collectionable');
    }

    public function ratings()
    {
        return $this->belongsTo(Rating::class);
    }

    public function areas()
    {
        return $this->belongsToMany(Area::class);
    }

    public function shipment_packages()
    {
        return $this->hasMany(ShipmentPackage::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
