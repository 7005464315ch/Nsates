<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studenthelpreview extends Model
{
    
    use HasFactory;
    public $timestamps=false;
    protected $table = 'student_help';
    protected $primaryKey ='id';
    protected $fillable = [
     'entry_code','student_code','student_name','email','subject','description','attechment_one','attechment_two','created_date'];
}
