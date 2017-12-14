var app = angular.module('angularTable', ['angularUtils.directives.dirPagination']);

 var count = 0;
    var s = [];

app.controller('listdata',function($scope, $http){
	$scope.users = []; //declare an empty array
	$http.get("JSON/applicant_approve_data.json").success(function(response){ 
		$scope.users = response;  //ajax request to fetch data into $scope.data
	});
	
	$scope.sort = function(keyname){
		$scope.sortKey = keyname;   //set the sortKey to the param passed
		$scope.reverse = !$scope.reverse; //if true make it false and vice versa
	}
    
    $scope.selection=[];
	  // toggle selection for a given employee by name
	  $scope.toggleSelection = function toggleSelection(userid) {
	     var idx = $scope.selection.indexOf(userid);
	 
	     // is currently selected
	     if (idx > -1) {
	       $scope.selection.splice(idx, 1);
            count--;
	     }
	 
	     // is newly selected
	     else {
	       $scope.selection.push(userid);
             s[count] = userid;
             count++;
	     }
	   };
    
});

function showItem()
{
    var str = " ";
    for(var i = 0; i < count; i++)
        str += s[i] + " ";
        
    alert(str);
}