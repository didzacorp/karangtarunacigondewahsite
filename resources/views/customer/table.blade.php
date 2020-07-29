<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th style="width: 1%;">#</th>
      <th style="width: 1%;">
        <div class="checkbox" style="margin-top: -2.4rem!important">
          <input id="select_all_customer" name="input[]" type="checkbox" value="" onclick="selectAll('select_all_customer', 'checkbox')">
          <label for="select_all_customer"></label>
        </div>
      </th>
      <th>Name</th>
      <th>Company</th>
      <th>Email</th>
      <th>Phone Number</th>
      <th>Customer Group</th>
      <th>Address</th>
      <th>Note</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($customers as $key=>$customer)
      <tr>
        <td class="align-middle">{{ ++$key }}</td>
        <td>
          <div class="checkbox" style="margin-top: -1rem!important">
            <input id="check{{ $customer->id }}" name="checkbox" type="checkbox" value="{{ $customer->id }}">
            <label for="check{{ $customer->id }}"></label>
          </div>
        </td>
        <td class="align-middle">{{ $customer->names }}</td>
        <td class="align-middle">{{ $customer->company_name }}</td>
        <td class="align-middle">{{ $customer->email }}</td>
        <td class="align-middle">{{ $customer->phone }}</td>
        <td class="align-middle">{{ $customer->name }}</td>
        <td class="align-middle">{{ $customer->address }}</td>
        <td class="align-middle">{{ $customer->notes }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
{{-- {!! $users->links() !!} --}}