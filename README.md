# CLI Color

PHP Class for Coloring PHP Command Line (CLI) Scripts Output

![Example](https://i.ibb.co/273hyj1/Capture.png)

# CLI Color
PHP Class for Coloring PHP Command Line (CLI) Scripts Output

## Installation
This project using composer.
```
$ composer require Milad-Abooali/cliColor
```

## Usage
Genrate random password.
```php
<?php

use cliColor\cliColor;

$colors = new cliColor();
echo $colors->setColor("Testing", "purple", "yellow")
```
