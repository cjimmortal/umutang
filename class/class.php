<?php
error_reporting(0);
class login {

    public function __construct(string $user, string $pass){
        $this->user = $user;
        $this->pass = $pass; 
        $this->conn = $conn = new mysqli('localhost', 'root', '', 'umutang');
    }


    function admincheck(){
        $stmnt="SELECT * FROM u_admin where id = 1";
        $stmnt=$this->conn->prepare($stmnt);
        $stmnt->execute();
        $result=$stmnt->get_result();
        while($row=$result->fetch_array()){
             $user = $row['username'];
             $pass = $row['password'];    }
        if(password_verify($this->user, $user) && password_verify($this->pass, $pass)){
                echo 'success';
                session_start();
                $_SESSION['id'] = 1;
                                                                                      }
        else{
            echo 'failed';
            }
        
    }
    

}

// create
class quicklinksBorrower {
    public function __construct(string $name){
        $this->name = $name;
        $this->conn = $conn = new mysqli('localhost', 'root', '', 'umutang');
    }
    function addtoDB(){
        $stmnt="INSERT INTO `u_customer`(`fullname`) VALUES (?)";
        $stmnt=$this->conn->prepare($stmnt);
        $stmnt->bind_param('s',$this->name);
        $stmnt->execute();
        if($stmnt){
            echo "success";
            return $this->name;
        }
        
    }
}

class quicklinksLoan {
    public function __construct(string $name, int $amount, int $fee){
        $this->name = $name;
        $this->amount = $amount;
        $this->fee = $fee;
        $this->conn = $conn = new mysqli('localhost', 'root', '', 'umutang');
    }
    function addtoDB(){
        $stmnt="INSERT INTO `u_loans`(`customer_id`, `loan_amount`, `loan_fee`) VALUES (?,?,?)";
        $stmnt=$this->conn->prepare($stmnt);
        $stmnt->bind_param('sii',$this->name,$this->amount,$this->fee);
        $stmnt->execute();
        if($stmnt){
            echo "success";
        }
    }

    function addborrowedFeetoCustomer(){
        $stmnt='SELECT * from u_customer';
        $stmnt=$this->conn->prepare($stmnt);
        $stmnt->execute();
        $result=$stmnt->get_result();
        while($row=$result->fetch_array()){
           $totalBorrowed = $this->amount + $row['customer_total_borrowed'];
           $totalFee =  $this->fee + $row['customer_total_fee'];
        }
        $stmnt="UPDATE u_customer SET `customer_total_borrowed` = ?, `customer_total_fee` = ? WHERE `customer_id` = ?;";
            $stmnt=$this->conn->prepare($stmnt);
            $stmnt->bind_param('iii',$totalBorrowed,$totalFee,$this->name);
            $stmnt->execute();

    }
}

class quicklinksExpenses {
    public function __construct(int $amount, string $purpose){
        $this->amount = $amount;
        $this->purpose = $purpose;
        $this->conn = $conn = new mysqli('localhost', 'root', '', 'umutang');
    }
    function addtoDB(){
        $stmnt="INSERT INTO `u_expenses`(`expenses_amount`, `expenses_purpose`) VALUES (?,?)";
        $stmnt=$this->conn->prepare($stmnt);
        $stmnt->bind_param('is',$this->amount,$this->purpose);
        $stmnt->execute();
        if($stmnt){
            echo "success";
        }
    }
}
// delete
class DeleteRows {
    public function __construct(int $id){
        $this->id = $id;
        $this->conn = $conn = new mysqli('localhost', 'root', '', 'umutang');
    }

    function deleteLoansRow(){
        $stmnt='DELETE FROM u_loans WHERE `loan_id` = ?';
        $stmnt=$this->conn->prepare($stmnt);
        $stmnt->bind_param('i',$this->id);
        $stmnt->execute();
        if($stmnt) echo 's';
    }

    function deleteBorrowerRow(){
        $stmnt='UPDATE u_customer SET customer_status = 0 WHERE customer_id = ?;';
        $stmnt=$this->conn->prepare($stmnt);
        $stmnt->bind_param('i',$this->id);
        $stmnt->execute();
        if($stmnt) echo 's';
    }

