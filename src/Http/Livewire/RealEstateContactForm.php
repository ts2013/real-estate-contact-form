<?php

namespace Ts2013\RealEstateContactForm\Http\Livewire;

use Livewire\Component;
use Ts2013\RealEstateContactForm\Mail\RealEstateContactMailable;
use Illuminate\Support\Facades\Mail;
use Ts2013\RealEstateContactForm\Models\RealEstateContact;

class RealEstateContactForm extends Component
{
    public ?string $first_name = null;
    public ?string $last_name = null;
    public ?string $email = null;
    public ?string $address = null;
    public ?string $city = null;
    public ?string $state = null;
    public ?string $zip_code = null;
    public ?string $phone = null;
    public ?string $price_range_from = null;
    public ?string $price_range_to = null;
    public ?string $message = null;
    public ?string $number_of_bedrooms = null;
    public ?string $number_of_bathrooms = null;
    public ?string $type_of_property = null;

    public bool $message_sent = false;

    /**
     * Save data to database and send email message
     *
     * @return void
     */
    public function sendMessage()
    {
        RealEstateContact::create($this->Validate());          
       
        Mail::to(config('realestatecontactform.send_email_to'))
        ->send(new RealEstateContactMailable($this->Validate()));
        $this->message_sent = true;
    }

    /**
     * validation rules
     *
     * @return void
     */
    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'phone' => 'required',
            'price_range_from' => 'required',
            'price_range_to' => 'required',
            'number_of_bedrooms' => 'required',
            'number_of_bathrooms' => 'required',
            'type_of_property' => 'required',
            'message' => 'required',
        ];
    }

    public function render()
    {
        return view('realestatecontactform::livewire.real-estate-contact-form')->layout('realestatecontactform::layouts.app');
    }
}
