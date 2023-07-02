<?php
    include '../class/class.php';

    if(isset($_POST['LoanId'])){
        $loanid = $_POST['LoanId'];
        $paid = new PaidRows((int)$loanid);
        $paid->paidLoansRow();
    }

    if(isset($_POST['ExpenseId'])){
        $expenseid = $_POST['ExpenseId'];
        $paid = new PaidRows((int)$expenseid);
        $paid->paidExpenseRow();
        

    }

    