<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    @include ('components.bootstrap')
</head>
<body>
    <div class="mt-3 mx-3">
        <form action="{{ action([App\Http\Controllers\MatakuliahController::class, 'update'], [$matkul->id]) }}"  method="post">
            @csrf
            @method('PUT')

            <div class="mb-3 w-25">
                <label for="exampleFormControlInput1" class="form-label">ID Jurusan</label>
                <input type="Text" name="jurusan_id" class="form-control" value="{{ $matakuliah->jurusan_id }}" placeholder="Masukkan ID Jurusan">
            </div>
    
            <div class="mb-3 w-25">
                <label for="exampleFormControlInput1" class="form-label">ID Dosen</label>
                <input type="Text" name="dosen_id" class="form-control" value="{{ $matakuliah->dosen_id }}" placeholder="Masukkan ID Dosen">
            </div>

            <div class="mb-3 w-25">
                <label for="exampleFormControlInput1" class="form-label">Nama Matkul</label>
                <input type="Text" name="nama_mk" class="form-control" value="{{ $matakuliah->nama_mk }}" placeholder="Masukkan Nama Matkul">
            </div>

            <div class="mb-3 w-25">
                <label for="exampleFormControlInput1" class="form-label">Kode Matkul</label>
                <input type="Text" name="kode_mk" class="form-control" value="{{ $matakuliah->kode_mk }}" placeholder="Masukkan Kode Matkul">
            </div>
    
            <div class="mb-3 w-25">
                <label for="exampleFormControlInput1" class="form-label">SKS</label>
                <input type="Text" name="sks" class="form-control" value="{{ $matakuliah->sks }}" placeholder="Masukkan SKS">
            </div>
            

            
            <button class="btn btn-primary" type="submit" value="add">Submit</button>
            <button class="btn btn-danger" type="reset" value="clear">Clear</button>
    
        </form>
    </div>
</body>
</html>


{{-- <table>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="fullname"></td>
        </tr>
        <tr>
            <td>Nomor Induk Mahasiswa</td>
            <td>:</td>
            <td><input type="text" name="NIM"></td>
        </tr>
        <tr>
            <td>Nomor Induk Siswa Nasional</td>
            <td>:</td>
            <td><input type="text" name="NIDN"></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="text" name="tanggal_lahir"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat"></textarea></td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: center;"><input type="submit" value="Add">
            <input type="reset" value="Clear"></td>
        </tr>
    </table> --}}