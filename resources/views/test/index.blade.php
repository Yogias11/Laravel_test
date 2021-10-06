<!DOCTYPE html>
<html>
<head>
   <title>Test</title>
</head>
<body>
<h1>List</h1>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nomor PO</th>
        <th>Kategori</th>
        <th>Nama</th>
        <th>Stock</th>
        <th>Terjual</th>
    </tr>
    @php
        $no = 1;
    @endphp
    @foreach ($product as $p)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $p->delivery_id }}</td>
        <td>{{ $p->produk->category->name }}</td>
        <td>{{ $p->produk->name }}</td>
        <td>{{ $p->produk->stock }} {{ $p->produk->type->name }}</td>
        <td>{{ $p->qty }} {{ $p->produk->type->name }}</td>
    </tr>
    @endforeach
</table>
</body>
</html>
