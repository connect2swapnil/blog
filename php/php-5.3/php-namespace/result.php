<?php

namespace Result;

require_once "FooClass.php";
require_once "BarClass.php";

use foo as f;
use bar as b;

echo f\FooClass::display();