<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tki extends Model
{
    use HasFactory;
    protected $table = 'mst_tki'; // This is the table name
    protected $guarded = []; // This is the field name
    public $timestamps = false;
}
