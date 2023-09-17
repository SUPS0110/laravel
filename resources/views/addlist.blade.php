@include('sidebar')
{{Form::open(['route' => 'store', 'method' => 'post'])}}
<div class="row">
    <div class="col-4 mx-auto card p-3 m-3">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name"class="form-control"  aria-describedby="emailHelp" placeholder="Enter your email">
      </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter your email">
    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">Phone</label>
      <input type="text" name="phone" class="form-control" >
    </div>
    <div class="mb-3 form-check">
        <label class="form-check-label" for="exampleCheck1">Address</label>
      <textarea name="address" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{{Form::close()}}
@include('footer')