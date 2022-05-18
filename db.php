<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "meta_data");


if(isset($POST))