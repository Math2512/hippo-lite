<?php

namespace App\Models;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Entity extends Model
{
    protected $fillable = ['name', 'id'];

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

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function contacts() :HasMany
    {
        return $this->hasMany(Contact::class);
    }

    protected static function booted(){
        static::creating(function ($entity){
            $entity->id = (string) Str::uuid();
        });
    }
}
