<?php

$connect = new mysqli("localhost","root","","db_restapi");

if($connect){

}else{
    echo "Connection Failed";
    exit();
}