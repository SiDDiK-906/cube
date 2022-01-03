<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VendorEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $rand_password = "";

    public function __construct($random_password)
    {
        $this->rand_password = $random_password;
    }

    public function build()
    {
        return $this->view('email.vendorNotification',[
            'rand_pass'=>$this->rand_password,
        ]);
    }
}
