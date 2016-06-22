<?php

namespace App\Listeners;

use App\Events\ContactEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ContactEvent  $event
     * @return void
     */
    public function handle(ContactEvent $event)
    {
        $name = $event->name;
        $email = $event->email;
        $url = $event->url;
        $message_contact = $event->message;

        Mail::send('email.contact', ['name' => $name, 'email' => $email, 'url' => $url, 'message_contact' => $message_contact], function ($message) use ($email, $name){
          $message->from('william.warewoolf343@gmail.com', 'Admin');
          $message->to('william@hernandez2.com', 'Contact');
          $message->subject('Message fron Hernandez2');
        });
    }
}
