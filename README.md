# CLI Color

PHP Class for Coloring PHP Command Line (CLI) Scripts Output

# CLI Color
PHP Class for Coloring PHP Command Line (CLI) Scripts Output

## Installation
This project using composer.
```
$ composer require milad-abooali/cli-color
```

## Usage
Set color for echo output:
```php
<?php

use cliColor\cliColor;

$colors = new cliColor();
echo $colors->setColor("Testing", "purple", "yellow")
```

Also check examples folder.

![Example](https://i.ibb.co/273hyj1/Capture.png)
