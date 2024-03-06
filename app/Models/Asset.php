<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Venturecraft\Revisionable\RevisionableTrait;

class Asset extends Model
{
    use HasFactory;
    use RevisionableTrait;
    use SoftDeletes;
    protected $keepRevisionOf = ['asset_no','serial_no','deleted_at'];
    protected $revisionEnabled = true;
    protected $revisionForceDeleteEnabled = false;
    protected $revisionCleanup = true; //Remove old revisions (works only when used with $historyLimit)
    protected $historyLimit = 200; //Maintain a maximum of 500 changes at any point of time, while cleaning up old revisions.


    public $table = 'asset';
   
    protected $fillable = [
        'asset_no','serial_no','brand_id','assigned_to','purchase_year',
        'department_id','location','device_id','user_id',
        
    ];

  
    public function user()
    {
        return $this->belongsTo(User::class);
        
    }
    public function officer()
    {
        return $this->belongsTo(Asetofficer::class);
    }
    public function device()
    {
        return $this->belongsTo(Device::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function downloadPdf()
    {
        return $this->belongsTo(Department::class);
    }



    public static function boot()
    {
        parent::boot();
    }
}




