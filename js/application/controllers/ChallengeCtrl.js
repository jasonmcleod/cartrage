var ChallengeCtrl = function($scope, $element) {

    app.challenge = $scope;

    $scope.selected = false;
    $scope.active = false;

    $scope.activate = function() {
        $('#challenge').modal('show');
        $.post('/lib/activate.php',{text:JSON.stringify($scope.selected)}, function(data) {
            console.log(data)
        })
        $scope.active = true;
    }

}