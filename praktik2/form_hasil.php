<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table class="table table-stripped table-boredered text-uppercase">
        <thead class="thead-dark">  
            <tr class="table-dark text-light">
                <th>Nama</th>
                <th>Mata Kuliah</th>
                <th>Nilai Tugas</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>rata-rata</th>
                <th>keterangan</th>
            </tr>
        </thead>  
            <?php
                require_once "proses_nilai.php"
            ?>
            <tr class="table-primary">
                <td><?= $nama ?></td>
                <td><?= $matkul ?></td>
                <td><?= $tugas ?></td>
                <td><?= $uts ?></td>
                <td><?= $uas ?></td>
                <td><?= number_format($total_nilai,0)//untuk membulatkan angka dalam kurung untuk mengisyaratkan berapa angka setelah koma  ?></td>
                <td><?= $ket ?></td>
            </tr>
        </table>
    </div>
</body>
</html>