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
                            <a class="text-dark nav-link active fs-5 p-3" aria-current="page" href="UnduhBerkasPage.php">Unduh Berkas</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-dark nav-link active fs-5 p-3" aria-current="page" href="PraProposalPage.php">PraProposal</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-white nav-link active fs-5 p-3" aria-current="page" href="ProsesVerifikasi.php">Proposal</a>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <div class="fst-italic mt-5 p-2 shadow container rounded" style="background-color: #D9D9D9;">
        <h1> Proposal Mahasiswa </h1>
    </div>
    <div class="shadow container rounded" style="background-color: #D9D9D9;">
        <div class="my-3 d-flex flex-row mb-0 d-flex justify-content-between">
            <div class="p-2 fs-5 row"> Pengajuan Proposal </div>
            <div class="p-2 fs-5 row"> Proses Verifikasi </div>
            <div class="p-2 fs-5 row"> Proposal Diverifikasi </div>
        </div>
        <div class="progress">
            <div class="progress-bar row" role="progressbar" aria-label="Basic example" style="width: 41rem" aria-valuenow="50" aria-valuemin="20" aria-valuemax="100">50%</div>
        </div>
        <div class="my-3 d-flex justify-content-center" role="status">
            <div class="spinner-border align-self-center mt-5" aria-hidden="true" role="status"> </div>
            <div class="ms-2 fs-3 mt-5 fw-bold"> Sedang Menunggu Verifikasi... </div>
        </div>
        <div class="my-3 d-flex justify-content-center">
            <div class="p-3 fs-5"> Silahkan hubungi dosen pembimbing anda untuk melakukan verifikasi proposal sesuai batas waktu yang sudah ditentukan </div>
        </div>
    </div>

    <br><br><br><br><br><br><br>

    <footer class="text-center text-lg-start text-white bg-secondary">
        <div class="text-center p-3">
            © 2022 Copyright:
            <a class="text-white" href="https://www.instagram.com/">Jordy Cahya Buana</a>
        </div>
    </footer>


</body>

</html>