<?php 
include('../connect.php');

    if ($_REQUEST['page']=='insertList'){
        if (!$_FILES){
            echo 'erroremtry' ;

       
        
        }else{
            $id_card = $_REQUEST['id_card'];
            $account_number = $_REQUEST['acc_num'];
            $tel_number = $_REQUEST['tel'];
            $query = $pdo->prepare("INSERT INTO tb_list SET id_card='$id_card',account_number='$account_number',tel_number='$tel_number' ");
            $query->execute();
            $id = $pdo->lastInsertId();
            $files = $_FILES['pic'];
            $tem = $_FILES['pic']['tmp_name'];
            $namePic = $_FILES['pic']['name'];
            $type = $_FILES['pic']['type'];
            $error ='' ;
                foreach($tem as $b => $d){
                    $exp = explode('/',$type[$b]);

                    if ($exp[1]=='jpeg'|| $exp[1]=='jpg'|| $exp[1]=='png' ){    
                        $date = date("Y-m-d");
                        $time = date("H:i:s");
                        $newName = $date."_".$time.'_'.$namePic[$b];
                        move_uploaded_file($tem[$b],"../../uploadfiles/".$newName);
                        $query = $pdo->prepare("INSERT INTO tb_list_files SET file_name = '$newName' ,  ,tb_list_id ='$id', type='$exp[1]'");
                        $query->execute();
                    } else {
                        echo 'errortype';
                    }

                }

        }

    }
?>