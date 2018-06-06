<?php 
include('../connect.php');
    if($_REQUEST['page']=='findsperson'){
        $data = $_REQUEST['data'];
        if (strlen($data)==13){
            $query = $pdo->prepare("SELECT * FROM tb_list WHERE id_card ='$data'");
            $query->execute();
            $dataFind = $query->fetchAll(PDO::FETCH_ASSOC);
            if(!$dataFind){
                echo 'error1';
            }else{
                echo json_encode(array("dataFind" => $dataFind));
            }

        } else if (strlen($data)==10){
            $query = $pdo->prepare("SELECT * FROM tb_list WHERE account_number ='$data");
            $query->execute();
            $dataFind = $query->fetchAll(PDO::FETCH_ASSOC);
            if(!$dataFind){
                echo 'error2';
            }else{
                echo json_encode(array("dataFind" => $dataFind));
            }

        } else {
            $query = $pdo->prepare("SELECT * FROM tb_list WHERE tel_number ='$data");
            $query->execute();
            $dataFind = $query->fetchAll(PDO::FETCH_ASSOC);
            if(!$dataFind){
                echo 'error3';
            }else{
                echo json_encode(array("dataFind" => $dataFind));
            }

        }


    }else if($_REQUEST['page']=='counttotal'){
        $query = $pdo->prepare("SELECT * FROM tb_list");
        $query->execute();
        $dataAll = $query->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array("dataAll" => $dataAll));
    }
?>