<?php

namespace Ts2013\RealEstateContactForm\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RealEstateContactMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * __construct
     *  $data from livewire real estate contact form 
     * @param  mixed $data  
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * build
     *
     * @return void
     */
    public function build()
    {
        return $this->markdown('realestatecontactform::contactemail.email')
        ->subject(config('realestatecontactform.subject'))
        ->with([
            'data' => $this->data
        ]);
    }
}
