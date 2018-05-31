app.controller('reportCtrl', ['$scope', '$http',function($scope ,$http ){
    console.log('asd');
    
    $("#myform2").on("submit",function(e){
        console.log($scope.id_card.length)

        if($scope.id_card.length == 13){
            if($scope.tel.length ==10){

                e.preventDefault();
                var formData = new FormData($(this)[0]);
                formData.append("id_card",$scope.id_card);
                formData.append("acc_num",$scope.acc_num);
                formData.append("tel",$scope.tel);

                $.ajax({
                    url: './model/viewer/insertperson.php?page=insertList',
                    type: 'POST',
                    data: formData,
                    async: false,
                    cache: false,
                    contentType: false,
                    processData: false
                }).done(function(data){
                    if(!data){
                        alert('ส่งคำร้องขอสำเร็จ');
                    }else{
                        alert('ไม่ได้ใส่ไฟล์หรือไฟล์ที่อัพโหลดเสียหายไฟล์ภาพ');
                    }
                    });    
            } else{ alert('ใส่หมายเลขโทรศัพท์')} 
        }else{
            alert('ใส่รหัสบัตรประชาชนให้ถูกต้อง')
        }
    });

    

}]);
