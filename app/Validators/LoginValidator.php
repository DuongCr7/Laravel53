<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class LoginValidator extends LaravelValidator
{
	const RULE_LOGIN = 'login';
    protected $rules = [
	    ValidatorInterface::RULE_CREATE => [],
	    ValidatorInterface::RULE_UPDATE => [],
	    self::RULE_LOGIN                => [
		    'email'    => 'required|email',
		    'password' => 'required|min:8'
	    ]
   ];
   protected $messages = [
    'email.required' => 'The sladjsa field is required.',
];
}
