var mainApp = angular.module("module1", []);
        
        mainApp.controller('myController1', function($scope) {
               $scope.result1 = "Hello myController1" ;
        });
        
        mainApp.controller('myController2', function($scope) {
               $scope.result2 = "Hello myController2" ; 
        });
         
         
var subApp = angular.module("module2", ['mainApp']);
        
        subApp.controller('subController1', function($scope) {
               $scope.result11 = "Hello subController1" ;
        });
        
        subApp.controller('subController2', function($scope) {
               $scope.result21 = "Hello subController2" ; 
        });
                  
         
         
          
         
         