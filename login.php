<?php
    include_once('koneksi.php');
    $db = new Database();
    $data;
    $_POST['username'] = 'admin';
    $_POST['password'] = 'admin';
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $query = $db->koneksi()->prepare("SELECT tb_user.username, tb_user.password, tb_level.level FROM tb_user JOIN tb_level ON tb_user.id_level = tb_level.id_level WHERE username = :username && password = :password");
        $query->execute(['username'=> $_POST['username'], 'password' => $_POST['password']]);
        foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $row) {
            $data = $row;
            echo json_encode($data);
        }
        $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://localhost/send-mail.php',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array('email' => $email, 'nama' => $nama, 'otp' => $otp),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            if ($response) {

                http_response_code(202);
                $this->response['message'] = "kode otp terkirim";
            }
    } else {
        header('Location: login.php');
    }
?>