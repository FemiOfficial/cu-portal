application.directive('accordion', function() {
	return {
		restrict : 'E',
		transclude: true,
		scope: {},
		template: '<div ng-transclude></div>',
		link: function(scope, element){

		};
	};
})