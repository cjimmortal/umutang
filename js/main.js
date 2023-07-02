 // PAID RECORD
function setPaidLoan(id){
    Swal.fire({
        title: 'Are you sure, you want this loan paid off?',
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
        }).then((result) => {
        if (result.isConfirmed) {
                var x = id;
                $.ajax({
                    url:'./includes/paid-rows.php',
                    method:'post',
                    data:{LoanId:x},
                    success:function(data){
                        Swal.fire(
                            'Updated!',
                            'The loan has been paid.',
                            'success'
                            ).then((result2) => {
                                if (result2.isConfirmed) {
                                    if(data == 's') window.location.reload('../loans.php');  
                                }else{
                                    if(data == 's') window.location.reload('../loans.php');  
                                }
                            });  
                    }
                });

        }
        })

}
function setPaidExpense(id){
    Swal.fire({
        title: 'Are you sure, you want this expense paid off?',
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
        }).then((result) => {
        if (result.isConfirmed) {
                var x = id;
                $.ajax({
                    url:'./includes/paid-rows.php',
                    method:'post',
                    data:{ExpenseId:x},
                    success:function(data){
                        console.log(data);
                        Swal.fire(
                            'Updated!',
                            'The loan has been paid.',
                            'success'
                            ).then((result2) => {
                                if (result2.isConfirmed) {
                                    if(data == 's') window.location.reload('../expenses.php');  
                                }else{
                                    if(data == 's') window.location.reload('../expenses.php');  
                                }
                            });  
                    }
                });
        }
        })
}
// DELETE RECORD
function deleteLoan(id){
    Swal.fire({
        title: 'Are you sure, you want to delete this?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
                var x = id;
                $.ajax({
                    url:'./includes/delete-rows.php',
                    method:'post',
                    data:{LoanId:x},
                    success:function(data){
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                            ).then((result2) => {
                                if (result2.isConfirmed) {
                                    if(data == 's') window.location.reload('../loans.php');
                                }else{
                                    if(data == 's') window.location.reload('../loans.php');
                                }
                            });  
                    }
                });

        }
        })
}

function deleteBorrower(id){
    Swal.fire({
        title: 'Are you sure, you want to delete this?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            var x = id;
                $.ajax({
                    url:'./includes/delete-rows.php',
                    method:'post',
                    data:{BorrowerId:x},
                    success:function(data){
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                            ).then((result2) => {
                                if (result2.isConfirmed) {
                                    if(data == 's') window.location.reload('../borrowers.php');
                                }else{
                                    if(data == 's') window.location.reload('../loans.php');
                                }
                            });  
                    }
                });

        }
        })  
}

 
function deleteExpenses(id){
    Swal.fire({
        title: 'Are you sure, you want to delete this?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            var x = id;
                $.ajax({
                    url:'./includes/delete-rows.php',
                    method:'post',
                    data:{ExpenseId:x},
                    success:function(data){
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                            ).then((result2) => {
                                if (result2.isConfirmed) {
                                    if(data == 's') window.location.reload('../expenses.php');
                                }else{
                                    if(data == 's') window.location.reload('../loans.php');
                                }
                            });  
                    }
                });

        }
        })        
}
// DISPLAY RECORD

let switchStatus = true;

function closetab(){
    if (switchStatus === false) {
        $('#sidebar').css("margin-left","0px");
        $('#navbar').css("margin-left","300px");
        $('#dashboard').css("margin-left","300px");
        $('#loans-data').css("margin-left","300px");
        switchStatus = true;
    } else if (switchStatus === true) {
        $('#sidebar').css("margin-left","-300px");
        $('#navbar').css("margin-left","0");
        $('#dashboard').css("margin-left","0");
        $('#loans-data').css("margin-left","0px");
        
        switchStatus = false;
    }
} 




document.querySelector('#redirectLoan').addEventListener('click', function(){
    window.location.href ='./loans.php';
});

document.querySelector('#redirectBorrowers').addEventListener('click', function(){
    window.location.href ='./borrowers.php';
});

// document.querySelector('#redirectLoan').addEventListener('click', function(){
//     window.location.href ='./loans.php';
// });


document.querySelector('#redirectExpenses').addEventListener('click', function(){
    window.location.href ='./expenses.php';
});





