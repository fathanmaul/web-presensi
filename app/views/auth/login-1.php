<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title']; ?></title>
</head>
<body>
    Login;
    <form action="<?= base_url; ?>/auth/authLogin" method="post">
        <input type="text" name="username">username</input>
        <input type="password" name="password">password</input>
        <button type="submit">login</button>
    </form>
    
    <a href="<?= base_url; ?>/auth/register"><button type="submit">register</button></a>

    <?php Message::flash(); ?>

</body>
</html>