<?php
    include '../class/class.php';

    $borrower = $_POST['borrower'];
    $amount = $_POST['amount'];
    $fee = $_POST['fee'];

    $add = new quicklinksLoan((string)$borrower,(int)$amount,(int)$fee);
    $add->addtoDB();
    $add->addborrowedFeetoCustomer();
    



