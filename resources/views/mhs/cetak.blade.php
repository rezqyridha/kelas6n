<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h1>LAPORAN DATA MAHASISWA</h1></center>

    <table border="1px" width="100%">
        <tr>
            <th>No</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Jurursan</th>
        </tr>

        @foreach ($mahasiswa as $nomor => $item)
            <tr style="text-align: center">
                <td>{{$nomor + 1}}</td>
                <td>{{$item->npm}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->jurusan}}</td>
        @endforeach
    </table>
</body>
</html>