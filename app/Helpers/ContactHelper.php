<?php

namespace App\Helpers;

use App\Models\Contact;

class ContactHelper {
    public static function get_clients(Contact $contact)
    {
        if ($contact->is_client)
        {
            echo '<span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-green-500 text-white rounded-full">Client</span>';
        }else {
            echo '<span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded-full">Prospect</span>';
        }
    }
}