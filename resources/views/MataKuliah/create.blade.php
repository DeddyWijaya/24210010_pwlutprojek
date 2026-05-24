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
        <form action="{{ action([App\Http\Controllers\MataKuliahController::class, 'store']) }}"  method="post">
            @csrf

             <div class="mb-3">
                    <label>ID Jurusan</label>
                    <input type="text" name="jurusan_id" class="form-control" placeholder="Masukkan ID Jurusan">
                </div>

                <div class="mb-3">
                    <label>ID Dosen</label>
                    <input type="text" name="dosen_id" class="form-control" placeholder="Masukkan ID Dosen">
                </div>

                <div class="mb-3">
                    <label>Nama Matkul</label>
                    <input type="text" name="nama_mk" class="form-control" placeholder="Masukkan Nama Matkul">
                </div>

                <div class="mb-3">
                    <label>Kode Matkul</label>
                    <input type="text" name="kode_mk" class="form-control" placeholder="Masukkan Kode Matkul">
                </div>

                <div class="mb-3">
                    <label>SKS</label>
                    <input type="text" name="sks" class="form-control" placeholder="Masukkan Jumlah SKS">
                </div>
            
            <div class="mb-3 w-25">


            
            <button class="btn btn-primary" type="submit" value="add">Submit</button>
            <button class="btn btn-danger" type="reset" value="clear">Clear</button>
    
        </form>
    </div>
</body>
</html>