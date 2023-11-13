<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$suryani = new Person("suryani", "riau");

// tambahkan value nama di object
$suryani->nama = "suryani";

// panggil function sayHelloNull dengan parameter
$suryani->sayHelloNull("Sobat");

// buat object dari kelas person
$ningsih = new Person("ningsih", "bengkulu");

// tambahkan value nama di object
$ningsih->nama = "ningsih";

// panggil function sayHelloNull dengan parameter null
$ningsih->sayHelloNull(null);
