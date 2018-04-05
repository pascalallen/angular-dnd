"use strict";
// var sampleControllers = {};

// sampleControllers.SimpleController = function($scope){
// 	$scope.friends = [
//     	{name:'Dave', city:'Cleveland'}, 
//     	{name:'Pascal', city:'Demopolis'}, 
//     	{name:'Sean', city:'Tokyo'}, 
//     	{name:'Coleman', city:'Kansas City'}
// 	];
// };

// sampleControllers.addFriend = function($scope){
// 	$scope.friends.push({ 
// 		name: $scope.newFriend.name, 
// 		city: $scope.newFriend.city 
// 	});
// }

// sampleApp.controller(sampleControllers);

sampleApp.controller('SimpleController', function($scope, $http){

	$http.get("../people.php")
	.success(function(data){
	    $scope.data = data;
	})
	.error(function() {
	    $scope.data = "error in fetching data";
	});

	$http.post("server/insert.php",{'fstname': $scope.newFriend.fname, 'lstname': $scope.newFriend.lname})
    .success(function(data, status, headers, config){
        console.log("inserted Successfully");
    })
    .error(function() {
	    $scope.data = "error in fetching data";
	});

	$scope.friends = [
    	{name:'Dave', city:'Cleveland'}, 
    	{name:'Pascal', city:'Demopolis'}, 
    	{name:'Sean', city:'Tokyo'}, 
    	{name:'Coleman', city:'Kansas City'}
	];

	$scope.addFriend = function(){
		$scope.friends.push({ 
			name: $scope.newFriend.name, 
			city: $scope.newFriend.city 
		});
	};

    $scope.lists = [
        {
            label: "Men",
            allowedTypes: ['man'],
            max: 4,
            people: [
                {name: "Bob", type: "man"},
                {name: "Charlie", type: "man"},
                {name: "Dave", type: "man"}
            ]
        },
        {
            label: "Women",
            allowedTypes: ['woman'],
            max: 4,
            people: [
                {name: "Alice", type: "woman"},
                {name: "Eve", type: "woman"},
                {name: "Peggy", type: "woman"}
            ]
        },
        {
            label: "People",
            allowedTypes: ['man', 'woman'],
            max: 6,
            people: [
                {name: "Frank", type: "man"},
                {name: "Mallory", type: "woman"},
                {name: "Alex", type: "unknown"},
                {name: "Oscar", type: "man"},
                {name: "Wendy", type: "woman"}
            ]
        }
    ];

    // Model to JSON for demo purpose
    $scope.$watch('lists', function(lists) {
        $scope.modelAsJson = angular.toJson(lists, true);
    }, true);
});