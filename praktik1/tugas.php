<?php
$mahasiswa2 = [
    'id'=>1,
    'nim'=>01102222,
    'uts'=>90,
    'uas'=>85,
    'tugas'=>95,
];
$mahasiswa1 = [
    'id'=>1,
    'nim'=>01102222,
    'uts'=>90,
    'uas'=>85,
    'tugas'=>95,
];
$mahasiswa3 = [
    'id'=>1,
    'nim'=>01102222,
    'uts'=>90,
    'uas'=>85,
    'tugas'=>95,
];
$ar_nilai= [$mahasiswa1,$mahasiswa2,$mahasiswa3];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Daftar Nilai Mahasiswa</h2>
        <table class="table table-stripped">
            <tr>
                <th>no</th>
                <th>nim</th>
                <th>uts</th>
                <th>uas</th>
                <th>tugas</th>
            </tr>
            <?php foreach($ar_nilai as $nilai){ ?>
            <tr>
                <td><?= $nilai['id'];?></td>
                <td><?php echo $nilai['nim'];?></td>
                <td><?php echo $nilai['uts'];?></td>
                <td><?php echo $nilai['uas'];?></td>
                <td><?php echo $nilai['tugas'];?></td>
           
            </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>