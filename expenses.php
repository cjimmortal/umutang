<?php
include 'connection/dbconn.php';
include 'class/class.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umutang</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="d-data.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- sweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <?php 
    include 'navbar.php';
    include 'sidebar.php';
    ?>
    <div class="d-data" >


        <div class="loans-data" id="loans-data"> 
              <div class="page-title-pagination">
                
                    <div class="div-title-page">
                        <p class="title-page">Expenses / <span>All Expenses</span></p>
                    </div>
                    <div class="pagination">
                        <button data-toggle="modal" data-target="#addExpensesModal" class="btn-add-loans">Add New Expenses</button>               
                    </div>
              </div>
            <!-- unpaid -->
              <div class="loans-loans col-sm-12">
                  <div class="d-loans-content">
                    <div class="div-title-page">
                        <p class="loans-title-3">Unpaid Expenses</p>
                    </div>

                    <div class="Pagination2">
                        <p class="pagination-count" >1-10 of 50</p>
                        <div class="pagination-bg">
                            <img class="loans-pagination-img" src="assets/arrow-right.png" style="-webkit-transform: scaleX(-1); transform: scaleX(-1);" >
                        </div>
                        <div class="pagination-bg">
                            <img class="loans-pagination-img" src="assets/arrow-right.png" >
                        </div>
                    </div>
                        
                    <table class="loans-table">
                        <tr>
                            <th >IDnumber</th>
                            <th>Amount</th>
                            <th>Description</th> 
                            <th>Date/Time</th>
                            <th>Status</th>
                            <th>Actions</th>
                            
                        </tr>
                        <?php
                        $displayExpenses = new display();
                        $displayExpenses->displayExpensesData();
                        ?>
                        
   
                    </table>
                    
                    <br>
                  </div>
              </div>
            <!-- paid -->
              <div class="loans-loans col-sm-12">
                  <div class="d-loans-content">
                    <div class="div-title-page">
                        <p class="loans-title-3">Paid Expenses</p>
                    </div>

                    <div class="Pagination2">
                        <p class="pagination-count" >1-10 of 50</p>
                        <div class="pagination-bg">
                            <img class="loans-pagination-img" src="assets/arrow-right.png" style="-webkit-transform: scaleX(-1); transform: scaleX(-1);" >
                        </div>
                        <div class="pagination-bg">
                            <img class="loans-pagination-img" src="assets/arrow-right.png" >
                        </div>
                    </div>
                        
                    <table class="loans-table">
                        <tr>
                            <th >IDnumber</th>
                            <th>Amount</th>
                            <th>Description</th> 
                            <th>Date/Time</th>
                            <th>Status</th>
                            <!-- <th>Actions</th> -->
                            
                        </tr>
                        <?php
                        $displayExpenses = new display();
                        $displayExpenses->displayShowUnpaidExpenseData();
                        ?>
                        
   
                    </table>
                    
                    <br>
                  </div>
              </div>
 
        </div>
            
            

  
        
    </div>
    <?php include 'footer.php'?>
</body>
</html>
<script src="js/main.js"></script>
<style>
    body{
        background-color:#F8F0F0;
    }
    /* sweet alert */
    div:where(.swal2-container) div:where(.swal2-popup) {
    width: 38em;
    font-size: 12px;
    }
</style>