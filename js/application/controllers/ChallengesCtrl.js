var ChallengesCtrl = function($scope, $element) {

    app.challenges = $scope;

    $scope.challenges = []
    $scope.filter = ''

    $scope.visible = function(challenge) {
        return challenge.game.toLowerCase().indexOf($scope.filter) >-1 || challenge.text.toLowerCase().indexOf($scope.filter) > -1
    }

    $scope.select = function(challenge) {
        app.challenge.selected = challenge;
        app.challenge.active = false;
        $('#challenge').modal('show');
    }

    $.get('lib/fetch.php', function(data) {
        var challenges = CSVToArray(data,',')
        challenges.splice(0,1)
        $scope.challenges = challenges.map(function(v) { return new Challenge(v) })
        console.log($scope.challenges)
        $scope.$apply();
    })


}