@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="mt-4">List Product</h3>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>SKU</th>
                        <th>Nama Produk</th>
                        <th>Lokasi Toko</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                    <tr>
                        <td>{{ $product['sku'] }}</td>
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
@endsection
        