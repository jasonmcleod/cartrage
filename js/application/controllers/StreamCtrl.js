function StreamCtrl($scope) {
    $scope.streaming = false;

    // $scope.channel = 'merlinidota'
    $scope.channel = 'cartrage'

    $.getJSON('http://api.justin.tv/api/stream/list.json?channel=' + $scope.channel + '&callback=?', function(data) {
        console.log(data)
        if(data.length>0) {
            $scope.streaming = true;
            $scope.$apply();
        }
    })
}