    function deleteExpensesRow(){
        $stmnt='DELETE FROM u_expenses WHERE `expenses_id` = ?';
        $stmnt=$this->conn->prepare($stmnt);
        $stmnt->bind_param('i',$this->id);
        $stmnt->execute();
        if($stmnt) echo 's';
    }
}
class PaidRows{
    public function __construct(int $id){
        $this->id = $id;
        $this->conn = $conn = new mysqli('localhost', 'root', '', 'umutang');
    } 
    function paidLoansRow(){
        $stmnt='UPDATE u_loans SET loan_status = "PAID" WHERE loan_id = ?';
        $stmnt=$this->conn->prepare($stmnt);
        $stmnt->bind_param('i',$this->id);
        $stmnt->execute();
        if($stmnt) echo 's';
    }
    function paidExpenseRow(){
        $stmnt='UPDATE u_expenses SET expenses_status = "PAID" WHERE expenses_id = ?';
        $stmnt=$this->conn->prepare($stmnt);
        $stmnt->bind_param('i',$this->id);
        $stmnt->execute();
        if($stmnt){
            echo 's' ;
        }else{
            echo 'sakjshdakjsd';
        }
    }
}

// display
class display {
    public function __construct(){
        $this->conn = $conn = new mysqli('localhost', 'root', '', 'umutang');
    }
    function displayLoanData(){
        
        $stmnt='SELECT u_customer.fullname,  u_loans.loan_id, u_loans.loan_amount, u_loans.loan_fee, u_loans.loan_date_created, u_loans.loan_status FROM u_loans 
        INNER JOIN u_customer ON u_loans.customer_id = u_customer.customer_id
        WHERE u_loans.loan_status = "UNPAID" ';
        $stmnt=$this->conn->prepare($stmnt);
        $stmnt->execute();
        $result=$stmnt->get_result();

        if($result->num_rows > 0) {
            while($row=$result->fetch_array()){
                // date formatting
                $timeStamp = $row['loan_date_created'];
                $timeStamp = date( "F j, Y, g:i a", strtotime($timeStamp));
                // date formatting

                $count++;
                $display.='
                <tr> 
                    <td class="td-id"><p class="id-bg"> '.$count.'</p></td>
                    <td style="font-weight:bold">'.$row['fullname'].'</td>
                    <td>'.$row['loan_amount'].'</td>
                    <td>'.$row['loan_fee'].'</td>
                    <td>'.$timeStamp.'</td>
                    <td class="status-unpaid">'.$row['loan_status'].'</td>
                    <td class="d-flex">
                        <button onclick="setPaidLoan('.$row['loan_id'].')" class="row-btn-paid "><img class="row-btn-img-edit" src="assets/loans.png">&nbsp;Paid</button>
                        <button onclick="deleteLoan('.$row['loan_id'].')" class="row-btn-delete"><img class="row-btn-img" src="assets/delete.png">&nbsp;Delete</button>
                    </td>
                </tr>
                ';
                }echo $display;
        }else{
            $display.='
            <table width="100%">
                <tr><td class="no-record" style="text-align:center; font-size:16px; padding:1rem 0 0 0">No record found</td></tr>
            </table>
            ';
            echo $display;
        }
      
    }
        function displayShowUnpaidLoanData(){
            
            $stmnt='SELECT u_customer.fullname,  u_loans.loan_id, u_loans.loan_amount, u_loans.loan_fee, u_loans.loan_date_created, u_loans.loan_status FROM u_loans 
            INNER JOIN u_customer ON u_loans.customer_id = u_customer.customer_id
            WHERE u_loans.loan_status = "PAID" ';
            $stmnt=$this->conn->prepare($stmnt);
            $stmnt->execute();
            $result=$stmnt->get_result();

            if($result->num_rows > 0) {
                while($row=$result->fetch_array()){
                    // date formatting
                    $timeStamp = $row['loan_date_created'];
                    $timeStamp = date( "F j, Y, g:i a", strtotime($timeStamp));
                    // date formatting

                    $count++;
                    $display.='
                    <tr> 
                        <td class="td-id"><p class="id-bg"> '.$count.'</p></td>
                        <td style="font-weight:bold">'.$row['fullname'].'</td>
                        <td>'.$row['loan_amount'].'</td>
                        <td>'.$row['loan_fee'].'</td>
                        <td>'.$timeStamp.'</td>
                        <td class="status-paid">'.$row['loan_status'].'</td>
                        <!--<td class="d-flex">
                            <button class="row-btn-edit "><img class="row-btn-img-edit" src="assets/edit.png">&nbsp;Edit</button>-->
                            <!--<button onclick="deleteLoan('.$row['loan_id'].')" class="row-btn-delete"><img class="row-btn-img" src="assets/delete.png">&nbsp;Delete</button>-->
                        </td>
                    </tr>
                    ';
                    }echo $display;
            }else{
                $display.='
                <table width="100%">
                    <tr><td class="no-record" style="text-align:center; font-size:16px; padding:1rem 0 0 0">No record found</td></tr>
                </table>
                ';
                echo $display;
            }
        
        }

