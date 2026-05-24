<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    @include('components.bootstrap')
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
        <img style="width: 50px;" src="https://yt3.googleusercontent.com/OPRkc_gAuqrhd5b_2bVHHWjAamSL3WVwOZu1bIrL9-goyxF9JygXTLKEpSoR1xO9zVubN0ZradI=s160-c-k-c0x00ffffff-no-rj">
    </a>

    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Menu</a>
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
    <a href="/5">
        <button class="btn btn-primary mx-auto" style="width:90%; margin:10px;">
            Kembali
        </button>
    </a>
</div>

<table style="width:90%; margin:auto;" class="table table-bordered table-hover align-middle shadow-sm">

    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Kode Kelas</th>
            <th>Kode Dosen</th>
            <th>Kode Mata Kuliah</th>
            <th>Ruang</th>
            <th>Hari</th>
            <th>Jam</th>
            <th>Tahun Ajaran</th>
            <th class="text-center">Aksi</th>
        </tr>
    </thead>

    <tbody class="table-group-divider">
        @foreach ($kelas as $nomor => $k)
        <tr>
            <td>{{ $nomor + 1 }}</td>
            <td>{{ $k->kode_kelas }}</td>
            <td>{{ $k->kode_dosen }}</td>
            <td>{{ $k->kode_mata_kuliah }}</td>
            <td>{{ $k->ruang_kelas }}</td>
            <td>{{ $k->hari }}</td>
            <td>{{ $k->jam }}</td>
            <td>{{ $k->tahun_ajaran }}</td>

            <td>
                <div class="d-flex justify-content-center gap-2">

                    <form action="{{ action([App\Http\Controllers\KelasController::class, 'destroy'], [$k->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>

                    <a href="{{ action([App\Http\Controllers\KelasController::class, 'edit'], [$k->id]) }}">
                        <button class="btn btn-warning btn-sm">Edit</button>
                    </a>

                </div>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

</body>
</html>