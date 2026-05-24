<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    @include ('components.bootstrap')
</head>
<body>
    
    <div class="mt-3 mx-3">
        <form action="{{ action([App\Http\Controllers\DosenController::class, 'store']) }}"  method="post">
            @csrf

             <div class="mb-3 w-25">
                    <label>Id Jurusan</label>
                    <input type="text" name="jurusan_id" class="form-control" placeholder="Masukkan Id Jurusan Anda">
                </div>

                <div class="mb-3 w-25">
                    <label>Nama Lengkap Dosen</label>
                    <input type="text" name="fullname" class="form-control" placeholder="Masukkan Nama Lengkap Anda">
                </div>

                <div class="mb-3 w-25">
                    <label>NIP</label>
                    <input type="text" name="NIP" class="form-control" placeholder="Masukkan NIP Anda">
                </div>

                <div class="mb-3 w-25">
                    <label>NIDN</label>
                    <input type="text" name="NIDN" class="form-control" placeholder="Masukkan NIDN Anda">
                </div>

                <div class="mb-3 w-25">
                    <label>Pendidikan Terakhir</label>
                    <input type="text" name="pendidikan_terakhir" class="form-control" placeholder="Masukkan Pendidikan Terakhir Anda">
                </div>
                
                <div class="mb-3 w-25">
                    <label>Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir Anda">
                </div>
                
                <div class="mb-3 w-25">
                    <label>Tanggal Lahir</label>
                    <input type="text" name="tanggal_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir Anda">
                </div>

                <div class="mb-3 w-25">
                    <label>Alamat</label>
                    <textarea name="alamat" rows="3" class="form-control" placeholder="Masukkan Alamat Anda"></textarea>
                </div>


            
            <button class="btn btn-primary" type="submit" value="add">Submit</button>
            <button class="btn btn-danger" type="reset" value="clear">Clear</button>
    
        </form>
    </div>
</body>
</html>