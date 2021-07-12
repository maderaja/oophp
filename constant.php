<?php

// define('NAMA', 'Raja Mahendra');
// echo NAMA;

// const UMUR = 17;
// echo UMUR;

// class Coba
// {
//   const NAMA = 'Raja';
// }
// echo Coba::NAMA;


// echo __FILE__;

// function coba()
// {
//   return __FUNCTION__;
// }

// echo coba();

class Coba
{
  public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
