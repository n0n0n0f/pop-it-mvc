<?php

namespace Validators;

use AbstractValidator;

class NoSpecialSymbolsValidator extends AbstractValidator
{
    protected string $message = 'Поле :field не может содержать специальные символы';

    public function rule(): bool
    {
        $symbols = '!@#$%^&*()_+}{":?><';
        return !preg_match('/['.$symbols.']/', $this->value);
    }
}
