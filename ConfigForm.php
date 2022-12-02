<!doctype html>
<html lang="en">

<body>

    <?php

    session_start();
    $conn = mysqli_connect("localhost", "root", "", "project rpl");

    function proposal()
    {
        global $conn;

        $nama = $_POST["nama"];
        $nim = $_POST["nim"];
        $topikskripsi = $_POST["topikskripsi"];
        $calonpembimbing = $_POST["calonpembimbing"];
        $calonpembimbing2 = $_POST["calonpembimbing2"];
        $berkasdokumen = $_POST["berkasdokumen"];

        // cek nama
        $result = mysqli_query($conn, "SELECT nama FROM mahasiswa WHERE nama = '$nama'");
        if (mysqli_fetch_assoc($result)) {
            echo "<script> alert ('Nama sudah terdaftar, pastikan terlebih dahulu');
            location.href = 'http://localhost/project%20rpl/ProposalPage.php'
             </script>";
            return false;
        }

        // cek nim
        $result = mysqli_query($conn, "SELECT nim FROM mahasiswa WHERE nim = '$nim'");
        if (mysqli_fetch_assoc($result)) {
            echo "<script> alert ('Nim sudah terdaftar, pastikan terlebih dahulu');
            location.href = 'http://localhost/project%20rpl/ProposalPage.php'
             </script>";
            return false;
        }

        // cek topik skripsi
        $result = mysqli_query($conn, "SELECT topikskripsi FROM mahasiswa WHERE topikskripsi = '$topikskripsi'");
        if (mysqli_fetch_assoc($result)) {
            echo "<script> alert ('Topik skripsi sudah terdaftar');
            location.href = 'http://localhost/project%20rpl/ProposalPage.php'
             </script>";
            return false;
        }

        // menambahkan data mahasiswa baru ke database
        mysqli_query($conn, "INSERT INTO mahasiswa VALUES('$nama', '$nim', '$topikskripsi', '$calonpembimbing', '$calonpembimbing2', 
    '$berkasdokumen')");
        return mysqli_affected_rows($conn);
    }

    // submit button
    if (isset($_POST["submit"])) {

        if (proposal($_POST) > 0) {
            echo "<script> alert ('Data Telah Ditambahkan'); 
            location.href = 'http://localhost/project%20rpl/ProsesVerifikasi.php' 
            </script>";
        } else {
            echo mysqli_error($conn);
        }
    }

    ?>

</body>

</html>