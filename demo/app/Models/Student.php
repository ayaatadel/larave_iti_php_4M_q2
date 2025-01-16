<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Student extends Model
{
    use HasFactory;
    //
    // protected $table="Student";
    // protected $primaryKey="MyStudent";
    // protected $guarded = ['name', 'email'];==> ignore
    // protected $fillable = ['name', 'email']==>access
    protected $fillable = ['name', 'email', 'image', 'gender'];
}
