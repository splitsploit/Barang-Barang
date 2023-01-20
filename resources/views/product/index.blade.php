<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Daftar Produk</title>
</head>
<body>
    
    <div class="wrapper">
        <div class="container">
            <div class="main-content">
              <h3 class="mt-4">List Product</h3>
              <table class="table table-striped table-bordered">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Nama Produk</th>
                          <th>Lokasi Toko</th>
                          <th>Harga</th>
                      </tr>
                  </thead>
                  <tbody>
                     @forelse ($products as $product)
                     <tr>
                        <td>{{ $product['id'] }}</td>
                        <td>{{ $product['nama'] }}</td>
                        <td>{{ $product['toko'] }}</td>
                        <td>{{ $product['harga'] }}</td>
                     </tr>
                         
                     @empty
                         <tr>
                            <td colspan="4">
                                Empty
                            </td>
                         </tr>
                     @endforelse
                  </tbody>
              </table>
          </div>
      </div>
  </div>

</body>
</html>