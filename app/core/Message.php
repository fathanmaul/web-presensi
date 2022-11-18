<?php

/**
 * Class Message
 * 
 * @package    app\core
 * 
 */
class Message
{

    /**
     * Set flash message
     * 
     * @param array $pesan pesan yang akan ditampilkan
     * @param string $key key untuk flash message
     * @param string $type tipe pesan, bisa success, info, warning, danger
     * 
     * 
     */
    public static function setFlash(array $pesan, String $key, String $type)
    {
        $_SESSION['pesan_flash'] = [
            'pesan' => $pesan,
            'key' => $key,
            'type' => $type
        ];
    }

    /**
     * method untuk menampilkan pesan
     */
    public static function flash()
    {
        if (isset($_SESSION['pesan_flash'])) {
            foreach ($_SESSION['pesan_flash']['pesan'] as $pesan) {
                echo '<div class="alert alert-' . $_SESSION['pesan_flash']['type'] . ' alert-dismissible fade show" role="alert">
                    <strong>' . $pesan . '</strong>' .' '. $_SESSION['pesan_flash']['key'] . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            }
            unset($_SESSION['pesan_flash']);
        }
    }
}
