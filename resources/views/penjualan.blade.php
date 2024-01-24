<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<body>
    <br>
    <br>
    <center><h1>Penjualan</h1></center>
    <br>
    <form>
        <div class="container">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Data Produk</label>
    <select class="form-select" aria-label="Default select example">
  <option selected></option>
  <option value="1"></option>
  <option value="2"></option>
  <option value="3"></option>
</select>
  </div>    
  <div class="container">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jumlah Produk</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  </div>
  <div class="container"><button type="button" class="btn btn-success">Tambah</button></div>  
  <br>
  <br>
  <br>
  <br> 
  <div class="container">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Pelanggan</label>
    <select class="form-select" aria-label="Default select example">
  <option selected>
  </option>
  <option value="1"></option>
  <option value="2"></option>
  <option value="3"></option>
</select>
  </div>
  </div>
  <br>
  <br>
  <div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">QTY</th>
      <th scope="col">Subtotal</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><button type="button" class="btn btn-danger">Hapus</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td><button type="button" class="btn btn-danger">Hapus</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
      <td><button type="button" class="btn btn-danger">Hapus</button></td>
    </tr>
  </tbody>
</table>
</div>
<br>
<div class="container"><h1>Total Harga 23.000</h1></div>
<br>
<div class="container"><button type="button" class="btn btn-info">Order</button></div>
</form>
</body>
</html>