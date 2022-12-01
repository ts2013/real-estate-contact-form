@component('mail::message')
    # Introduction

    New message.
    There is a message from {{ $first_name }} {{ $last_name }}

    Message:
    {{ $message }}

    Price Range:
    from ${{ $price_range_from }} to ${{ $price_range_to }}

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