    function displayBorrowerData(){
    
        $stmnt='SELECT * FROM `u_customer`
                WHERE u_customer.customer_status = 1 ';
        $stmnt=$this->conn->prepare($stmnt);
        $stmnt->execute();
        $result=$stmnt->get_result();

        if($result->num_rows > 0) {
        while($row=$result->fetch_array()){
        // date formatting
        $timeStamp = $row['date_created'];
        $timeStamp = date( "F j, Y, g:i a", strtotime($timeStamp));
        // date formatting

        $count++;
        $display.='
        <tr> 
                <td class="td-id"><p class="id-bg">'.$count.'</p></td>
                <td style="font-weight:bold">'.$row['fullname'].'</td>
                <td>'.$row['customer_total_borrowed'].'</td>
                <td>'.$row['customer_total_fee'].'</td>
                <td>'.$timeStamp.'</td>
                <td class="d-flex">
                    <!-- <button class="row-btn-edit "><img class="row-btn-img-edit" src="assets/edit.png">&nbsp;Edit</button> -->
                    <button onclick="deleteBorrower('.$row['customer_id'].')" class="row-btn-delete"><img class="row-btn-img" src="assets/delete.png">&nbsp;Delete</button> 
                </td>
            </tr>
        ';
        }echo $display;
        }else{
            $display.='
            <table width="100%">
                <tr><td class="no-record" style="text-align:center; font-size:16px; padding:1rem 0 0 0">No record found</td></tr>
            </table>';
            echo $display;
        }
    }


    function displayExpensesData(){
        $stmnt = 'SELECT * FROM u_expenses WHERE expenses_status = "UNPAID"';
        $stmnt=$this->conn->prepare($stmnt);
        // $stmnt->bind_param('',$var);
        $stmnt->execute();
        $result=$stmnt->get_result();
        if($result->num_rows > 0) {
        while($row=$result->fetch_array()){
        // date formatting
        $timeStamp = $row['expenses_date'];
        $timeStamp = date( "F j, Y, g:i a", strtotime($timeStamp));
        // date formatting
            
            $count++;
            $display.='<h1></h1>
             <tr> 
                <td class="td-id"><p class="id-bg">'.$count.'</p></td>
                <td style="font-weight:bold">'.$row['expenses_amount'].'</td>
                <td>'.$row['expenses_purpose'].'</td>
                <td>'.$timeStamp.'</td>
                <td class="status-unpaid">'.$row['expenses_status'].'</td>
                <td class="d-flex">
                    <button onclick="setPaidExpense('.$row['expenses_id'].')" class="row-btn-paid "><img class="row-btn-img-edit" src="assets/loans.png">&nbsp;Paid</button>
                    <button  onclick="deleteExpenses('.$row['expenses_id'].')" class="row-btn-delete"><img class="row-btn-img" src="assets/delete.png">&nbsp;Delete</button>
                </td>
            </tr> 
            
            ';
        }echo $display;
        }else{
            $display.='
            <table width="100%">
                <tr><td class="no-record" style="text-align:center; font-size:16px; padding:1rem 0 0 0">No record found</td></tr>
            </table>
            ';
            echo $display;
        }

    }
        function displayShowUnpaidExpenseData(){
            $stmnt = 'SELECT * FROM u_expenses WHERE expenses_status = "PAID"';
            $stmnt=$this->conn->prepare($stmnt);
            // $stmnt->bind_param('',$var);
            $stmnt->execute();
            $result=$stmnt->get_result();
            if($result->num_rows > 0) {
            while($row=$result->fetch_array()){
            // date formatting
            $timeStamp = $row['expenses_date'];
            $timeStamp = date( "F j, Y, g:i a", strtotime($timeStamp));
            // date formatting
                
                $count++;
                $display.='<h1></h1>
                <tr> 
                    <td class="td-id"><p class="id-bg">'.$count.'</p></td>
                    <td style="font-weight:bold">'.$row['expenses_amount'].'</td>
                    <td>'.$row['expenses_purpose'].'</td>
                    <td>'.$timeStamp.'</td>
                    <td class="status-unpaid">'.$row['expenses_status'].'</td>
                    <!--<td class="d-flex">
                        <button class="row-btn-edit "><img class="row-btn-img-edit" src="assets/edit.png">&nbsp;Edit</button>
                        <button  onclick="deleteExpenses('.$row['expenses_id'].')" class="row-btn-delete"><img class="row-btn-img" src="assets/delete.png">&nbsp;Delete</button>
                    </td>-->
                </tr> 
                
                ';
            }echo $display;
            }else{
                $display.='
                <table width="100%">
                    <tr><td class="no-record" style="text-align:center; font-size:16px; padding:1rem 0 0 0">No record found</td></tr>
                </table>
                ';
                echo $display;
            }

        }
       

