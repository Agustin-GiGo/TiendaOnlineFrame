<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
	public $timestamps = false;
	protected $fillable =['quien', 'accion', 'que'];
   	use HasFactory;

}
