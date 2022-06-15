<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tambah Data User</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                </div>
                <div class="card-body">
                    <a href="/users" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/users/store">
 
                        {{ csrf_field() }}
 
                        
 
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama.." value="{{ old('nama') }}">
 
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Usia</label>
                            <input type="text" name="usia" class="form-control" placeholder="Usia.." value="{{ old('usia') }}">
 
                            @if($errors->has('usia'))
                                <div class="text-danger">
                                    {{ $errors->first('usia')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Kota</label>
                            <input type="text" name="kota" class="form-control" placeholder="Kota.." value="{{ old('kota') }}">
 
                            @if($errors->has('kota'))
                                <div class="text-danger">
                                    {{ $errors->first('kota')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>