# CLI Color

PHP Class for Coloring PHP Command Line (CLI) Scripts Output

[![Total Downloads](https://packagist.org/packages/milad-abooali/cli-color)](https://packagist.org/packages/milad-abooali/cli-color)
[![License](https://poser.pugx.org/milad-abooali/cli-color/license)](https://packagist.org/packages/milad-abooali/cli-color)


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
