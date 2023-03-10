<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mvcdinda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
  </head>
  <body>
    <div class="container">
    <h1 class="text-center my-3">MAHASISWA MSIB UMSU</h1>
    <table class="table table-striped-columns table-hover">
        <thead>
            <tr>
                <th scope="col">Nim</th>
                <th scope="col">Nama</th>
                <th scope="col">Tahun Angkatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $m)
                <tr>
                    <td>{{ $m->nim }}</td>
                    <td>{{ $m->nama }}</td>
                    <td>{{ $m->tahun_angkatan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>   
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>