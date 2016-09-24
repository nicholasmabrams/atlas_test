'use strict';
/**
 * DataEngine
 * @param  {Class} $http
 */
angular.module('testExample').service('DataEngine', ['$http', function($http){
	this.webServiceEndpoints = {
		testWebService: window.atlasDistTestConfig.params.dataAccessLayerEndpoint // Sent into config file from backend where endpoints and config are properly maintained, possibly from db in future if required...
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