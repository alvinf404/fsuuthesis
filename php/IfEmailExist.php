<?php
require_once('dbcon.php');


if($_POST['action'] == 'ifEmailExist'){
    $Email = $_POST['data']['Email'];

    try{
        $sql = "SELECT email FROM tbl_profile WHERE email = '$Email'";
		$stm = $pdo->query($sql);
        if ($stm) {
            $rows = $stm->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($rows);
        }else {
            echo json_encode('ERROR');
        }

    }catch (Exception $e){
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }



}



?>