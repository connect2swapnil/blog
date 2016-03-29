var values = {};
var mainApp = angular.module("mainApp", []);
        
         mainApp.service('sharableScope', function() {
            return {};
         });
         
         mainApp.controller('myController1', function($scope, sharableScope) {
                $scope.sharableScope  = sharableScope;
                $scope.sharableScope.firstname  = "swapnil";
                $scope.getName1 = function() {
                    alert($scope.sharableScope.lastname);
                }
         });
         
         mainApp.controller('myController2', function($scope, sharableScope) {
            $scope.sharableScope  = sharableScope;
            $scope.sharableScope.lastname = "chaudhari";
            
             $scope.getName2 = function() {
                 alert($scope.sharableScope.firstname);
             }
         });
         
          
         
         