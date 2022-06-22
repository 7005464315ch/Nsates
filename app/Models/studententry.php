<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studententry extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'student_entry';
    protected $primaryKey ='id';
    protected $fillable = [
        'student_entry_code','student_code','reference_code','reference_name','student_no','reg_no','dsecp','full_name','department_name','hostel_no','room_no','admission_years','gender','dob','email','phone_no','state','country','zipcode','other_info','upload_date','created_date'

           
    ];
}
