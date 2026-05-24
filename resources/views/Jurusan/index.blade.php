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
        <a href="/4"><button type="button" class="btn btn-primary mx-auto" style ="width:90%; margin:10px;">Kembali</button></a>
    </div>
    <table class="table table-bordered table-hover align-middle shadow-sm">
        
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Jurusan</th>
                <th>Kode Jurusan</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
        </thead>

        <tbody class="table-group-divider">
            @foreach ($jurusan as $nomor => $j)
            <tr>
                <td>{{$nomor + 1}}</td>
                <td>{{ $j->nama_jurusan }}</td>
                <td>{{ $j->kode_jurusan }}</td>
                <td>

                    <div class="d-flex justify-content-center gap-2">

                        <form action="{{ action([App\Http\Controllers\JurusanController::class, 'destroy'], [$j->id]) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm">
                                Hapus
                            </button>
                        </form>

                        <a href="{{ action([App\Http\Controllers\JurusanController::class, 'edit'], [$j->id]) }}">
                            <button class="btn btn-warning btn-sm">
                                Edit
                            </button>
                        </a>

                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>