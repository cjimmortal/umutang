<?php
include '../class/class.php';

$fullname = $_POST['fullname'];

$throw = new quicklinksBorrower((string)$fullname);
$throw->addtoDB();