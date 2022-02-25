<?php

require_once("templates/head.php");

if($userDao) {
  $userDao->destroyToken();
}