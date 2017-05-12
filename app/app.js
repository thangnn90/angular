/**
 * Created by nguye on 12/05/2017.
 */
var controllerApp = angular.nodule('controller', []);
controllerApp.controller('controller', function ($scope, $http) {
    $http.get('feedback.php').success(function (data) {
        console.log("data " + data);
        $scope.feedbacks = data;
    });
});