var app = angular.module('angularTable', ['angularUtils.directives.dirPagination']);

 var count = 0;
 var staffID = [];

app.controller('listdata',function($scope, $http){
	$scope.users = []; //declare an empty array
	$http.get("JSON/data.json").success(function(response){ 
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
             staffID[count] = userid;
             count++;
	     }
	   };
    
});

function deleteAccount()
{
//    var str = " ";
//    for(var i = 0; i < count; i++)
//        str += staffID[i] + " ";
//        
//    alert(str);
    
    $.ajax({
        type: "POST",
        url: "ajax/delete_account.php",
        data:{ 
            array:JSON.stringify(staffID),
            size: count
        }, 
         success: function(data){
            window.location.reload(); 
            //alert(data);
        }
    });
}

//$('#delete').click(function(){
//    
//    alert("sASd");
//     var str = " ";
//    for(var i = 0; i < count; i++)
//        str += staffID[i] + " ";
//        
//    alert(str);
//    
//});






