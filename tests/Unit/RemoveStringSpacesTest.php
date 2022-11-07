<?php

use Codewars\RemoveStringSpacesAction;

it('returns string', function () {
    $removeStringSpacesAction = new RemoveStringSpacesAction();
    $value = 'this is a string';
    expect(($removeStringSpacesAction->execute($value)))->toBeString();
});

it('removes the whitespaces', function () {
    $removeStringSpacesAction = new RemoveStringSpacesAction();
    $value = '8 j 8   mBliB8g  imjB8B8  jl  B';
    expect(($removeStringSpacesAction->execute($value)))->toEqual('8j8mBliB8gimjB8B8jlB');
});

it('returns string if not removing spaces needed', function () {
    $removeStringSpacesAction = new RemoveStringSpacesAction();
    $value = '8j8mBliB8gimjB8B8jlB';
    expect(($removeStringSpacesAction->execute($value)))->toEqual('8j8mBliB8gimjB8B8jlB');
});