'use strict';
/**
 * DataEngine
 * @param  {Class} $http
 */
angular.module('testExample').service('DataEngine', ['$http', function($http){
	this.webServiceEndpoints = {
		testWebService: 'test_web_service.php'
	}
	/**
	 * getExampleTableData
	 * @param  {string} tableName name of data to fill Angular table with.
	 * @return {Object} promise with example data
	 */
	this.getExampleTableData = function(tableName){
		return $http.get(this.webServiceEndpoints.testWebService + '?getDataset=' + tableName);
	};
}]);