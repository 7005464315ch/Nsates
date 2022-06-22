<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'student_users';
    protected $primaryKey ='id';
    protected $fillable = [
        'student_code','student_no','reg_no','department_name','hostel_no','room_no','admission_year','first_name','middle_name','last_name','gender','years','month','date','email','phone_no','password','address_one','address_two','city','state','country','zipcode','other_info','picture','created_date'

           
    ];
}
