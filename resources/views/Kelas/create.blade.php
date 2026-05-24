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
        <form action="{{ action([App\Http\Controllers\KelasController::class, 'store']) }}"  method="post">
            @csrf

            <div class="mb-3 w-25">
                <label for="exampleFormControlInput1" class="form-label">Kode Mata Kuliah</label>
                <input type="Text" name="kode_mata_kuliah" class="form-control" placeholder="Masukkan Kode Mata Kuliah">
            </div>
    
            <div class="mb-3 w-25">
                <label for="exampleFormControlInput1" class="form-label">Kode Dosen</label>
                <input type="Text" name="kode_dosen" class="form-control" placeholder="Masukkan Kode Dosen">
            </div>

            <div class="mb-3 w-25">
                <label for="select" class="form-label">Hari</label>
                <select id="select" class="form-select">
                <option>Senin</option>
                <option>Selasa</option>
                <option>Rabu</option>
                <option>Kamis</option>
                <option>Jumat</option>

      </select>
    </div>

                <div class="mb-3 w-25">
      <label for="select" class="form-label">Jam</label>
      <select id="select" class="form-select">
        <option>07.00 - 08.00</option>
        <option>08.50 - 11.30</option>
        <option>12.30 - 14.10</option>
        <option>17.00 - 18.40</option>
        <option>19.00 - 20.40</option>

      </select>
    </div>

    <div class="form-check">
  <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
  <label class="form-check-label" for="radioDefault1">
    Ganjil
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" checked>
  <label class="form-check-label" for="radioDefault2">
    Genap
  </label>
</div>
            
            <div class="mb-3 w-25">


            
            <button class="btn btn-primary" type="submit" value="add">Submit</button>
            <button class="btn btn-danger" type="reset" value="clear">Clear</button>
    
        </form>
    </div>
</body>
</html>