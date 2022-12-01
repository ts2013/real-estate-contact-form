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
     *
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
            'last_name' => $this->data['last_name'],
            'first_name' => $this->data['first_name'],
            'message' => $this->data['message'],
            'email' => $this->data['email'],
            'address' => $this->data['address'],
            'city' => $this->data['city'],
            'state' => $this->data['state'],
            'zip_code' => $this->data['zip_code'],
            'phone' => $this->data['phone'],
            'price_range_from' => $this->data['price_range_from'],
            'price_range_to' => $this->data['price_range_to'],
            'number_of_bedrooms' => $this->data['number_of_bedrooms'],
            'number_of_bathrooms' => $this->data['number_of_bathrooms'],
            'type_of_property' => $this->data['type_of_property'],
        ]);
    }
}
