<?php

namespace App\Observers;
use App\User;

class ServiceObserver
{
    public function creating(User $user)
    {
   		$user->api_token = bin2hex(openssl_random_pseudo_bytes(30));
	}
}
