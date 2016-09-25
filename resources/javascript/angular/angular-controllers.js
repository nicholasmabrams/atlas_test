'use strict';
/**
 * @ngController testCtrl
 * @param {Object} $scope                                                                                                         
 * @param {Class} NgTableParams                                                                                                  
 * @param {Class} dataEngine                                                                                                        
 */
angular.module('testExample').controller('testCtrl', ['$scope','NgTableParams', 'DataEngine', function($scope, NgTableParams, DataEngine){
		DataEngine.getExampleTableData('testTableData').then(function(serverRes){
			$scope.tableParams = new NgTableParams({}, { dataset: serverRes.data });
		});
		
}]);