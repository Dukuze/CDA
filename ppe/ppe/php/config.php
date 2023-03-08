<?php
function bddConnect(){
  $con = mysqli_connect("localhost", "root", "", "gacti");
  return $con;
}

?>