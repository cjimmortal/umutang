<?php
    include '../class/class.php';

    if(isset($_POST['LoanId'])){
        $loanid = $_POST['LoanId'];
        $delete = new DeleteRows((int) $loanid);
        $delete->deleteLoansRow();
    }

    else if(isset($_POST['BorrowerId'])){
        $borrowerid = $_POST['BorrowerId'];
        $delete = new DeleteRows((int) $borrowerid);
        $delete->deleteBorrowerRow();
    }

    else if(isset($_POST['ExpenseId'])){
        $expensesid = $_POST['ExpenseId'];
        $delete = new DeleteRows((int) $expensesid);
        $delete->deleteExpensesRow();
    }


