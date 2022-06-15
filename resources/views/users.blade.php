<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>User Details Data</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data Detail User
                </div>
                <div class="card-body">
                    <a href="/users/tambah" class="btn btn-primary">Input User Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Usia</th>
                                <th>Kota</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($usersdetail as $user)
                            <tr>
                                <td>{{ $user->nama }}</td>
                                <td>{{ $user->usia }}</td>
                                <td>{{ $user->kota }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>