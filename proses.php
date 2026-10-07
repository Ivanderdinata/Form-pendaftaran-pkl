<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama       = htmlspecialchars(trim($_POST['nama']));
    $nis        = htmlspecialchars(trim($_POST['nis']));
    $email      = htmlspecialchars(trim($_POST['email']));
    $jurusan    = isset($_POST['jurusan']) ? htmlspecialchars($_POST['jurusan']) : '';
    $perusahaan = htmlspecialchars($_POST['perusahaan']);
    $alasan     = htmlspecialchars(trim($_POST['alasan']));

    $tech_stack = isset($_POST['tech_stack']) ? $_POST['tech_stack'] : [];
    $tech_stack_str = !empty($tech_stack) ? implode(", ", array_map('htmlspecialchars', $tech_stack)) : "Tidak ada";

?>
    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hasil Pendaftaran PKL</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
                margin: 40px;
            }

            .result-card {
                max-width: 500px;
                background: #ffffff;
                padding: 25px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                margin: 0 auto;
            }

            h2 {
                color: #4CAF50;
                text-align: center;
            }

            .data-row {
                margin-bottom: 12px;
                border-bottom: 1px solid #eee;
                padding-bottom: 8px;
            }

            .label {
                font-weight: bold;
                color: #555;
            }

            .back-btn {
                display: inline-block;
                margin-top: 15px;
                padding: 10px 15px;
                background-color: #4CAF50;
                color: white;
                text-decoration: none;
                border-radius: 4px;
                text-align: center;
            }
        </style>
    </head>

    <body>

        <div class="result-card">
            <h2>Pendaftaran PKL Berhasil!</h2>

            <div class="data-row"><span class="label">Nama Lengkap:</span> <?php echo $nama; ?></div>
            <div class="data-row"><span class="label">NIS:</span> <?php echo $nis; ?></div>
            <div class="data-row"><span class="label">Email:</span> <?php echo $email; ?></div>
            <div class="data-row"><span class="label">Jurusan:</span> <?php echo $jurusan; ?></div>
            <div class="data-row"><span class="label">Pilihan Perusahaan:</span> <?php echo $perusahaan; ?></div>
            <div class="data-row"><span class="label">Tech Stack Dikuasai:</span> <?php echo $tech_stack_str; ?></div>
            <div class="data-row"><span class="label">Alasan:</span> <?php echo nl2br($alasan); ?></div>

            <a href="pendaftaran.php" class="back-btn">Kembali ke Form</a>
        </div>

    </body>

    </html>
<?php

} else {
    header("Location: pendaftaran.html");
    exit();
}
?>