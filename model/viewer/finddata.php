<?php 
include('../connect.php');
    if($_REQUEST['page']=='findsperson'){
        // $data = $_REQUEST['dataa'];


    }else if($_REQUEST['page']=='counttotal'){
        $query = $pdo->prepare("SELECT * FROM tb_list");
        $query->execute();
        $dataAll = $query->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(array("dataAll" => $dataAll));
    }
?>