    function displayBorrowersOnSelect(){
        $stmnt='SELECT * FROM `u_customer`';
        $stmnt=$this->conn->prepare($stmnt);
        $stmnt->execute();
        $result=$stmnt->get_result();
        while($row=$result->fetch_array()){
        $display.='<option value="'.$row['customer_id'].'">'.$row['fullname'].'</option>';
        }echo $display;
    }


    // dsiplay data dashboard
    function displayLoansCount(){
        $stmnt='SELECT COUNT(*) FROM u_loans';
        $stmnt=$this->conn->prepare($stmnt);
        $stmnt->execute();
        $result=$stmnt->get_result();
        while($row=$result->fetch_array()){
            $display.=' <div class="dashboard-container">
            <p class="dashboard-title">Loans</p>
            <p class="dashboard-quantity">'.$row['COUNT(*)'].'</p>
        </div>';
        }echo $display;
    }

    function displayExpensesCount(){
        $stmnt='SELECT SUM(expenses_amount) FROM u_expenses';
        $stmnt=$this->conn->prepare($stmnt);
        $stmnt->execute();
        $result=$stmnt->get_result();

            while($row=$result->fetch_array()){
                if($row['SUM(expenses_amount)'] == ''){
                    $display.='<div class="dashboard-container">
                    <p class="dashboard-title">Expenses</p>
                    <p class="dashboard-quantity">₱0</p></div>';
                    echo $display;
                }else{
                    $display.='<div class="dashboard-container">
                    <p class="dashboard-title">Expenses</p>
                    <p class="dashboard-quantity">₱'.$row['SUM(expenses_amount)'].'</p></div>';
                    echo $display;
                }
   
            }
    }

    function displayRevenueCount(){
        $stmnt='SELECT SUM(loan_fee) FROM u_loans';
        $stmnt=$this->conn->prepare($stmnt);
        $stmnt->execute();
        $result=$stmnt->get_result();

            while($row=$result->fetch_array()){
                if($row['SUM(loan_fee)'] == ''){
                    $display.='<div class="dashboard-container">
                    <p class="dashboard-title">Revenue</p>
                    <p class="dashboard-quantity">₱0</p></div>';
                    echo $display;
                }else{
                    $display.='<div class="dashboard-container">
                    <p class="dashboard-title">Revenue</p>
                    <p class="dashboard-quantity">₱'.$row['SUM(loan_fee)'].'</p></div>';
                    echo $display;
                }
   
            }
    }

    function displayBorrowersCount(){
        $stmnt='SELECT COUNT(*) FROM u_customer';
        $stmnt=$this->conn->prepare($stmnt);
        $stmnt->execute();
        $result=$stmnt->get_result();
        while($row=$result->fetch_array()){
            $display.='<div class="dashboard-container">
            <p class="dashboard-title">Borrowers</p>
            <p class="dashboard-quantity">'.$row['COUNT(*)'].'</p>
        </div>';
        }echo $display;
    }

