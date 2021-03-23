<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
  <body>
    <!-- form    -->
    <div class="container mb-5 mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-light">
                        <div class="card-body">
                            <form action="getform.php" method="GET">
                              <h3 class="text-center mb-5"><i class="fab fa-wpforms fa-lg"></i> Form Nilai Siswa</h3>
                                  <div class="col-md-5 mb-3">
                                    <label for="validationCustom01"><i class="fas fa-building fa-lg"></i> Nama Lengkap</label>
                                    <input type="text" class="form-control" name="siswa" placeholder="Nama Lengkap">
                                  </div>
                                  <div class="col-md-4 mb-3">
                                    <label for="validationCustom02"><i class="fas fa-briefcase fa-lg"></i>Mata Kuliah</label>
                                    <select class="form-control" name="matkul">
                                      <option value="DDP">Dasar-Dasar Pemograman </option>
                                      <option value="BDI">Basis Data </option>
                                      <option value="WEB1">Pemograman Web</option>
                                    </select>
                                  </div>
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01"><i class="fas fa-user-tie fa-lg"></i>Nilai UTS</label>
                                  <input type="text" class="form-control" name="nilai_uts" placeholder="Nilai UTS">
                                </div>
                                <div class="col-md-4">
                                  <label for="validationCustom01">Nilai UAS</label>
                                  <input type="text" class="form-control" name="nilai_uas" placeholder="Nilai UAS">
                                </div>
                                <div class="col-md-4">
                                  <label for="validationCustom01">Nilai Tugas/Praktikum</label>
                                  <input type="text" class="form-control" name="nilai_tugas" placeholder="Nilai Tugas/Praktikum">
                                </div>
                                <button class="btn btn-primary ml-3 mt-3" type="submit" name="proses"> Simpan                               
                              </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

