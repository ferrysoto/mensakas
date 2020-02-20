@section('updateCustomer')
<!-- Modal -->
<div class="modal fade" id="updateCustomer" tabindex="-1" role="dialog" aria-labelledby="updateCustomerLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateCustomerLabel">Update {{$customer->first_name}} {{$customer->last_name}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('customer.update')}}" method="post">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="customerLang">Language</label>
              <select id="customerLang" name="lang" class="form-control">
                <option value="1" selected>Choose...</option>
                @foreach($languages as $lang)
                  <option value="{{$lang->id_language}}">{{$lang->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="isGuest">It's guest?</label>
              <select id="isGuest" name="guest" class="form-control">
                <option value="0" selected>Choose...</option>
                <option value="1">Yes, no want register</option>
                <option value="0">No, it's new customer!</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="customerName">First name</label>
              <input type="text" class="form-control" id="customerName" name="firstname" value="" maxlength="255" placeholder="Leandro" required>
            </div>
            <div class="form-group col-md-4">
              <label for="customerLast">Last name</label>
              <input type="text" class="form-control" id="customerLast" name="lastname" value="" maxlength="255" placeholder="Mieza" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="customerEmail">Email</label>
              <input type="email" class="form-control" id="customerEmail" name="email" placeholder="email@domain.com" maxlength="150" required>
            </div>
            <div class="form-group col-md-6">
              <label for="customerPhone">Phone</label>
              <input type="number" class="form-control" id="customerPhone" name="phone" placeholder="699 999 999" min="600000000" max="999999999" required>
            </div>
          </div>
          <div class="form-group">
            <label for="customerAddress">Address</label>
            <input type="text" class="form-control" id="customerAddress" name="address" placeholder="1234 Main St" maxlength="128" required>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="customerCity">City</label>
              <input type="text" class="form-control" id="customerCity" name="city" placeholder="Barcelona" maxlength="128" required>
            </div>
            <div class="form-group col-md-4">
              <label for="customerState">State</label>
              <select id="customerState" name="state" class="form-control">
                <option selected value="1">Choose...</option>
                @foreach($states as $state)
                  <option value="{{$state->id_state}}">{{$state->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="customerZip">Zip</label>
              <input type="number" class="form-control" id="customerZip" name="zipcode" min="00001" max="99999" placeholder="00000" required>
            </div>
          </div>
          <div class="form-group float-right">
            <input type="text" name="id_customer" value="{{$customer->id_customer}}" hidden>
            <input type="text" name="id_address" value="{{$customer->id_address}}" hidden>
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
