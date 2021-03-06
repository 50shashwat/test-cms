<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactPost extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $obj;

    public function __construct($obj)
    {
        $this->obj = $obj;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->obj->type=='careers')
        {
            if(isset($this->obj->resume))
                return $this->view('emails.contact')->subject($this->obj->type.' On Website')->attach($this->obj->resume);
            else
                return $this->view('emails.contact')->subject($this->obj->type.' On Website');
        }

        return $this->view('emails.contact')->subject($this->obj->type.' On Website');
    }
}
