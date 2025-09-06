<?php

use TestDevCi\App;

test('it returns a numeric string', function () {
    $app = new App();

    expect($app->doSomething())->toBe('23');
});
