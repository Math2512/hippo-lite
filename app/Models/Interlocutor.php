<?php

namespace App\Models;

use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Interlocutor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'mail',
        'job',
        'is_favorite',
        'contact_id'
    ];

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

    /**
     * contact
     *
     * @return BelongsTo
     */
    public function contact() :BelongsTo
    {
        return $this->belongsTo(Contact::class);
    }

    protected static function booted(){
        static::creating(function ($contact){
            $contact->id = Str::uuid()->toString();
        });
    }
}
