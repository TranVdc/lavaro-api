<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LavaroUsers extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     * https://blog.treblle.com/how-to-create-rest-api-using-laravel/
     * @var string
     */
    protected $table = 'lavaro_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['role'];
}
