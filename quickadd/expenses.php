<?php
    include '../class/class.php';

    $amount=$_POST['amount'];
    $purpose=$_POST['purpose'];

    $add = new quicklinksExpenses((int)$amount,(string)$purpose);
    $add->addtoDB();

