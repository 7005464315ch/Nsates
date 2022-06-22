<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staffentry extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'staff_entry';
    protected $primaryKey ='id';
    protected $fillable = [
        'entry_code','reference_code','reference_name','staff_code','employee_no','department_name','post','full_name','dsecp','gender','dob','email','phone_no','address_one','address_two','city','state','country','zipcode','picture','gate_no','other_info','created_date'

           
    ];
}