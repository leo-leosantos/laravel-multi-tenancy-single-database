<?php

namespace App\Models;

use App\Tenant\Traits\TenantTrait;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    use TenantTrait;


    protected $fillable = ['user_id','title','body','image'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
