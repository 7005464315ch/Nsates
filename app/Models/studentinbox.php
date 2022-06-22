<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentinbox extends Model
{
    
    use HasFactory;
    public $timestamps=false;
    protected $table = 'student_inbox';
    protected $primaryKey ='id';
    protected $fillable = [
     'entry_code','reference_code','reference_name','student_code','student_name','email','subject','description','attechment_one','attechment_two','created_date'];
}
