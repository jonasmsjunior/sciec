<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class CourseValidator extends LaravelValidator
{

    protected $rules = [
        ValidatorInterface::RULE_CREATE => ['nome' => 'required|max:2',],
        ValidatorInterface::RULE_UPDATE => [],
   ];

}
