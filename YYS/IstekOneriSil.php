<?php
include "DatabaseCon.php";
    session_start();
    global $db;

    if(isset($_POST['onerisilme'])) {
        $deleteID = $_POST['deleteID'];

        $sorgu = $db->prepare("Update oneriler set durum=0 where onr_ID=:deleteID");
        $sorgu->execute([
            'deleteID' => $deleteID
        ]);
        if ($sorgu) {
            $data = "Kayıt silindi.";
        } else {
            $data = "Silme işlemi başarısız!";
        }
        echo $data;
    }

