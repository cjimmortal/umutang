<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umutang</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

    <?php 
    include 'navbar.php';
    include 'sidebar.php';
    ?>
    <div class="dashboard">
        <div class="dashboard-box">
            <!-- loans -->
            <div class="d-box col-sm-3">
                <div class="d-container">
                    <div class="dashboard-bg-icons" style="background-color:#FFA11B;">
                        <img class="dashboard-icons" src="assets/loans.png">
                    </div>
                        <div class="dashboard-container">
                            <p class="dashboard-title">Loans</p>
                            <p class="dashboard-quantity">50</p>
                        </div>
                            <div class="dashboard-go-icons-div" >
                                <img class="dashboard-go-icons" src="assets/arrow-right.png">
                            </div>
                </div>
            </div>
            <!-- revenue -->
            <div class="d-box col-sm-3">
                <div class="d-container">
                    <div class="dashboard-bg-icons" style="background-color:#6CCA5D;">
                        <img class="dashboard-icons" src="assets/revenue.png">
                    </div>
                        <div class="dashboard-container">
                            <p class="dashboard-title">Revenue</p>
                            <p class="dashboard-quantity">50</p>
                        </div>
                            <div class="dashboard-go-icons-div" >
                                <img class="dashboard-go-icons" src="assets/arrow-right.png">
                            </div>
                </div>
            </div>
            <!-- expenses -->
            <div class="d-box col-sm-3">
                <div class="d-container">
                    <div class="dashboard-bg-icons" style="background-color:#3A3A3A;">
                        <img class="dashboard-icons" src="assets/expenses.png">
                    </div>
                        <div class="dashboard-container">
                            <p class="dashboard-title">Expenses</p>
                            <p class="dashboard-quantity">50</p>
                        </div>
                            <div class="dashboard-go-icons-div" >
                                <img class="dashboard-go-icons" src="assets/arrow-right.png">
                            </div>
                </div>
            </div>
            <!-- borrowers -->
            <div class="d-box col-sm-3">
                <div class="d-container">
                    <div class="dashboard-bg-icons" style="background-color:#254094;">
                        <img class="dashboard-icons" src="assets/customer-icon.png">
                    </div>
                        <div class="dashboard-container">
                            <p class="dashboard-title">Borrowers</p>
                            <p class="dashboard-quantity">50</p>
                        </div>
                            <div class="dashboard-go-icons-div" >
                                <img class="dashboard-go-icons" src="assets/arrow-right.png">
                            </div>
                </div>
            </div>

            
            
        </div>
    </div>
</body>
</html>

<style>
    body{
        background-color:#F8F0F0;
    }
   
</style>