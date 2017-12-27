<?php
require "vendor/autoload.php";
use illuminate\database\capsule\manager as Capsule;

$students = Capsule::select('select * from students');
require 'views/view.view.php';

