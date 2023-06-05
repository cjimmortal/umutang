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
    <div class="dashboard" >
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

        <div class="loans-data"> 

              <div class="dashboard-loans col-sm-6">
                  <div class="d-loans-content">
                        <p class="dashboard-title-2">Latest Loans</p>
                        
                    <table class="loans-table">
                        <tr>
                            <th>#ID</th>
                            <th>Borrower</th>
                            <th>Amount</th>
                            <th>Fee</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                        <tr> 
                            <td>1</td>
                            <td style="font-weight:bold">Cj Carpon</td>
                            <td>1000</td>
                            <td>20</td>
                            <td>Unpaid</td>
                            <td>January 6, 2023</td>
                        </tr>
                        <tr> 
                            <td>1</td>
                            <td style="font-weight:bold">Andrea Lim</td>
                            <td>1000</td>
                            <td>20</td>
                            <td>Unpaid</td>
                            <td>January 6, 2023</td>
                        </tr>
                        <tr> 
                            <td>1</td>
                            <td style="font-weight:bold">Gimel Garan</td>
                            <td>1000</td>
                            <td>20</td>
                            <td>Unpaid</td>
                            <td>January 6, 2023</td>
                        </tr>
                       
                        
                        
                    </table>
                    <br>
                  </div>
              </div>
              <div class="dashboard-expenses col-sm-6">
                  <div class="d-expenses-content">
                        <p class="dashboard-title-2">Latest Expenses</p>
                        
                    <table class="expenses-table">
                    <tr>
                            <th>#ID</th>
                            <th>Amount</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                        <tr> 
                            <td>1</td>
                            <td>1000</td>
                            <td>Graduation pic</td>
                            <td>Unpaid</td>
                            <td>January 6, 2023</td>
                        </tr>
                        <tr> 
                            <td>1</td>
                            <td>1000</td>
                            <td>Graduation pic</td>
                            <td>Unpaid</td>
                            <td>January 6, 2023</td>
                        </tr>
                        <tr> 
                            <td>1</td>
                            <td>1000</td>
                            <td>Graduation pic</td>
                            <td>Unpaid</td>
                            <td>January 6, 2023</td>
                        </tr>
                        
                       
                    </table>
                    <br>
                  </div>
              </div>
         
        </div>

        <div class="loans-data"> 
            <div class="dashboard-expenses col-sm-8" >
                      <div class="d-expenses-content">
                            <p class="dashboard-title-2">Top Borrowers</p>
                            
                            <div id="myChart" style="width:100%; max-width:900px; height:200px; margin-top:-1rem"></div>
                       
                        <br>
                      </div>
            </div>


            <div class="dashboard-expenses col-sm-4">
                  <div class="d-expenses-content">
                        <p class="dashboard-title-2">New Borrowers</p>
                        
                    <table class="expenses-table">
                    <tr>
                            <th>Name</th>
                            <th>Date</th>
                        </tr>
                        <tr> 
                            <td style="font-weight:bold">Cj Carpon</td>
                            <td>January 6, 2023</td>
                        </tr>
                        <tr> 
                            <td style="font-weight:bold">Cj Carpon</td>
                            <td>January 6, 2023</td>
                        </tr>
                        <tr> 
                            <td style="font-weight:bold">Cj Carpon</td>
                            <td>January 6, 2023</td>
                        </tr>
                        
                       
                    </table>
                    <br>
                  </div>
              </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <br>
        <br>
        <br>
        
    </div>
</body>
</html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
const data = google.visualization.arrayToDataTable([
  ['Contry', 'Mhl'],
  ['Italy',55],
  ['France',49],
  ['Spain',44],
  ['USA',24],
  
  
]);

const options = {
  title:''
};

const chart = new google.visualization.BarChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>

<style>
    body{
        background-color:#F8F0F0;
    }


    .loans-data{
        width:100%;
        display:flex;
        padding:1rem 0 0 0;
        
    }
    
    .dashboard-loans{

    }
    .d-loans-content{
        background-color:white;
        border: solid #80808026 1px;


    }
    .dashboard-expenses{
        
    }
    .d-expenses-content{
        background-color:white;
        border: solid #80808026 1px;

        height:100%;
        max-height:300px;
    }
    .dashboard-title-2{
        font-size:15px;
        padding: 1.5rem 0 1rem 1rem;
        border-bottom: solid #DBD5D5 1px;
        
    }

    .loans-table td, .expenses-table td{
      padding:0.1rem 0 1rem 1.5rem;
      font-size:12px;
    }
    .loans-table th, .expenses-table th{
      padding:0.1rem 0 1rem 1.5rem;
      text-align:center;
      font-size:12px;
      
      
    }
   


</style>