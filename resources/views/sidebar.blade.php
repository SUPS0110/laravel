<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STD_MGNT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2" style="background-color: rgb(204, 180, 180) ; height:1000px;">
              <h6 class="text-center p-2">Welcome Admin</h6>
                <div class="d-grid gap-2 "><a href="{{route('add')}}" class="btn btn-light rounded-0">ADD STUDENT</a></div>
                <div class="d-grid gap-2"> <a href="{{route('list')}}" class="btn btn-light rounded-0">STUDENT LIST</a></div>

            </div>
            <div class="col-10">