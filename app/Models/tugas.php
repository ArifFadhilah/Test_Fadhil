<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tugas extends Model
{
	use HasFactory;
    protected $fillable = ['id', 'barcode', 'product_name', 'price', 'status'];

    protected $table = 'datatable';
}
