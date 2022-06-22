<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guestentry extends Model
{
    
    use HasFactory;
    public $timestamps=false;
    protected $table = 'guest_entry';
    protected $primaryKey ='id';
    protected $fillable = [
     'entry_code','reference_code','reference_name','guest_name','guest_desc','email','phone_no','guest_gender','guest_addhaar','addhaar_pic','pancard_no','pancard_pic','address','city','state','country','zipcode','guest_otherinfo','member_no','member_name','member_gender','member_doc_no','guest_pic','group_pic','created_date'];
}
