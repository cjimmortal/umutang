

<!-- Modal -->
<div class="modal fade" id="addExpensesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="border-radius:0.5rem;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="font-size:15px; font-weight:600">Add New Expenses</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="addExpenses" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="label-title" for="exampleInputName">Amount</label>
                        <input class="login-input quick-add-inputs" name="amount" type="number" placeholder="Amount" required>
                    </div>
                    <div class="form-group">
                        <label class="label-title" for="exampleInputAmount">Purpose</label>
                        <textarea class="login-input quick-add-inputs" name="purpose" type="text" placeholder="Purpose" required></textarea>
                    </div>
                  
           
      </div>
      <div class="modal-footer" style="border:none; margin-top:-2rem">
        <button type="button" class="quick-add-close" data-dismiss="modal">Close</button>
        <button type="submit" class="quick-add-save">Save changes</button>
      </div>
    </div>
  </div>
</div>
        </form>
        
        <script>
          $('#addExpenses').submit(function(e){
            e.preventDefault();
            var fdi = new FormData(this);
            $.ajax({
              url:'./quickadd/expenses.php',
              method:'post',
              data:fdi,
              cache:false,
              contentType:false,
              processData:false,
              success:function(data){
                console.log(data);
                if(data == 'success'){
                  window.location.href='http://localhost/UMUTANG/expenses.php';
                  
                }

                
              }
            });
          })
        </script>
