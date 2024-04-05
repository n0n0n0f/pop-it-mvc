<?php

namespace Validators;

use AbstractValidator;

class MinLengthValidator extends AbstractValidator
{
    protected string $message = 'Поле :field должно содержать минимум :min символов';

    public function rule(): bool
    {
        $minLength = $this->args[0];
        return strlen($this->value) >= $minLength;
    }
}
