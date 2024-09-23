<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dbtnproducts extends Model
{
    use HasFactory;
    protected $fillable = [
        'dbtcname',
        'dbtcqty',
        'dbtcprice',
        'dbtcdescription'

    ];
}
