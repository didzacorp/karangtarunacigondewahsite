<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th style="width: 1%;">#</th>
      <th style="width: 1%;">
        <div class="checkbox" style="margin-top: -2.4rem!important">
          <input id="select_all_category" name="input[]" type="checkbox" value="" onclick="selectAll('select_all_category', 'category_c')">
          <label for="select_all_category"></label>
        </div>
      </th>
      <th>Name</th>
      <th>Level</th>
      <th>Default</th>
      <th>Note</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($categories as $key=>$category)
      <tr>
        <td class="align-middle">{{ ++$key }}</td>
        <td>
          <div class="checkbox" style="margin-top: -1rem!important">
            <input id="category_c{{ $category->id }}" name="category_c" type="checkbox" value="{{ $category->id }}">
            <label for="category_c{{ $category->id }}"></label>
          </div>
        </td>
        <td class="align-middle">{{ $category->name }}</td>
        <td class="align-middle">Level {{ $category->level }}</td>
        <td class="align-middle">{{ $category->default === 1 ? "Yes" : "No" }}</td>
        <td class="align-middle">{{ $category->notes }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
{!! $categories->links() !!}