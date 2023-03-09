<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4 MVC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Daftar Peminjam Buku</h1>    
    <hr>
    <br>
    <table class="tabel">
        <thead >
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Buku</th>
                <th>Created_at</th>
                <th>Updated_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $p)
            <tr>
            <td>
                {{ $p->id }}
            </td>
            <td>
                {{ $p->name }}
            </td>
            <td>
                {{ $p->email }}
            </td>
            <td>
                {{ $p->buku }}
            </td>
            <td>
                {{ $p->created_at }}
            </td>
            <td>
                {{ $p->updated_at }}
            </td> 
        </tr>
            @endforeach
        </tbody>
    </table>

</body>

<footer>
    <h4>
        Kerjakanlah dengan jujur dan baik, Perkembangan diri semua berasal dari kemauan dan ketekunan. Jangan takut untuk melakukan kesalahan karena semua butuh proses.</h4>
</footer>
</html>





