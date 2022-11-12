<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title']; ?></title>
</head>

<body>
     <?php
    // echo "<br>"; 
    // for ($i = 0; $i < count($data['kelas']); $i++) {
    //     # code...
    //     echo json_encode($data['kelas'][$i]);
    //     echo "<br>";
    // }
    // foreach ($data['jumlah_siswa'] as $isi) {

    // }
    $i = 0;
    while ($i > count($data) + 4) {
        $i ++;
        echo $i;
        if ($i == count($data)) break;
    }
    echo $data['jumlah_siswa'][$i][$i];
    echo $i;
    // echo count($data['jumlah_siswa']);
    // echo "<br>";
    // echo $i;
    echo "<br>";
    ?>
    <a href="<?= base_url; ?>/kelas/detail/1"><button type="submit">KELAS</button></a>
</body>

</html>