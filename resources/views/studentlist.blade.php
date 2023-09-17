@include('sidebar')
<table class="table">

  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PHONE</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">ACTIONS</th>

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
        <!-- Button trigger modal -->
<button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$std->id}}">
  <i class="bi bi-pencil-square"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal-{{$std->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{Form::open(['route' => 'store', 'method' => 'post'])}}
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" value="{{$std->Name}}" aria-describedby="emailHelp">
      </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" name="email" value="{{$std->Email}}" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">Phone</label>
      <input type="text" name="phone" value="{{$std->Phone}}" class="form-control" >
    </div>
    <div class="mb-3 form-check">
        <label class="form-check-label" for="exampleCheck1">Address</label>
      <textarea name="address" class="form-control">{{$std->Address}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{{Form::close()}}
      </div>
    </div>
  </div>
</div>
        <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@include('footer')