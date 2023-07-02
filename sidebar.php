<div class="sidebar" id="sidebar">
    <div class="logo-box">
        <center><img class="logo-sidebar-img"  src="assets/logo2.PNG"></center>
    </div>
    <div class="modules-box">
        <a href="dashboard.php" class="moduless"><img class="sidebar-icons"  src="assets/dashboard.png">Dashboard</a>
        <a class="moduless"><img class="sidebar-icons"  src="assets/quickadd.png">Quick Add <img class="sidebar-dropdown"  src="assets/dropdown.png"></a>
            <a class="under-moduless" data-toggle="modal" data-target="#addBorrowerModal">Borrower</a>
            <a  class="under-moduless" data-toggle="modal" data-target="#addLoansModal">Loans</a>
            <a class="under-moduless" data-toggle="modal" data-target="#addExpensesModal">Expenses</a>
        <a href="borrowers.php" class="moduless"><img class="sidebar-icons"  src="assets/customer-icon.png">Borrowers</a>
        <a href="loans.php" class="moduless"><img class="sidebar-icons"  src="assets/loans.png">Loans</a>
        <a href="expenses.php" class="moduless"><img class="sidebar-icons"  src="assets/expenses.png">Expenses</a>
        <a href="#" class="moduless"><img class="sidebar-icons"  src="assets/REPORTS.png">Reports</a>

    </div>
</div>

<?php   include 'includes/add-borrower.php';
        include 'includes/add-expenses.php'; 
        include 'includes/add-loan.php'   
        
        ?>

        <style>
            .moduless:hover{
                background-color:#333333;
                border-right: solid #D9D9D9 5px;
                color:white;
                text-decoration:none;
            }
            .moduless:active{
                background-color:#333333;
                border-right: solid #D9D9D9 5px;
                color:white;
                text-decoration:none;
            }
        </style>