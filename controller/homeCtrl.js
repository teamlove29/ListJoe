app.controller('homeCtrl', ['$scope', '$http','dataList',function($scope ,$http,dataList ){
$scope.num ;
    $scope.getDatalist =()=>{
        dataList.dataList().then(function(d){
            console.log(d.data.dataAll);
            $scope.num = d.data.dataAll.length;
        })
    }
    $scope.findData = (data)=>{
        dataList.dataFind(data).then(function(e){
            if(e.data.dataFind!=undefined){
                alert('มีข้อมูล');
            } else {
                alert('ไม่มีข้อมูล');
            }
        })  
    }
        
    $scope.getDatalist();
 
}]).factory('dataList', ['$http', function ($http) {
    return {
        dataList: function () {
            return $http.get("./model/viewer/finddata.php?page=counttotal");
        },dataFind: function(data){
            return $http.post("./model/viewer/finddata.php?page=findsperson&data="+data     );
        }
    }
}]);

