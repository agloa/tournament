(function(angular, $, _) {

  angular.module('tournament')        
        .config(function($routeProvider) {
      $routeProvider.when('/tournament', {
        controller: 'TournamentEditCtrl',
        templateUrl: '~/tournament/EditCtrl.html',

        // If you need to look up data when opening the page, list it out under "resolve".
        resolve: {
          myContact: function(crmApi) {        	    
        	  return crmApi('Contact', 'getsingle', {
                 // id: 'user_contact_id',
                 "id": 43,
              "return": ["prefix_id"
                       ,"first_name"
                       , "middle_name"
                       , "last_name"
                       , "suffix_id"
                       , "birth_date"
                       , "gender_id"
                       ,"email"
                       ,"phone"
                       ,"street_address"
                       ,"supplemental_address_1"
                       ,"supplemental_address_2"
                       ,"supplemental_address_3"
                       ,"city"
                       ,"country","state_province"
                       ,"postal_code","postal_code_suffix"]
            }).then(function(result) {
                return result;
            });
          },

          genders: function(crmApi) {
              return crmApiOptionValues(crmApi, "gender");
          },

          prefixes: function(crmApi) {
            return crmApiOptionValues(crmApi, "individual_prefix");
          },

          suffixes: function(crmApi) {
              return crmApiOptionValues(crmApi, "individual_suffix");
          },

          countries: function(crmApi) {
        	  return crmApi('Setting', 'get', {
                  "sequential": 1,
                  "return": ["countryLimit"]
                })
                .then(function(result) {
          		  return crmApi('Country', 'get', {
          			  "sequential": 1,
          			  "id": {"IN":result.values[0].countryLimit},
          			  "return": ["id","name"],
          			  "options": {"limit":0}
          		  }).then(function(result) {
          			  return result.values;
            	  });
          	  	});
          },

          states: function(crmApi) {
        	  return crmApi('StateProvince', 'get', {
        		  "sequential": 1,
        		  "return": ["id","name","country_id"]
        	  		,"options": {"limit":0}
        	  }).then(function(result) {
        		  return result.values;
        	  });
          }
	    }
      });
    }
  );
  
  function crmApiOptionValues(crmApi, option_group_id) {
	  return crmApi('OptionValue', 'get', {
        	"sequential": 1,
  		  	"return": ["value","label"],
  		  	"option_group_id": option_group_id
		}).then(function(result) {
          return result.values;
        });
  }

  // The controller uses *injection*. This default injects a few things:
  // $scope -- This is the set of variables shared between JS and HTML.
  // crmApi, crmStatus, crmUiHelp -- These are services provided by civicrm-core.
  // myContact -- The current contact, defined above in config().
  angular.module('tournament').controller('TournamentEditCtrl', 
	function($scope, crmApi, crmStatus, crmUiHelp, myContact, genders, prefixes, suffixes, countries, states) {
	    // The ts() and hs() functions help load strings for this module.
	    var ts = $scope.ts = CRM.ts('tournament');
	    // See: templates/CRM/tournament/EditCtrl.hlp
	    var hs = $scope.hs = crmUiHelp({file: 'CRM/tournament/EditCtrl'});  
	    
	    
	    // We have myContact available in JS. We also want to reference it in
		// HTML.
	    $scope.myContact = myContact;
	    $scope.genders = genders;
	    $scope.prefixes = prefixes;
	    $scope.suffixes = suffixes;
	    $scope.countries = countries;
	    $scope.states = states;
	
	    $scope.save = function save() {
	      return crmStatus(
	        // Status messages. For defaults, just use "{}"
	        {start: ts('Saving...'), success: ts('Saved')},
	        // The save action. Note that crmApi() returns a promise.
	        crmApi('Contact', 'create', {
	          id: myContact.id,
	          first_name: myContact.first_name,
	          last_name: myContact.last_name,
	          middle_name: myContact.middle_name,
	          birth_date: myContact.birth_date,
	          gender_id: myContact.gender_id,
	          prefix_id: myContact.prefix_id,
	          suffix_id: myContact.suffix_id,
	          email: myContact.email,
	          phone: myContact.phone,
	          street_address: myContact.street_address,
	          supplemental_address_1: myContact.supplemental_address_1,
	          supplemental_address_2: myContact.supplemental_address_2,
	          supplemental_address_3: myContact.supplemental_address_3,
	          city: myContact.city,
	          country: myContact.country,
	          state_province: myContact.state_province,
	          postal_code: myContact.postal_code,
	          postal_code_suffix: myContact.postal_code_suffix
	        })
	      );
	    };
  });

})(angular, CRM.$, CRM._);
