<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'staff_users';
    protected $primaryKey ='id';
    protected $fillable = [
        'staff_code','employee_no','department_name','post','first_name','middle_name','last_name','gender','years','month','date','email','phone_no','password','address_one','address_two','city','state','country','zipcode','picture','update_date','created_date'

           
    ];
}
