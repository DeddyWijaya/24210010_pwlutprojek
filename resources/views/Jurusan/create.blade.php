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
        <form action="{{ action([App\Http\Controllers\JurusanController::class, 'store']) }}"  method="post">
            @csrf

                <div class="mb-3 w-25">
                    <label>Nama Jurusan</label>
                    <input type="text" name="nama_jurusan" class="form-control" placeholder="Masukkan Nama Jurusan">
                </div>

                <div class="mb-3 w-25">
                    <label>Kode Jurusan</label>
                    <input type="text" name="kode_jurusan" class="form-control" placeholder="Masukkan Kode Jurusan">
                </div>
    


            
            <button class="btn btn-primary" type="submit" value="add">Submit</button>
            <button class="btn btn-danger" type="reset" value="clear">Clear</button>
    
        </form>
    </div>
</body>
</html>