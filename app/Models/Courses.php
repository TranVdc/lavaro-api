<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     * https://blog.treblle.com/how-to-create-rest-api-using-laravel/
     * @var string
     */
    protected $table = 'courses';
}
