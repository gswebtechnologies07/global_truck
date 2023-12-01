<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmsContent extends Model
{
    protected $primarykey="id";
    protected $table = 'cms_contents';
    protected $guarded=[]; 
    public $timestamps=false; 

    use HasFactory;
}
