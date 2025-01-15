<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    // protected $table="Student";
    // protected $primaryKey="MyStudent";
    // protected $guarded = ['name', 'email'];==> ignore
     // protected $fillable = ['name', 'email']==>access
    protected $fillable=['name','email','image','gender'];
}
