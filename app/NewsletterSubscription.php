<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsletterSubscription extends Model
{
    protected $table="newsletter_subscriptions";

    protected $fillable= [
        'name',
        'email',
        'phone',
        'resume',
        'message',
        'type',
        'others'
    ];

    
}
