<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th style="width: 1%;">#</th>
      <th style="width: 1%;">
        <div class="checkbox" style="margin-top: -2.4rem!important">
          <input id="select_all_user" name="input[]" type="checkbox" value="" onclick="selectAll('select_all_user', 'checkbox')">
          <label for="select_all_user"></label>
        </div>
      </th>
      <th>Name</th>
      <th>Email</th>
      <th>Role</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $key=>$user)
    <tr>
      <td class="align-middle">{{ ++$key }}</td>
      <td>
        <div class="checkbox" style="margin-top: -1rem!important">
          <input id="check{{ $user->id }}" name="checkbox" type="checkbox" value="{{ $user->id }}">
          <label for="check{{ $user->id }}"></label>
        </div>
      </td>
      <td class="align-middle">{{ $user->name }}</td>
      <td class="align-middle">{{ $user->email }}</td>
      <td class="align-middle">{{ $user->role === 3 ? "Owner" : ($user->role === 2 ? "Manager" : "Cashier") }}</td>

    </tr>
    @endforeach
  </tbody>
</table>
{!! $users->links() !!}
{{-- {{ $users->appends(request()->query())->links() }} --}}
{{-- {!! $users->appends(Request::all())->links() !!} --}}