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
        <form action="{{ action([App\Http\Controllers\MahasiswaController::class, 'store']) }}"  method="post">
            @csrf

            <div class="mb-3 w-25">
                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                <input type="Text" name="fullname" class="form-control" placeholder="Masukkan Nama Anda">
            </div>
    
            <div class="mb-3 w-25">
                <label for="exampleFormControlInput1" class="form-label">Nomor Induk Mahasiswa</label>
                <input type="Text" name="NIM" class="form-control" placeholder="Masukkan NIM Anda">
            </div>

            <div class="mb-3 w-25">
                <label for="exampleFormControlInput1" class="form-label">Nomor Induk Dosen Nasional</label>
                <input type="Text" name="NIDN" class="form-control" placeholder="Masukkan NIDN Anda">
            </div>

            <div class="mb-3 w-25">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                <input type="Text" name="tanggal_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir Anda">
            </div>
    
            <div class="mb-3 w-25">
                <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                <input type="Text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir Anda">
            </div>
            
            <div class="mb-3 w-25">
                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                <textarea class="form-control" rows="3" name="alamat" placeholder="Masukkan Alamat Anda"></textarea>
            </div>
            
            <div class="mb-3 w-25">


            
            <button class="btn btn-primary" type="submit" value="add">Submit</button>
            <button class="btn btn-danger" type="reset" value="clear">Clear</button>
    
        </form>
    </div>
</body>
</html>