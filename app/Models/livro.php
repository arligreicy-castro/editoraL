<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livro extends Model
{
	protected $fillable = ['titulo', 'sinopse'];
	
	public function genero()
	{
		return $this->belongsTo(genero::class);
	}
    use HasFactory;
}
