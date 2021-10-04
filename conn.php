<?php
  $koneksi = mysqli_connect('localhost','root','','portfolio');
  if (!$koneksi) {
    var_dump(!$koneksi);
    die("Erronya : ". mysqli_connect_error());
  }
