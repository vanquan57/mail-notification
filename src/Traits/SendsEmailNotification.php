<?php

// app/Traits/SendsEmailNotification.php

namespace VendorName\Skeleton\Traits;

use Illuminate\Support\Facades\Mail;
use VendorName\Skeleton\Mail\UserUpdatedMail;

trait SendsEmailNotification
{
    public function sendEmailNotification($user): void
    {
        Mail::to($user->email)->send(new UserUpdatedMail($user));
    }
}
