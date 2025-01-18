<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;
    //
    // protected $table="Student";
    // protected $primaryKey="MyStudent";
    // protected $guarded = ['name', 'email'];==> ignore
    // protected $fillable = ['name', 'email']==>access
    protected $fillable = ['name', 'email', 'image', 'gender','track_id'];

    function track()
    {
        // return $this->belongsTo(Track::class,'track_id','myId');
        return $this->belongsTo(Track::class);
    }
}
