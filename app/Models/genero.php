<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genero extends Model
{
	protected $fillable = ['descritivo'];
	public function livros()
	{
		return $this->hasMany(livro::class);
	}
    use HasFactory;
}
