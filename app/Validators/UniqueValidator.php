<?php

namespace Validators;

use Illuminate\Database\Capsule\Manager as Capsule;
use Src\Validator\AbstractValidator;

class UniqueValidator extends AbstractValidator
{

    protected string $message = 'Поле :field должно быть уникальным';

    public function rule(): bool
    {
        $tableName = $this->args[0];
        $columnName = $this->args[1];
        
        return (bool)!Capsule::table($tableName)->where($columnName, $this->value)->count();
    }
}