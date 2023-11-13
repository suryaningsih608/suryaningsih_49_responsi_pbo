<?php

// buat namespace
// import data dari conflict
require "conflict.php";
// buat obeject dari namespace yang di buat
$conflict1 = new data\satu\conflict();
$conflict2 = new data\dua\conflict();
// import data helper
require "helper.php";
// tampilkan helper menggunakan echo
echo Helper\APPLICATION .PHP_EOL;
// masukan Helper\helpMe();
Helper\helpMe();
