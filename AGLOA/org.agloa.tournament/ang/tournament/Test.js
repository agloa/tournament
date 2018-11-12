// Is this an anonymous function?
// I guess angular is the namespace function?
// $ probably the jQuery object
// _ is a lodash utility functions object.
(function(angular, $, _) {
  // Add this controller to the module configuration.
  angular.module('tournament').config(function($routeProvider) {
      $routeProvider.when('/tournament/test', {
        controller: 'TournamentTest',
        templateUrl: '~/tournament/Test.html',

        // Look up data when opening the page, list it out under "resolve".
        resolve: {
          countries: function(crmApi) {
            return getCountries(crmApi);
          },
          
          regions: function(crmApi) {
            return getRegions(crmApi);
          },
	}
      });
    }
  );

  // The controller uses *injection*. This default injects a few things:
  // $scope -- This is the set of variables shared between JS and HTML.
  // crmApi, crmStatus, crmUiHelp -- These are services provided by civicrm-core.
  angular.module('tournament').controller('TournamentTest', 
    function($scope, crmApi, crmStatus, crmUiHelp, countries, regions) {
      // The ts() and hs() functions help load strings for this module.
      var ts = $scope.ts = CRM.ts('tournament');

      // We have variables available in JS. We also want to reference them in HTML.
      $scope.countries = countries;
      $scope.regions = regions;
    }
  );

  //
  // Get the countries available for this domain.
  //
  // parameter crmApi - CiviCRM Api service
  //
  // returns an array of country objects - id and name s/b used for select elements.
  //
  function getCountries(crmApi) {
    return getCountryLimit(crmApi)
      .then( function(result){
        // Success
        return crmApi('Country', 'get', {
                      "sequential": 1,
                      "id": {"IN":result[0].countryLimit},
                      "options": {"limit":0}
                     })
          .then(
            // Success
            function(result) { return result.values;},
            // Failure
            function(result) { CRM.alert(ts('Unable to get country options.'), ts('Not Found'),'error');},
          );
        },

        // Failure
        function(result) { CRM.alert(ts('Unable to get available countries.'), ts('Not Found'),'error');},
      );
  }

  //
  // Get the regions comprising the countries available for this domain.
  //
  // parameter crmApi - CiviCRM Api service
  //
  // returns an array of region objects - id and name s/b used for select elements.
  //
  function getRegions(crmApi) {
    return getCountryLimit(crmApi)
      .then( function(result){
        // Success
        return crmApi('StateProvince', 'get', {
                      "sequential": 1,
                      "country_id": {"IN":result[0].countryLimit},
                      "options": {"limit":0}
                     })
          .then(
            // Success
            function(result) { return result.values; },
            // Failure
            function(result) { CRM.alert(ts('Unable to load region options'), ts('Not Found'),'error');},
          );
        },

        // Failure
        function(result) { CRM.alert(ts('Unable to get available countries.'), ts('Not Found'),'error');},
      );
  }

  //
  // Get the IDs of countries limited to this domain.
  //
  // parameter crmApi - CiviCRM Api service
  //
  // returns an array of (id,name) pairs for each available country.
  //
  function getCountryLimit(crmApi) {
    return crmApi('Setting', 'get', {"sequential": 1,"return": ["countryLimit"]}).then(
      // Success
      function(result){  return result.values; },
      // Failure
      function(result) { CRM.alert(ts('Unable to load available countries.'), ts('Not Found'),'error'); }
    );
  }

})

// Call the defined function
(angular, CRM.$, CRM._);
