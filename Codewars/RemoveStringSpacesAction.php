<?php

namespace Codewars;

class RemoveStringSpacesAction
{
    public function execute(string $value): string
    {
        return str_replace(' ', '', $value);
    }
}
