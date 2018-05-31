app.controller('homeCtrl', ['$scope', '$http','dataList',function($scope ,$http,dataList ){
$scope.num ;
    $scope.getDatalist =()=>{
        dataList.dataList().then(function(d){
            // console.log(d.data.dataAll.length);
            $scope.num = d.data.dataAll.length;
        })
    }
    $scope.getDatalist();
 
}]).factory('dataList', ['$http', function ($http) {
    return {
        dataList: function () {
            return $http.get("./model/viewer/finddata.php?page=counttotal");
        }
    }
}]);

