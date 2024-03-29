<?php

namespace App\Models;
use Webpatser\Uuid\Uuid;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $fillable = ['name'];


    public static function boot()
    {
        parent::boot();

        self::creating(function($model){
            $model->uuid = (string) Uuid::generate(4);
        });
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
