<?php
  // Simple page redirect
  function redirect($page) :void{
    header('location: '.URLROOT.'/'.$page);
  }
?>
