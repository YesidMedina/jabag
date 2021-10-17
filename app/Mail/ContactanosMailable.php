<?php

namespace App\Mail;

use App\Http\Controllers\ContactoController;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;

class ContactanosMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = "informacion contacto";
    public $contacto;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contacto)
    {
       $this->contacto = $contacto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.conctacto');
    }
}
