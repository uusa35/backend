<?php

namespace App\Jobs;

use App\Mail\OrderComplete;
use App\Models\Order;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class sendSuccessOrderEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $user;
    public $order;
    public $contactus;

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
        if (env('ORDER_MAILS')) {
            foreach (explode(',', env('ORDER_MAILS')) as $mail) {
                Mail::to($mail)->send(new OrderComplete($this->order, $this->user));
            }
        }
        return Mail::to($this->order->email)->cc($this->contactus->email)->send(new OrderComplete($this->order, $this->user));
    }
}
