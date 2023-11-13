<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$person1 = new Person("suryani","riau");

// panggil function
$person1->sayHello("suryani");

// panggil self keyword
$person1->info();
