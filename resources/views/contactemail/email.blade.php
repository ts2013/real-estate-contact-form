@component('mail::message')
    # Introduction

    This is a message from {{  $data['first_name'] }} {{  $data['last_name'] }}
   
    Email:
     {{  $data['email'] }}

    Address:
     {{  $data['address'] }} 
     {{  $data['city'] }}
     {{  $data['state'] }}
     {{  $data['zip_code'] }}

    Phone:
     {{  $data['phone'] }} 

    Message:
     {{ $data['message'] }}

    Looking for price range:
     from ${{ $data['price_range_from'] }} to ${{ $data['price_range_to'] }}

    Type of property:
     {{ $data['type_of_property'] }}

    Number of bedrooms:
     {{ $data['number_of_bedrooms'] }}

    Number of bathrooms:
     {{ $data['number_of_bathrooms'] }}



    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
