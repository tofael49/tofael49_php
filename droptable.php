<?php
require "vendor/autoload.php";
use illuminate\database\capsule\Manager as Capsule;

Capsule::schema()->dropIfExists('students');
Capsule::schema()->dropIfExists('teachers');
Capsule::schema()->dropIfExists('employees');
