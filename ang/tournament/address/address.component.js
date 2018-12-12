(function(angular, $, _) {
  // Add this controller to the module configuration.
  angular.module('tournament').config(function($routeProvider) {
    var route = {
      controller: 'TournamentAddressController',
      templateUrl: '~/tournament/address/address.template.html',

      // Look up data when opening the page, list it out under "resolve".
      resolve: {
        selectedAddress: function(crmApi, $route) { return getSelectedAddress(crmApi, $route); },
        countries: function(crmApi) { return getCountries(crmApi); },
        regions:   function(crmApi) { return getRegions(crmApi); },
        person_id: function($route) { return $route.current.params.person_id; },
        default_location_type: function(crmApi) {
          return crmApi('LocationType', 'get', {"return": ["id"],"name": "Main"})
            .then(function(result) {
              return result.id;
            });
        },
      }
    };

    $routeProvider.when('/tournament/address/:address_id/', route)
      .when('/tournament/address/:address_id/person/:person_id', route)
      .when('/tournament/address//person/:person_id', route);
  });

  // The controller uses *injection*. This default injects a few things:
  //   $scope -- This is the set of variables shared between JS and HTML.
  //   crmApi, crmStatus, crmUiHelp -- These are services provided by civicrm-core.
  //   selectedAddress -- The current contact, defined above in config().
  angular.module('tournament').controller('TournamentAddressController', 
    function($scope, crmApi, crmStatus, crmUiHelp, selectedAddress, countries, regions, person_id, default_location_type) {

    // The ts() and hs() functions help load strings for this module.
    var ts = $scope.ts = CRM.ts('tournament');
    var hs = $scope.hs = crmUiHelp({file: 'CRM/tournament/AddressController'}); // See: templates/CRM/tournament/AddressController.hlp

    // We have variables available in JS. We also want to reference them in HTML.
    $scope.selectedAddress = selectedAddress;
    $scope.countries = countries;
    $scope.regions = regions;

    $scope.save = function save() {
      var errorMessage = "";

      var address_id = selectedAddress.id;
      var contact_id = selectedAddress.contact_id;
      
      if (contact_id === undefined) contact_id = person_id;
      if (contact_id === undefined) {
        errorMessage += "Cannon attach dddress to unknown contact. ";
      }

      var location_type_id = selectedAddress.location_type_id;
      if (location_type_id === undefined) location_type_id = default_location_type; 

      var is_primary = selectedAddress.is_primary;
      if (is_primary === undefined) is_primary = true;

      if (selectedAddress.street_address === undefined) errorMessage += "Address is required. ";
      if (selectedAddress.city === undefined) errorMessage += "City is required. ";
      if (selectedAddress.state_province_id === undefined) errorMessage += "State/Provice is required. ";
      if (selectedAddress.country_id === undefined) errorMessage += "Country is required. ";
      if (selectedAddress.postal_code === undefined) errorMessage += "Postal Code is required. ";

      if (errorMessage !== "") CRM.alert(ts(errorMessage), ts('Invalid Address'),'error');
      else return crmStatus(
        // Status messages. For defaults, just use "{}"
        {start: ts('Saving...'), success: ts('Saved')},
        // The save action. Note that crmApi() returns a promise.
        crmApi('Address', 'create', {
          id: address_id
          , contact_id: contact_id
          , location_type_id: location_type_id
          , is_primary: is_primary
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

  function getSelectedAddress(crmApi, $route){
    var address_id = $route.current.params.address_id;

    if (address_id === undefined){ return {}; } else {
      return crmApi('Address', 'getsingle', {
        id: address_id,
        return: ["contact_id","location_type_id","is_primary"
                 ,"street_address","supplemental_address_1","supplemental_address_2","supplemental_address_3"
                 ,"city","state_province_id","country_id","postal_code","postal_code_suffix"]
      }).then(
        function(result) { return result;},// Success
        function () { // error
          CRM.alert(ts('No address record exists with an ID of %1', {1: $route.current.params.address_id}),ts('Not Found'),'error');
        }
      );
    }
  }

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

