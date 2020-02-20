@section('updatesupplier')
<!-- Modal -->
<div class="modal fade" id="updatesupplier" tabindex="-1" role="dialog" aria-labelledby="updatesupplierLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updatesupplierLabel">Update {{$supplier->name}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('supplier.create')}}" method="post">
          @csrf
          <div class="form-row">

            <div class="form-group col-md-8">
              <label for="supplierLast">Name</label>
              <input type="text" class="form-control" id="supplierLast" name="lastname" value="" maxlength="255" placeholder="Mieza" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="supplierEmail">Email</label>
              <input type="email" class="form-control" id="supplierEmail" name="email" placeholder="email@domain.com" maxlength="150" required>
            </div>
            <div class="form-group col-md-6">
              <label for="supplierPhone">Phone</label>
              <input type="number" class="form-control" id="supplierPhone" name="phone" placeholder="699 999 999" min="600000000" max="999999999" required>
            </div>
          </div>
          <div class="form-group">
            <label for="supplierAddress">Address</label>
            <input type="text" class="form-control" id="supplierAddress" name="address" placeholder="1234 Main St" maxlength="128" required>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="supplierCity">City</label>
              <input type="text" class="form-control" id="supplierCity" name="city" placeholder="Barcelona" maxlength="128" required>
            </div>
            <div class="form-group col-md-4">
              <label for="supplierState">State</label>
              <select id="supplierState" name="state" class="form-control">
                <option selected value="1">Choose...</option>
                @foreach($states as $state)
                  <option value="{{$state->id_state}}">{{$state->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="supplierZip">Zip</label>
              <input type="number" class="form-control" id="supplierZip" name="zipcode" min="00001" max="99999" placeholder="00000" required>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="passReset">
              <label class="form-check-label" for="passReset">
                Send welcome email
              </label>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
      </form>
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection
