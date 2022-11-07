<?php

use Codewars\RemoveStringSpacesAction;

it('returns string', function () {
    $removeStringSpacesAction = new RemoveStringSpacesAction();
    $value = '8 j 8   mBliB8g  imjB8B8  jl  B';
    expect(($removeStringSpacesAction->execute($value)))->toBeString();
});