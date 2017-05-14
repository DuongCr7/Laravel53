<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements Transformable
{
	use TransformableTrait;

	protected $primaryKey  = 'id';
	protected $fillable = [
		'id',
		'name',
		'email'
	];

}
