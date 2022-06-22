<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fastadmin extends Model
{
    
    use HasFactory;
    public $timestamps=false;
    protected $table = 'fast_admin';
    protected $primaryKey ='id';
    protected $fillable = [
     'fadmin_code','employee_no','department_name','post','first_name','middle_name','last_name','gender','years','month','date','email','phone_no','password','address_one','address_two','city','state','country','zipcode','fadmin_pic','update_date','created_date'];
}
