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
    // $i = 0;
    // while ($i > count($data) + 4) {
    //     $i ++;
    //     echo $i;
    //     if ($i == count($data)) break;
    // }
    // echo $data['jumlah_siswa'][$i][$i];
    // echo $i;
    // echo count($data['jumlah_siswa']);
    // echo "<br>";
    // echo $i;
    // echo "<br>";

    ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <!-- <th style="width: 10px">#</th> -->
                <th>No</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data['kelas'] as $row) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['nama_kelas']; ?></td>
                    <td style="margin-left: 2;">
                    <a href="<?= base_url; ?>/kelas/detail/<?= $row['id_kelas'] ?>" class="badge badge-info">lihat</a>
                    <a href="<?= base_url; ?>/kelas/edit/<?= $row['id_kelas'] ?>" class="badge badge-info">Edit</a>
                    <a href="<?= base_url; ?>/kelas/hapus/<?= $row['id_kelas'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                    </td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
    <a href="<?= base_url; ?>/kelas/tambah" class="badge badge-info">Tambah Kelas</a>
</body>

</html>