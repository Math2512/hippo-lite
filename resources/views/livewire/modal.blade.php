<x-modal method="{{$contact->id ? 'PUT' : 'POST' }}" form-action="{{$contact->id ? route('contacts.update', $contact) : route('contacts.store')}}">
    <x-slot name="title">
        @if ($contact->id)
            {{ __('Modifier '.$contact->name) }}
        @else
            {{ __('Ajouter un contact') }}
        @endif
    </x-slot>

    <x-slot name="content">
        <div class="flex justify-between">
            <div class="mx-1 my-2 flex justify-items-start items-center">
                <label
                    for="toogleA"
                    class="flex items-center cursor-pointer"
                >
                    <!-- toggle -->
                    <div class="relative">
                    <!-- input -->
                    <input {{ $contact->is_client == true ? 'checked' : '' }} id="toogleA" type="checkbox" name="is_client" class="sr-only" />
                    <!-- line -->
                    <div class="w-10 h-4 bg-gray-400 rounded-full shadow-inner"></div>
                    <!-- dot -->
                    <div class="dot absolute w-6 h-6 bg-white rounded-full shadow -left-1 -top-1 transition"></div>
                    </div>
                    <!-- label -->
                    <div class="ml-3 text-gray-700 font-medium">
                    Client ?
                    </div>
                </label>
            </div>
        </div>
        <div class="flex justify-between">
            <div class="mx-2 w-full">
                <x-label for="name" :value="__('Nom')" />
                <x-input id="name" class="block mt-1 w-full p-2" type="text" name="name" value="{{ old('name', $contact->name) }}" />
            </div>

            <div class="mx-2 w-full">
                <x-label for="activity" :value="__('Domaine d\'activité')" />
                <x-input id="activity" class="block mt-1 w-full p-2" type="text" name="activity" value="{{ old('activity', $contact->activity) }}" />
            </div>
        </div>
        <div class="flex justify-between">
            <div class="mx-2 w-full">
                <x-label for="address" :value="__('Adresse')" />
                <x-input id="address" class="block mt-1 w-full p-2" type="text" name="address" value="{{ old('address', $contact->address) }}" />
            </div>

            <div class="mx-2 w-full">
                <x-label for="zip_code" :value="__('Code Postal')" />
                <x-input id="zip_code" class="block mt-1 w-full p-2" type="text" name="zip_code" value="{{ old('zip_code', $contact->zip_code) }}" />
            </div>
        </div>
        <div class="flex justify-between">
            <div class="mx-2 w-full">
                <x-label for="city" :value="__('Ville')" />
                <x-input id="city" class="block mt-1 w-full p-2" type="text" name="city" value="{{ old('city', $contact->city) }}" />
            </div>
            <div class="mx-2 w-full">
                <x-label for="siren" :value="__('Siren')" />
                <x-input id="siren" class="block mt-1 w-full p-2" type="text" name="siren" value="{{ old('siren', $contact->siren) }}" />
            </div>
        </div>
        <div class="flex">
            <div class="mx-2 w-full">
                <x-label for="website" :value="__('Site Web')" />
                <x-input id="website" placeholder="https://" class="block mt-1 w-full p-2" type="text" name="website" value="{{ old('website', $contact->website_url) }}" />
            </div>
        </div>
        <div class="flex justify-between">
            <div class="mx-2 w-full">
                <x-label for="facebook" :value="__('Facebook')" />
                <x-input id="facebook" class="block mt-1 w-full p-2" type="text" name="facebook" value="{{ old('facebook', $contact->facebook_url) }}" />
            </div>
            <div class="mx-2 w-full">
                <x-label for="instagram" :value="__('Instagram')" />
                <x-input id="instagram" class="block mt-1 w-full p-2" type="text" name="instagram" value="{{ old('instagram', $contact->instagram_url) }}" />
            </div>
        </div>
    </x-slot>

    <x-slot name="buttons">
        <a wire:click="$emit('closeModal')" class='cursor-pointer mr-2 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>
            {{ __('Annuler') }}
        </a>
        <x-button class="">
            {{ __('Valider') }}
        </x-button>
    </x-slot>
</x-modal>
