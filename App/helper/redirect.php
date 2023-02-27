<?php
  // Simple page redirect
  function redirect($page){
    header('location: '.URLROOT. $page );
  }
  function redirectTime($file,$secondes =3)
{
    header( "refresh:".$secondes.";url=".URLROOT.$file );
}