<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
 <!-- start navbar -->
 <div class="d-flex id=wrapper">
 <div class="border-end bg-white" id="sidebar-wrapper">
       <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/">Dashboard</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/s">Seller</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/c">Category</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/ps">Permission</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/p">Product</a>
    </div>
 </div>
<!-- end navbar -->
<br>

<div class="container">
    <!-- awal card form -->
    <div class="card mt-3">
<div class="card">
  <div class="card-header bg-info">
    Create/Edit data
  </div>
  <div class="card-body">
    <form method="post" action="/ps/edit/{{$data->id}}">
<div class="form-group">
  @csrf
            <label>Nama</label>
            <input type="text" name="tnama" value="{{ $data->name}}" class="form-control" placeholder="input nama anda disini" required>

            <label>Descriptions</label>
            <input type="text" name="tdescriptions" value="{{ $data->descriptions}}" class="form-control" placeholder=" " required>


            <label>Status</label>
            <input type="text" name="tstatus" value="{{ $data->status}}" class="form-control" placeholder=" " required>
</div>

<br>
<button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
<button type="reset" class="btn btn-dark" name="breset">Kosongkan</button>


</form>
  </div>
</div>
</div>