<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    public $table = 'revisions';
   
    protected $fillable = [
        'revisionable_type','revisionable_id','asset_no','serial_no','user_id','key','old_value','new_value'  
    ];

}
