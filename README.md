# CLI Color

PHP Class for Coloring PHP Command Line (CLI) Scripts Output

[![License](https://poser.pugx.org/phpunit/phpunit/license)](//packagist.org/packages/phpunit/phpunit)

[![Latest Stable Version](https://poser.pugx.org/phpunit/phpunit/v)](//packagist.org/packages/phpunit/phpunit)

[![Build Status](https://travis-ci.com/Milad-Abooali/cliColor.svg?branch=main)](https://travis-ci.com/Milad-Abooali/cliColor)
[![codecov](https://codecov.io/gh/wujunze/php-cli-color/branch/master/graph/badge.svg)](https://codecov.io/gh/wujunze/php-cli-color)
[![Latest Stable Version](https://poser.pugx.org/wujunze/php-cli-color/v/stable)](https://packagist.org/packages/wujunze/php-cli-color) [![Total Downloads](https://poser.pugx.org/wujunze/php-cli-color/downloads)](https://packagist.org/packages/milad-abooali/cli-color) [![License](https://poser.pugx.org/wujunze/php-cli-color/license)](https://packagist.org/packages/wujunze/php-cli-color)


# CLI Color
PHP Class for Coloring PHP Command Line (CLI) Scripts Output

## Installation
This project using composer.
```
$ composer require milad-abooali/cli-color
```

## Usage
Genrate random password.
```php
<?php

use cliColor\cliColor;

$colors = new cliColor();
echo $colors->setColor("Testing", "purple", "yellow")
```

Also check examples folder.

![Example](https://i.ibb.co/273hyj1/Capture.png)
