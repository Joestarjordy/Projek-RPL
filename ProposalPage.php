<!DOCTYPE html>
<html lang="en">

<head>
  <title> Form Proposal </title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>

<body id="page-top">
  <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"> </script>

  <br><br><br><br>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top" id="mainNav">
      <div class="container">
        <a class="nav-item" href="ProposalPage.php">
          <img src="gambar/filkom_ub.png" width="170" height="65" alt="filkom_ub">
        </a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="text-white nav-link active fs-5 p-3" aria-current="page" href="UnduhBerkasPage.php">Unduh Berkas</a>
            </li>
            <li class="nav-item">
              <a class="text-white nav-link active fs-5 p-3" aria-current="page" href="PraProposalPage.php">PraProposal</a>
            </li>
            <li class="nav-item">
              <a class="text-white nav-link active fs-5 p-3" aria-current="page" href="ProposalPage.php">Proposal</a>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="fst-italic shadow container mt-5 p-2 rounded" style="background-color: #D9D9D9;">
    <h1> Form Proposal Mahasiswa </h1>
  </div>

  <div class="fw-semibold shadow container-md my-3 py-3 rounded" style="background-color: #D9D9D9;">
    <form action="ConfigForm.php" method="POST">
      <img src="gambar/pngwing.com.png" class="rounded float-end" height="557" width="400" alt="pngwing.com.png">
      <div class="mb-3 col-md-8">
        <label for="nama" class="form-label">Nama</label>
        <input type="nama" class="shadow shadow form-control" id="nama" name="nama" required>
      </div>
      <div class="mb-3 col-md-8">
        <label for="nim" class="form-label">Nim</label>
        <input type="nim" class="shadow form-control" id="nim" name="nim" required>
      </div>
      <div class="mb-3 col-md-8">
        <label for="topikskripsi" class="form-label">Topik Skripsi</label>
        <input type="topikskripsi" class="shadow form-control" id="topikskripsi" name="topikskripsi" required>
      </div>
      <div class="mb-3 col-md-8">
        <label for="calonpembimbing" class="form-label">Calon Pembimbing</label>
        <input type="calonpembimbing" class="shadow form-control" id="calonpembimbing" name="calonpembimbing" required>
      </div>
      <div class="mb-3 col-md-8">
        <label for="calonpembimbing2" class="form-label">Calon Pembimbing 2</label>
        <input type="calonpembimbing2" class="shadow form-control" id="calonpembimbing2" name="calonpembimbing2" required>
      </div>
      <div class="mb-3 col-md-8">
        <label for="formFile" class="form-label">Berkas Dokumen</label>
        <input class="shadow form-control" type="file" id="formFile" name="berkasdokumen" required>
      </div>
      <div class="col-md-8 py-1 d-flex flex-row-reverse">
        <button type="submit" class="shadow btn btn-primary" name="submit">Submit</button>
        <button type="reset" class="shadow btn btn-primary me-3">Clear Form</button>
      </div>
    </form>
  </div>

  <br><br>

</body>

</html>