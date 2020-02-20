@section('updateSupplier')
<div class="modal fade" id="updateSupplier" tabindex="-1" role="dialog" aria-labelledby="updateSupplierLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateSupplierLabel">Update {{$supplier->name}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('supplier.update')}}" method="post">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="supplierLang">Language</label>
              <select id="supplierLang" name="lang" class="form-control">
                <option value="1" selected>Choose...</option>
                @foreach($languages as $lang)
                  <option value="{{$lang->id_language}}">{{$lang->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-md-3">
              <label for="supplierName">Full name</label>
              <input type="text" class="form-control" id="supplierName" name="name" value="" maxlength="255" placeholder="Kebab halal cornella" required>
            </div>
            <div class="form-group col-md-4">
              <label for="supplierEmail">Email</label>
              <input type="email" class="form-control" id="supplierEmail" name="email" placeholder="email@domain.com" maxlength="150" required>
            </div>
            <div class="form-group col-md-3">
              <label for="supplierPhone">Phone</label>
              <input type="number" class="form-control" id="supplierPhone" name="phone" placeholder="93 666 66 66" min="600000000" max="999999999" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="supplierDefaultCategory">Category default</label>
                <select class="form-control" name="category">
                  <option selected value="1">Choose...</option>
                  @foreach($categories as $cat)
                  <option value="{{$cat->id_category}}">{{$cat->name}}</option>
                  @endforeach
                </select>
            </div>
            <div class="form-group col-md-8">
              <label for="supplierAddress">Address</label>
              <input type="text" class="form-control" id="supplierAddress" name="address" placeholder="1234 Main St" maxlength="128" required>
            </div>
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
          <div class="form-group float-right">
            <input type="text" name="id_customer" value="{{$supplier->id_supplier}}" hidden>
            <input type="text" name="id_address" value="{{$supplier->id_address}}" hidden>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection
