<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    @include('components.bootstrap')
</head>
    <body>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img style="width: 50px; height: auto;" src="https://yt3.googleusercontent.com/OPRkc_gAuqrhd5b_2bVHHWjAamSL3WVwOZu1bIrL9-goyxF9JygXTLKEpSoR1xO9zVubN0ZradI=s160-c-k-c0x00ffffff-no-rj" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ action([App\Http\Controllers\DosenController::class, 'index']) }}">Dosen</a></li>
            <li><a class="dropdown-item" href="{{ action([App\Http\Controllers\MahasiswaController::class, 'index']) }}">Mahasiswa</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{ action([App\Http\Controllers\JurusanController::class, 'index']) }}">Jurusan</a></li>
            <li><a class="dropdown-item" href="{{ action([App\Http\Controllers\MataKuliahController::class, 'index']) }}">Mata Kuliah</a></li>
            <li><a class="dropdown-item" href="{{ action([App\Http\Controllers\KelasController::class, 'index']) }}">Kelas</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>

        <div style="text-align: center;">
            <a href="/1"><button type="button" class="btn btn-primary mx-auto" style ="width:90%; margin:10px;">Kembali</button></a>
        </div>
    <table style="width:90%; margin:auto;" class="table table-bordered table-hover align-middle shadow-sm">
        
        <thead class="table-dark">
            <th>No</th>
            <th>ID Jurusan</th>
            <th>ID Dosen</th>
            <th>Nama Mata Kuliah</th>
            <th>Kode Mata Kuliah</th>
            <th>SKS</th>
            <th scope="col" class="text-center">Aksi</th>
        </thead>
        @foreach ($matakuliah as $nomor => $m)
            <tr>
                <td>{{$nomor + 1}}</td>
                <td>{{$m->jurusan_id}}</td>
                <td>{{$m->dosen_id}}</td>
                <td>{{$m->nama_mk}}</td>
                <td>{{$m->kode_mk}}</td>
                <td>{{$m->sks}}</td>
                <td>

                <div class="d-flex justify-content-center gap-2">

                <form action="{{ action([App\Http\Controllers\MataKuliahController::class, 'destroy'], [$m->id]) }}" method="post">
                    @csrf
                    @method('DELETE') 
                        <button class="btn btn-danger">Hapus</button>
                    </form>

                    <a href="{{ action([App\Http\Controllers\MataKuliahController::class, 'edit'], [$m->id]) }}" method="post">
                        <button class="btn btn-warning">Edit</button>
                    </a>
                    </div>
                </td>
                
            </tr>
            @endforeach
        </table>
    </body>
</html>