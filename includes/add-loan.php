

<!-- Modal -->
<div class="modal fade" id="addLoansModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="border-radius:0;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="font-size:15px; font-weight:600">Add New Loan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form>
                    <div class="form-group">
                        <label class="label-title" for="exampleInputName">Borrower Name</label>
                        <input class="login-input quick-add-inputs" type="text" placeholder="Borrower Name">
                    </div>
                    <div class="form-group">
                        <label class="label-title" for="exampleInputAmount">Amount</label>
                        <input class="login-input quick-add-inputs" type="number" placeholder="Amount">
                    </div>
                    <div class="form-group">
                        <label class="label-title" for="exampleInputFee">Fee</label>
                        <input class="login-input quick-add-inputs" type="number" placeholder="Fee">
                    </div>
 
           
      </div>
      <div class="modal-footer" style="border:none; margin-top:-2rem">
        <button type="button" class="quick-add-close" data-dismiss="modal">Close</button>
        <button type="button" class="quick-add-save">Save changes</button>
      </div>
    </div>
  </div>
</div>
        </form>

        <style>
            .quick-add-inputs{
                margin-bottom:0.4rem;
                padding:8px 10px 8px 13px;
            }
            .label-title{
                font-size:12px;
            }
            .quick-add-close {
                background-color: #3B5ABB;
                border: solid #80808026 1px;
                color: white;
                font-size: 12px;
                height: 28px;
                margin: 0.4rem 1rem 0 2rem;
                padding: 0 1rem 0 1rem;
            }
            .quick-add-save {
                background-color: #007bff;
                border: solid #80808026 1px;
                color: white;
                font-size: 12px;
                height: 28px;
                margin: 0.4rem 0rem 0 2rem;
                padding: 0 1rem 0 1rem;
            }
        </style>