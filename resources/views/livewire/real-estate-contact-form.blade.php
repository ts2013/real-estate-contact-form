<div>
    @if (!$message_sent)
        <div class="flex justify-center my-20">
            <div class=" grid grid-cols-1  w-5/6 sm:w-5/6   md:w-4/6    lg:w-3/6  xl:w-3/6 2xl:w-2/6  space-y-4  p-10 border-2 shadow-sm shadow-gray-500 rounded-tr-3xl rounded-br-3xl"
                style="font-family: 'Poppins', sans-serif;">
                <!-- First Name -->
                <div class="col-span-1">
                    <label class="block text-gray-500 text-sm font-semibold" for="first_name">First Name:</label>
                    <input
                        class="appearance-none block w-full rounded py-1  shadow-xl shadow-gray-300 h-10 focus-visible:border-blue-400 @error('first_name')  form-error border-red-300 focus:border-red-300 border-2 @enderror  rounded-tr-3xl rounded-br-3xl bg-gray-100 "
                        id="first_name" type="text" placeholder="" wire:model.lazy="first_name">
                    @error('first_name')
                        <span class="error text-red-700 text-sm italic font-bold "> {{ $message }} </span>
                    @enderror
                </div>
                <!-- Last Name -->
                <div class="col-span-1">
                    <label class="block font-semibold text-sm text-gray-500" for="last_name">Last Name:</label>
                    <input
                        class="appearance-none block w-full rounded py-1  shadow-xl shadow-gray-300 h-10  @error('last_name')  form-error border-red-300 focus:border-red-300 border-2 @enderror  rounded-tr-3xl rounded-br-3xl bg-gray-100 "
                        id="last_name" type="text" placeholder="" wire:model.lazy="last_name">
                    @error('last_name')
                        <span class="error text-red-700 text-sm italic font-bold "> {{ $message }} </span>
                    @enderror
                </div>
                <!-- Email -->
                <div class="col-span-1">
                    <label class="block font-semibold text-sm text-gray-500" for="email">Email:</label>
                    <input
                        class="appearance-none block w-full  rounded py-1  shadow-xl shadow-gray-300 h-10   @error('email')  form-error border-red-300 focus:border-red-300 border-2 @enderror rounded-tr-3xl rounded-br-3xl bg-gray-100"
                        id="email" type="text" placeholder="" wire:model.lazy="email">
                    @error('email')
                        <span class="error text-red-700 text-sm italic font-bold "> {{ $message }} </span>
                    @enderror
                </div>
                <!-- Address -->
                <div class="col-span-1">
                    <label class="block font-semibold text-sm text-gray-500" for="address">Address:</label>
                    <input
                        class="appearance-none block w-full rounded py-1  shadow-xl shadow-gray-300 h-10  @error('address')  form-error border-red-300 focus:border-red-300 border-2 @enderror  rounded-tr-3xl rounded-br-3xl bg-gray-100 "
                        id="address" type="text" placeholder="" wire:model.lazy="address">
                    @error('address')
                        <span class="error text-red-700 text-sm italic font-bold "> {{ $message }} </span>
                    @enderror
                </div>
                <!-- City -->
                <div class="col-span-1">
                    <label class="block font-semibold text-sm text-gray-500" for="city">City:</label>
                    <input
                        class="appearance-none block w-full rounded py-1  shadow-xl shadow-gray-300 h-10  @error('city')  form-error border-red-300 focus:border-red-300 border-2 @enderror  rounded-tr-3xl rounded-br-3xl bg-gray-100 "
                        id="city" type="text" placeholder="" wire:model.lazy="city">
                    @error('city')
                        <span class="error text-red-700 text-sm italic font-bold "> {{ $message }} </span>
                    @enderror
                </div>
                <!-- State / Province -->
                <div class="col-span-1">
                    <label class="block font-semibold text-sm text-gray-500" for="state">State / Province:</label>
                    <input
                        class="appearance-none block w-full rounded py-1  shadow-xl shadow-gray-300 h-10  @error('state')  form-error border-red-300 focus:border-red-300 border-2 @enderror  rounded-tr-3xl rounded-br-3xl bg-gray-100 "
                        id="state" type="text" placeholder="" wire:model.lazy="state">
                    @error('state')
                        <span class="error text-red-700 text-sm italic font-bold "> {{ $message }} </span>
                    @enderror
                </div>
                <!-- Zip Code / Postal Code -->
                <div class="col-span-1">
                    <label class="block font-semibold text-sm text-gray-500" for="zip_code">Zip Code / Postal
                        Code:</label>
                    <input
                        class="appearance-none block w-full rounded py-1  shadow-xl shadow-gray-300 h-10  @error('zip_code')  form-error border-red-300 focus:border-red-300 border-2 @enderror  rounded-tr-3xl rounded-br-3xl bg-gray-100 "
                        id="zip_code" type="text" placeholder="" wire:model.lazy="zip_code">
                    @error('zip_code')
                        <span class="error text-red-700 text-sm italic font-bold "> {{ $message }} </span>
                    @enderror
                </div>
                <!-- Phone -->
                <div class="col-span-1">
                    <label class="block font-semibold text-sm text-gray-500" for="phone">Phone:</label>
                    <input
                        class="appearance-none block w-full rounded py-1  shadow-xl shadow-gray-300 h-10  @error('phone')  form-error border-red-300 focus:border-red-300 border-2 @enderror  rounded-tr-3xl rounded-br-3xl bg-gray-100 "
                        id="phone" type="text" placeholder="" wire:model.lazy="phone">
                    @error('phone')
                        <span class="error text-red-700 text-sm italic font-bold "> {{ $message }} </span>
                    @enderror
                </div>
                <!-- Looking to buy : price range from and price range to  -->
                <div class="col-span-1 pt-12">
                    <label class="block font-semibold text-sm text-gray-500" for="">Looking to buy: Price
                        Range</label>
                    <label class="block font-semibold text-sm text-gray-500" for="price_range_from">From</label>
                    <input
                        class="appearance-none block w-full rounded py-1  shadow-xl shadow-gray-300 h-10  @error('price_range_from')  form-error border-red-300 focus:border-red-300 border-2 @enderror  rounded-tr-3xl rounded-br-3xl bg-gray-100 "
                        id="price_range_from" type="text" placeholder="" wire:model.lazy="price_range_from">
                    @error('price_range_from')
                        <span class="error text-red-700 text-sm italic font-bold "> {{ $message }} </span>
                    @enderror
                    <label class="block font-semibold text-sm text-gray-500" for="price_range_to">To</label>
                    <input
                        class="appearance-none block w-full rounded py-1  shadow-xl shadow-gray-300 h-10  @error('price_range_to')  form-error border-red-300 focus:border-red-300 border-2 @enderror  rounded-tr-3xl rounded-br-3xl bg-gray-100 "
                        id="price_range_to" type="text" placeholder="" wire:model.lazy="price_range_to">
                    @error('price_range_to')
                        <span class="error text-red-700 text-sm italic font-bold "> {{ $message }} </span>
                    @enderror
                </div>
                <!-- Number of Bedrooms -->
                <div class="col-span-1 pt-4">
                    <label class="block font-semibold text-sm text-gray-500" for="number_of_bedrooms">Number Of
                        Bedrooms</label>
                    <select
                        class="appearance-none block  rounded  w-full shadow-xl shadow-gray-300 h-10  text-center text-sm font-semibold text-gray-500  @error('number_of_bedrooms')  form-error border-red-300 focus:border-red-600 border-2 @enderror rounded-tr-3xl rounded-br-3xl bg-gray-100"
                        id="number_of_bedrooms" wire:model.lazy="number_of_bedrooms">
                        <option value="">Select Number of Bedrooms</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5+">5+</option>
                        <option value="none">none</option>
                    </select>
                    @error('number_of_bedrooms')
                        <span class="error text-red-700 text-sm italic font-bold "> {{ $message }} </span>
                    @enderror
                </div>
                <!-- Number of Bathrooms -->
                <div class="col-span-1 pt-4">
                    <label class="block font-semibold text-sm text-gray-500" for="number_of_bathrooms">Number Of
                        Bathrooms</label>
                    <select
                        class="appearance-none block  rounded  w-full  shadow-xl shadow-gray-300 h-10  text-center text-sm font-semibold text-gray-500  @error('number_of_bathrooms')  form-error border-red-300 focus:border-red-600 border-2 @enderror rounded-tr-3xl rounded-br-3xl bg-gray-100"
                        id="number_of_bathrooms" wire:model.lazy="number_of_bathrooms">
                        <option value="">Select Number of Bedrooms</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5+">5+</option>
                        <option value="none">none</option>
                    </select>
                    @error('number_of_bathrooms')
                        <span class="error text-red-700 text-sm italic font-bold "> {{ $message }} </span>
                    @enderror
                </div>
                <!-- Type of Property -->
                <div class="col-span-1 pt-4">
                    <label class="block font-semibold text-sm text-gray-500" for="type_of_property">Type Of
                        Property</label>
                    <select
                        class="appearance-none block  rounded w-full  shadow-xl shadow-gray-300 h-10  text-center text-sm font-semibold text-gray-500  @error('type_of_property')  form-error border-red-300 focus:border-red-600 border-2 @enderror rounded-tr-3xl rounded-br-3xl bg-gray-100"
                        id="type_of_property" wire:model.lazy="type_of_property">
                        <option value="">Select Type Of Property</option>
                        <option value="Residential">Residential</option>
                        <option value="Condominium">Condominium</option>
                        <option value="Multifamily">Multifamily</option>
                        <option value="Commercial">Commercial</option>
                        <option value="Lots and Land">Lots and Land</option>
                        <option value="Recreational">Recreational</option>
                        <option value="Farm and Ranch">Farm and Ranch</option>
                        <option value="Other">Other</option>
                    </select>
                    @error('type_of_property')
                        <span class="error text-red-700 text-sm italic font-bold "> {{ $message }} </span>
                    @enderror
                </div>
                <!-- Message -->
                <div class="col-span-1 pt-4">
                    <label class="block font-semibold text-sm text-gray-500" for="message">Your Message:</label>
                    <div>
                        <textarea
                            class="w-full  shadow-xl shadow-gray-300 rounded-tr-3xl rounded-br-3xl bg-gray-100 @error('message')  form-error border-red-300 focus:border-red-300 border-2 @enderror"
                            id="message" name="message" rows="11" wire:model.lazy="message"></textarea>
                        @error('message')
                            <span class="error text-red-700 text-sm italic font-bold "> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-span-1 flex justify-center">
                    <button type="submit"
                        class=" rounded bg-gray-100 hover:bg-gray-200 font-bold p-2 border-4 border-gray-200 w-1/2 text-gray-600 text-xl rounded-tr-3xl rounded-br-3xl"
                        wire:click="sendMessage">Send</button>
                </div>
            </div>
        </div>
    @endif

    <!-- Message sent success -->
    @if ($message_sent)
        <div class="flex justify-center p-36">
            <div
                class="alert alert-success mb-10 bg-green-300/70 text-gray-700 font-semibold p-4 shadow-xl shadow-gray-500 rounded-lg">
                Thank you for your message! We will contact you as soon as possible.
            </div>
        </div>
    @endif
</div>
