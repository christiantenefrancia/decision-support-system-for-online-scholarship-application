var app = angular.module("appTable",[]);
app.controller("appController",function($scope) {
    $scope.user = {};
    $scope.user.name = "";
    $scope.user.dept = "";
    $scope.employeeList = [];
    $scope.add = function(){
        var data = {};
       data.name = $scope.user.name ;
       data.dept = $scope.user.dept;
       $scope.employeeList.push(data);
        console.log($scope.employeeList);
    }
 
    $scope.remove = function(obj){
       // console.log('data from remove'+obj);
        //console.log('before'+$scope.employeeList);
       // $scope.employeeList.splice(obj, obj);
        console.log('end'+$scope.employeeList);
     
        if(obj != -1) {
    $scope.employeeList.splice(obj, 1);
}
    }
});