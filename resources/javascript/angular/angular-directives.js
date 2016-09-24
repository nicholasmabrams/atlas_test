'use strict';

// Link the directive template to the current scope where it is placed in the DOM
angular.module('testExample').directive('atlasDistDemo', function(){
	return {
		restrict: 'A',
		templateUrl: 'resources/angular-directives/test-example-template.html'
	}
});