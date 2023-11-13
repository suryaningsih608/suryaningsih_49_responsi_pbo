<?php
// buat namespace
namespace Data;

// buat kelas shape
class Shape
{
    //Mengembalikan jumlah sudut (corner) untuk bentuk geometris.
    //Defaultnya mengembalikan -1.
    public function getCorner()
    {
        return -1;
    }

}
//Class Rectangle
//Mewakili persegi panjang dan merupakan turunan dari Shape.
class Rectangle extends Shape
{
    //Mengembalikan jumlah sudut (corner) untuk persegi panjang.
    //Menggantikan metode getCorner() dari kelas induk (Shape) dan mengembalikan 4.
    public function getCorner()
    {
        return 4;
    }
    //Mengembalikan jumlah sudut (corner) dari kelas induk (Shape) menggunakan parent::getCorner().
    //Menunjukkan penggunaan keyword 'parent' untuk memanggil metode dari kelas induk.
    public function getParentCorner()
    {
        return parent::getCorner();
    }
}