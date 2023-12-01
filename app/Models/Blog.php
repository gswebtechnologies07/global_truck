<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Blog extends Authenticatable
{   
    protected $primarykey="id";
    protected $table = 'blogs';
    protected $guarded=[]; 
    public $timestamps=true; 
    
    
    use HasApiTokens, HasFactory, Notifiable;

    
}
