<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    public $table = 'departments';
    
    protected $fillable = [
        'deptname','pic_id',
    ];

    public function pic()
    {
        return $this->belongsTo(User::class);
    }
}
