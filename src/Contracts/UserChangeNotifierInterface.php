<?php

namespace VendorName\Skeleton\Contracts;

interface UserChangeNotifierInterface
{
    public function sendEmailNotification($user): void;
}
