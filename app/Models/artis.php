<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artis extends Model
{
	protected $table ="tb_artis";

	protected $primarykey = 'artis_id';

	protected $fillable = ['artis_nama'];
	
    use HasFactory;
}
