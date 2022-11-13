<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title']; ?></title>
</head>

<body>
    <!-- <?php echo json_encode($data); ?> -->
    <form role="form" action="<?= base_url; ?>/kelas/update" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_kelas" value="<?= $data['kelas']->id_kelas; ?>">
        <div class="card-body">
            <div class="form-group">
                <label>nama kelas</label>
                <input type="text" class="form-control" placeholder="masukkan nama kelas..." name="nama_kelas" value="<?= $data['kelas']->nama_kelas; ?>">
            </div>
            <!-- <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori_id">
                    <option value="">Pilih</option>
                    <?php foreach ($data['kategori'] as $row) : ?>
                        <option value="<?= $row['id']; ?>" <?php if ($data['buku']['kategori_id'] == $row['id']) {
                                                                echo "selected";
                                                            } ?>><?= $row['nama_kategori']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" class="form-control" placeholder="masukkan harga buku..." name="harga" value="<?= $data['buku']['harga']; ?>">
            </div>
        </div>  -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">simpan</button>
            </div>
    </form>
</body>

</html>