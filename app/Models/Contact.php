<?php

namespace App\Models;

use App\Models\Entity;
use Illuminate\Support\Str;
use App\Models\Interlocutor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    protected $fillable = [
        'is_client',
        'name',
        'siren',
        'website_url',
        'facebook_url',
        'instagram_url',
        'note',
        'activity',
        'zip_code',
        'city',
        'address',
        'entity_id'
    ];

    use HasFactory;

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    public function scopeContacts()
    {
        return Contact::where('entity_id', Auth::user()->entity )->get();
    }

    /**
     * entity
     *
     * @return BelongsTo
     */
    public function entity() :BelongsTo
    {
        return $this->belongsTo(Entity::class);
    }

    /**
     * interlocutors
     *
     * @return HasMany
     */
    public function interlocutors() :HasMany
    {
        return $this->hasMany(Interlocutor::class);
    }

    protected static function booted(){
        static::creating(function ($contact){
            $contact->id = Str::uuid()->toString();
        });
    }
}
