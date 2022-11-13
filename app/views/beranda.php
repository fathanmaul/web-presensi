<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title'] ?></title>
</head>

<body>
    Home;
    <?php echo $_SESSION['username']; ?>
    <table>
        <tr>
            <th>Hadir</th>
            <th>Izin</th>
            <th>Sakit</th>
        </tr>
    <?php
        foreach ($data as $single) {
        }        
    ?>
    <tr>
        <td><?php echo $single[0] ?></td>
        <td><?php echo $single[1] ?></td>
        <td><?php echo $single[2] ?></td>
    </tr>
    </table>
    <a href="<?= base_url; ?>/kelas"><button type="submit">KELAS</button></a>
    <a href="<?= base_url; ?>/login/logout"><button type="submit">LOG OUT</button></a>
</body>

</html>