<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Tabel Data Kelas</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Kelas</th>
                <th>Nama Kelas</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($classis as $kelas)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $kelas->code }}</td>
                <td>{{ $kelas->name }}</td>
                <td>{{ $kelas->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
