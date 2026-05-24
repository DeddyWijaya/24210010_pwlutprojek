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
        <form action="{{ action([App\Http\Controllers\DosenController::class, 'update'], [$dosen->id]) }}"  method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                    <label>Id Jurusan</label>
                    <input type="text" name="jurusan_id" class="form-control" value="{{ $dosen->jurusan_id }}">
                </div>
                
                <div class="mb-3">
                    <label>Nama Lengkap</label>
                    <input type="text" name="fullname" class="form-control" value="{{ $dosen->fullname }}">
                </div>

                <div class="mb-3">
                    <label>NIP</label>
                    <input type="text" name="NIP" class="form-control" value="{{ $dosen->NIP }}">
                </div>

                <div class="mb-3">
                    <label>Nomor Induk Dosen Nasional</label>
                    <input type="text" name="NIDN" class="form-control" value="{{ $dosen->NIDN }}">
                </div>
               
                <div class="mb-3">
                    <label>Pendidikan Terakhir</label>
                    <input type="text" name="pendidikan_terakhir" class="form-control" value="{{ $dosen->pendidikan_terakhir }}">
                </div>

                <div class="mb-3">
                    <label>Tanggal Lahir</label>
                    <input type="text" name="tanggal_lahir" class="form-control" value="{{ $dosen->tanggal_lahir }}">
                </div>

                <div class="mb-3">
                    <label>Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" value="{{ $dosen->tempat_lahir }}">
                </div>

                <div class="mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" rows="3" class="form-control">{{ $dosen->alamat }}</textarea>
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