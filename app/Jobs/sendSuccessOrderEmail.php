<?php

namespace App\Jobs;

use App\Mail\OrderComplete;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\Setting;
use App\Models\User;
use App\Services\Traits\NotificationHelper;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class sendSuccessOrderEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, NotificationHelper;

    public $user;
    public $order;
    public $contactus;
    public $emailsList;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Order $order, User $user, Setting $contactus)
    {
        $this->user = $user;
        $this->order = $order;
        $this->contactus = $contactus;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $emails = [['email' => $this->contactus->email, 'name' => $this->contactus->company_en], ['email' => $this->order->email, 'name' => $this->order->user->name]];
        $request = request();
        if ($this->order->order_metas->first()->product->first() && $this->order->order_metas->first()->product->first()->user->player_id) {
            $request->request->add(['player_id' => $this->order->order_metas->first()->product->first()->user->player_id]);
            $this->notify(trans('new_order'),
                $this->order->order_metas->first()->product->first()->name,
                null,
                $request);
        }
        if (env('ORDER_MAILS') && env('MAIL_ENABLED')) {
            foreach (explode(',', env('ORDER_MAILS')) as $mail) {
                array_push($emails, ['name' => 'user', 'email' => $mail]);
            }
        }
        if (env('INVOICE_DISTRIBUTION')) {
            $this->order->order_metas->each(function ($orderMeta) use ($emails) {
                if ($orderMeta->isProductType) {
                    array_push($emails, ['email' => $orderMeta->product->user->email, 'name' => $orderMeta->product->user->name]);
                } else {
                    array_push($emails, ['email' => $orderMeta->service->user->email, 'name' => $orderMeta->service->user->name]);
                }
            });
        }
        $coupon = $this->order->coupon_id ? Coupon::whereId($this->order->coupon_id)->first() : null;
        if ($coupon) {
            if (!$coupon->is_permanent) {
                $coupon->update(['consumed' => true]);
            }
            session()->forget('coupon');
        }
        dd($emails);
        return Mail::to($emails)->send(new OrderComplete($this->order, $this->user));
    }
}
