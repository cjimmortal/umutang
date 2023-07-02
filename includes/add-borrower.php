

<!-- Modal -->
<div class="modal fade" id="addBorrowerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="border-radius:0.5rem;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="font-size:15px; font-weight:600">Add New Borrower</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="addBorrower" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="label-title" for="exampleInputName">Borrower Name</label>
                        <input class="login-input quick-add-inputs" name="fullname" type="text" placeholder="Borrower Name" required>
                    </div>
      
      </div>
      <div class="modal-footer" style="border:none; margin-top:-2rem">
        <button type="button" class="quick-add-close" data-dismiss="modal">Close</button>
        <button type="submit" class="quick-add-save" >Save changes</button>
      </div>
    </div>
  </div>
</div>
        </form>

<script>
    $('#addBorrower').submit(function(e){
      e.preventDefault();
      var fdi = new FormData(this);
      $.ajax({
        url:'./quickadd/borrower.php',
        method:'post',
        data:fdi,
        cache:false,
        contentType:false,
        processData:false,
        success:function(data){
          if(data == 'success') window.location.href='http://localhost/UMUTANG/borrowers.php';
          
        }
      });
    })
</script>