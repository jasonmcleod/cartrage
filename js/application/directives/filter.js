app.directive('filter', ['$compile', function($compile) {
    return {
        link: function($scope, $element, attrs, controller) {
            $element.bind('keyup', function() {
                $scope.filter();
            })
        }
    }
}])