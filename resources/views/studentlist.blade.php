@include('sidebar')
<table class="table">

  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PHONE</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">MODIFY</th>

    </tr>
  </thead>
  <tbody>
    <?php $i=1;?>
  
      @foreach ($students as $std )
      <tr>
        <th scope="row">{{$i++}}</th>
      <td>{{$std->Name}}</td>
      <td>{{$std->Email}}</td>
      <td>{{$std->Phone}}</td>
      <td><textarea>{{$std->Address}}</textarea></td>
      <td>
        <button class="btn btn-success btn-sm">EDIT</button>
        <button class="btn btn-danger btn-sm">DELETE</button>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@include('footer')