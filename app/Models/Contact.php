<?php

namespace App\Models;

use App\Models\Entity;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function entity() :BelongsTo
    {
        return $this->belongsTo(Entity::class);
    }

    protected static function booted(){
        static::creating(function ($contact){
            $contact->id = Str::uuid()->toString();
        });
    }
}
