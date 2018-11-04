// Is this an anonymous function?
// I guess angular is the namespace function?
// $ is the jQuery object from CRM
// _ is a lodash utility functions object.
(function(angular, $, _) {
  // Add this controller to the module configuration.
  angular.module('tournament').config(function($routeProvider) {
      $routeProvider.when('/tournament/address/:address_id', {
        controller: 'TournamentAddressCtrl',
        templateUrl: '~/tournament/AddressCtrl.html',

        // Look up data when opening the page, list it out under "resolve".
        resolve: {
          selectedAddress: function(crmApi, $route) {
            return crmApi('Address', 'getsingle', {
              id: $route.current.params.address_id,
              return: ["contact_id"
                       ,"location_type_id"
                       ,"is_primary"
                       ,"street_address"
                       ,"supplemental_address_1"
                       ,"supplemental_address_2"
                       ,"supplemental_address_3"
                       ,"city"
                       ,"state_province_id"
                       ,"country_id"
                       ,"postal_code"
                       ,"postal_code_suffix"]
            }).then(
                // Success
                function(result) {
                  return result;
                },
                // error
                function () {
                  CRM.alert(
                    ts('No address record exists with an ID of %1', {1: $route.current.params.address_id}),
                    ts('Not Found'),
                    'error'
                  );
                }
             );
          },

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
  //   $scope -- This is the set of variables shared between JS and HTML.
  //   crmApi, crmStatus, crmUiHelp -- These are services provided by civicrm-core.
  //   selectedAddress -- The current contact, defined above in config().
  angular.module('tournament').controller('TournamentAddressCtrl', function($scope, crmApi, crmStatus, crmUiHelp, selectedAddress, countries, regions) {
    // The ts() and hs() functions help load strings for this module.
    var ts = $scope.ts = CRM.ts('tournament');
    var hs = $scope.hs = crmUiHelp({file: 'CRM/tournament/AddressCtrl'}); // See: templates/CRM/tournament/AddressCtrl.hlp

    // We have variables available in JS. We also want to reference them in HTML.
    $scope.selectedAddress = selectedAddress;
    $scope.countries = countries;
    $scope.regions = regions;

    $scope.save = function save() {
      return crmStatus(
        // Status messages. For defaults, just use "{}"
        {start: ts('Saving...'), success: ts('Saved')},
        // The save action. Note that crmApi() returns a promise.
        crmApi('Address', 'create', {
          id: selectedAddress.id
          , contact_id: selectedAddress.contact_id
          , location_type_id: selectedAddress.location_type_id
          , is_primary: selectedAddress.is_primary
          , street_address: selectedAddress.street_address
          , supplemental_address_1: selectedAddress.supplemental_address_1
          , supplemental_address_2: selectedAddress.supplemental_address_2
          , supplemental_address_3: selectedAddress.supplemental_address_3
          , city: selectedAddress.city
          , state_province_id: selectedAddress.state_province_id
          , country_id: selectedAddress.country_id
          , postal_code: selectedAddress.postal_code
          , postal_code_suffix: selectedAddress.postal_code_suffix
        })
      );
    };
  });

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

