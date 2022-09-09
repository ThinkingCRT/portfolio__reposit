<?php

$conn = new mysqli('localhost', 'root', 'root', 'port');

if (!$conn) {
   echo 'Error 404: database';
}
