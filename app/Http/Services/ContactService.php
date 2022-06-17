<?php

namespace App\Http\Services;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactService
{
    private $validation;

    // public function __construct(ArticleRequest $articleRequest)
    // {
    //     $this->validation = $articleRequest;
    // }

    /**
     * create
     *
     * @param  mixed $contact
     * @param  mixed $request
     * @return Contact
     */
    public function create(Contact $contact, Request $request) :Contact
    {
        $contact->is_client     = $request->input('is_client') == 'on' ? true : false;
        $contact->name          = $request->input('name');
        $contact->activity      = $request->input('activity');
        $contact->siren         = $request->input('siren');
        $contact->address       = $request->input('address');
        $contact->city          = $request->input('city');
        $contact->zip_code      = $request->input('zip_code');
        $contact->website_url   = $request->input('website');
        $contact->facebook_url  = $request->input('facebook');
        $contact->instagram_url = $request->input('instagram');
        $contact->entity_id     = Auth::user()->entity->id;

        $contact->save();

        return $contact;
    }

    /**
     * update
     *
     * @param  mixed $contact
     * @param  mixed $request
     * @return Contact
     */
    public function update(Contact $contact, Request $request) :Contact
    {
        $contact->update([
            'is_client'     => $request->input('is_client') == 'on' ? true : false,
            'name'          => $request->input('name'),
            'activity'      => $request->input('activity'),
            'siren'         => $request->input('siren'),
            'address'       => $request->input('address'),
            'city'          => $request->input('city'),
            'zip_code'      => $request->input('zip_code'),
            'website_url'   => $request->input('website'),
            'facebook_url'  => $request->input('facebook'),
            'instagram_url' => $request->input('instagram')
        ]);

        return $contact;
    }
}
