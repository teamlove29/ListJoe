app.controller('reportCtrl', ['$scope', '$http',function($scope ,$http ){
    console.log('asd');
    
    $("#myform2").on("submit",function(e){

        console.log('testMyform2');
        e.preventDefault();
        var formData = new FormData($(this)[0]);
        formData.append("id",$scope.idTopicEdit);
        formData.append("topic",$scope.topic1);
        formData.append("detailNews",$scope.detailNews1);
        // console.log(e);


        $.ajax({
            url: './models/view/manageNews.php?page=editDataList',
            type: 'POST',
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false
        }).done(function(data){
            
                if (data.length==1||data.length==0){
                    swal('เพิ่มข้อมูลเป็นที่เรียบร้อยแล้ว')
                    $scope.selectDataListNews();
    
                } else if (data == 1112222222){
                    swal('เพิ่มข้อมูลเป็นที่เรียบร้อยแล้ว')
                    $scope.selectDataListNews();
    
                } else {
                    swal({
                        title: "คุณต้องการดำเนินการต่อหรืไม่?",
                        text: "ไฟล์ที่"+data+" มีปัญหาไม่สามารถอัพโหลดได้คุณต้องการอัพโหลดต่อหรือไม่" ,
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                      }).then((willDelete) => {
                        if (willDelete) {
                            console.log('เข้ามาแลว');
                            $.ajax({
                                url: './models/view/manageNews.php?page=editDataLists',
                                type: 'POST',
                                data: formData,
                                async: false,
                                cache: false,
                                contentType: false,
                                processData: false
                            }).done(function(data){
                                swal('เพิ่มข้อมูลเรียบร้อยแล้ว');
                                $scope.selectDataListNews();
    
                            })
    
                        } else {
                          swal("การอัพโหลดถูกยกเลิก");
                          $scope.selectDataListNews();
    
                        }
                      });
                      
                }
        });     
 
    });

    

}]);
