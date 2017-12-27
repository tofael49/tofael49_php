<?php
require "vendor/autoload.php";
use illuminate\database\capsule\Manager as Capsule;

Capsule::schema()->create('students', function ($t){
    $t->increments('id');
    $t->string('name');
    $t->string('email')->unique();
    $t->string('phone');
    $t->string('adress');
    $t->string('class');
    $t->string('password');
    $t->string('roll')->unique();
    $t->timestamps();

});
Capsule::schema()->create('teachers', function ($t){
    $t->increments('id');
    $t->string('name');
    $t->string('email')->unique();
    $t->string('phone');
    $t->string('adress');
    $t->timestamps();
});
Capsule::schema()->create('employees', function ($t){
    $t->increments('id');
    $t->string('name');
    $t->string('email')->unique();
    $t->string('phone');
    $t->string('adress');
    $t->timestamps();
});