    function displayLatestLoans(){
        $stmnt='SELECT * FROM u_loans INNER JOIN u_customer on u_loans.customer_id = u_customer.customer_id order by u_loans.loan_date_created desc LIMIT 3';
        $stmnt=$this->conn->prepare($stmnt);
        $stmnt->execute();
        $result=$stmnt->get_result();
        if($result->num_rows > 0){
            while($row=$result->fetch_array()){
                $count++;
                // date formatting
                $timeStamp = $row['loan_date_created'];
                $timeStamp = date( "F j, Y", strtotime($timeStamp));
                // date formatting
                $d.='<tr> 
                        <td>'.$count.'</td>
                        <td style="font-weight:bold">'.$row['fullname'].'</td>
                        <td>'.$row['loan_amount'].'</td>
                        <td>'.$row['loan_fee'].'</td>
                        <td>'.$row['loan_status'].'</td>
                        <td>'.$timeStamp.'</td>
                    </tr>';
            }echo $d;
        }else{
            $display.='
            <table width="100%">
                <tr><td class="no-record" style="text-align:center; font-size:12px; padding:0.5rem 0 0 0">No record found</td></tr>
            </table>';
            echo $display;
        }
    }

    function displayLatestExpenses(){
        $stmnt='SELECT * FROM u_expenses order by expenses_date desc LIMIT 3';
        $stmnt=$this->conn->prepare($stmnt);
        $stmnt->execute();
        $result=$stmnt->get_result();
        if($result->num_rows > 0){
            while($row=$result->fetch_array()){
                $count++;
                // date formatting
                $timeStamp = $row['expenses_date'];
                $timeStamp = date( "F j, Y", strtotime($timeStamp));
                // date formatting
                $d.='<tr> 
                        <tr> 
                        <td>'.$count.'</td>
                        <td>'.$row['expenses_amount'].'</td>
                        <td>'.$row['expenses_purpose'].'</td>
                        <td>'.$row['expenses_status'].'</td>
                        <td>'.$timeStamp.'</td>
                    </tr>
                    ';
            }echo $d;
        }else{
            $display.='
            <table width="100%">
                <tr><td class="no-record" style="text-align:center; font-size:12px; padding:0.5rem 0 0 0">No record found</td></tr>
            </table>';
            echo $display;
        }
    }

    function displayLatestBorrowers(){
        $stmnt='SELECT * FROM u_customer WHERE customer_status = 1 order by date_created desc LIMIT 3';
        $stmnt=$this->conn->prepare($stmnt);
        $stmnt->execute();
        $result=$stmnt->get_result();
        if($result->num_rows > 0){
            while($row=$result->fetch_array()){
                $count++;
                // date formatting
                $timeStamp = $row['date_created'];
                $timeStamp = date( "F j, Y", strtotime($timeStamp));
                // date formatting
                $d.='<tr> 
                        <td>'.$count.'</td>
                        <td style="font-weight:bold">'.$row['fullname'].'</td>
                        <td>'.$timeStamp.'</td>
                    </tr>
                    ';
            }echo $d;
        }else{
            $display.='
            <table width="100%">
                <tr><td class="no-record" style="text-align:center; font-size:12px; padding:0.5rem 0 0 0">No record found</td></tr>
            </table>';
            echo $display;
        }
    }


    function displayTopBorrowers(){
        $stmnt = 'SELECT customer_total_borrowed, fullname FROM `u_customer` ORDER BY customer_total_borrowed DESC LIMIT 8 ';
        $stmnt=$this->conn->prepare($stmnt);
        $stmnt->execute();
        $result=$stmnt->get_result();
        if($result->num_rows > 0){
            while($row=$result->fetch_array()){
                $d.='
                ["'.$row['fullname'].'",'.$row['customer_total_borrowed'].'],
                
                ';
            }echo $d;
        }
        else{
            $display.='
            <table width="100%">
                <tr><td class="no-record" style="text-align:center; font-size:12px; padding:0.5rem 0 0 0">No record found</td></tr>
            </table>';
            echo $display;
        }
    }
   

}




