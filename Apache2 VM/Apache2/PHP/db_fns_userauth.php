<?php

function db_connect() {
   $result = new mysqli('192.168.182.137', 'loginHandler', 'S3cur3Pa22', 'userauth');
   if (!$result) {
      return false;
   }
   $result->autocommit(TRUE);
   return $result;
}

?>
