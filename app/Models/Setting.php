<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Setting extends Model
{
    protected $primarykey="id";
    protected $table = 'settings';
    protected $guarded=[]; 
    public $timestamps=false; 

    use HasFactory;
    
    
    protected $fillable = [
        'site_title',
        'logo',
        'fav_icon',
        'meta_key',
        'meta_description',
        'meta_title',
        'email',
        'phone',
        'address',
        'facebook',
        'instagram',
        'operating_hours',
        'linkedin',
        'year_of_development',
        'created_at',
        'updated_at',
    ];

}
