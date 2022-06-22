<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicalentry extends Model
{
    
    use HasFactory;
    public $timestamps=false;
    protected $table = 'vehical_entry';
    protected $primaryKey ='id';
    protected $fillable = [
     'entry_code','reference_code','reference_name','vehical_reg_no','vehical_type','owner_name','vehical_md_comp','vehical_model','vehical_trans_comp','passenger_no','dsecp','driver_rc_no','driver_name','driver_phone_no','owner_phone_no','driver_gender','address','city','state','country','zipcode','other_info','vehical_pic','driver_pic','licence_pic','created_date'];
}