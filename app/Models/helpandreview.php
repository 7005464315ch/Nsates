<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class helpandreview extends Model
{
    
    use HasFactory;
    public $timestamps=false;
    protected $table = 'helpandreview';
    protected $primaryKey ='id';
    protected $fillable = [
     'entry_code','staff_code','staff_name','email','subject','description','attechment_one','attechment_two','created_date'];
}
