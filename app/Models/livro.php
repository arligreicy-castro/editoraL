<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livro extends Model
{
	protected $fillable = ['genero_id','titulo', 'sinopse'];
	
	public function genero()
	{
		return $this->belongsTo(genero::class);//pertence a um genero
	}
    use HasFactory;
}
