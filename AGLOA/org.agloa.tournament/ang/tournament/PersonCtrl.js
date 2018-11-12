(function(angular, $, _) {
  angular.module('tournament').config(function($routeProvider) {
      $routeProvider.when('/tournament/person/:contact_id?', {
        controller: 'TournamentPersonCtrl',
        templateUrl: '~/tournament/PersonCtrl.html',

        // If you need to look up data when opening the page, list it out under "resolve".
        resolve: {
          selectedPerson: function(crmApi, $route) {
            var contact_id = "user_contact_id";
            if ($route.current.params.contact_id > 0) contact_id = $route.current.params.contact_id;
       	    return getPerson(crmApi, contact_id, 
              ["prefix_id","first_name", "middle_name", "last_name", "display_name", "suffix_id", "birth_date" , "gender_id" , "address_id"
               , "email" // TODO: This is not required for all persons, so probably needs its own form.
               , "phone" // TODO: This is not required for all persons, so probably needs its own form.
              ]
	     );
          },

          genders:  function(crmApi) { return crmApiOptionValues(crmApi, "gender"); },
          prefixes: function(crmApi) { return crmApiOptionValues(crmApi, "individual_prefix");},
          suffixes: function(crmApi) { return crmApiOptionValues(crmApi, "individual_suffix");},
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
  // selectedPerson -- The current contact, defined above in config().
  angular.module('tournament').controller('TournamentPersonCtrl', 
	function($scope, crmApi, crmStatus, crmUiHelp, selectedPerson, genders, prefixes, suffixes) {
	    // The ts() and hs() functions help load strings for this module.
	    var ts = $scope.ts = CRM.ts('tournament');
	    // See: templates/CRM/tournament/PersonCtrl.hlp
	    var hs = $scope.hs = crmUiHelp({file: 'CRM/tournament/PersonCtrl'});  
	   
	    // We have selectedPerson available in JS. We also want to reference it in
		// HTML.
	    $scope.selectedPerson = selectedPerson;
	    $scope.genders = genders;
	    $scope.prefixes = prefixes;
	    $scope.suffixes = suffixes;
	
	    $scope.save = function save() {
	        
	      return crmStatus(
	        // Status messages. For defaults, just use "{}"
	        {start: ts('Saving...'), success: ts('Saved')},
	        // The save action. Note that crmApi() returns a promise.

	        //"api.Address.replace": {"values":{"0":{"street_address": selectedPerson.street_address}}},
	        crmApi('Contact', 'create', {
	          id: selectedPerson.id,
	          first_name: selectedPerson.first_name,
	          last_name: selectedPerson.last_name,
	          middle_name: selectedPerson.middle_name,
	          birth_date: selectedPerson.birth_date,
	          gender_id: selectedPerson.gender_id,
	          prefix_id: selectedPerson.prefix_id,
	          suffix_id: selectedPerson.suffix_id,
	          "api.Email.replace": {"values":{"0":{"email":selectedPerson.email}}},
	          "api.Phone.replace": {"values":{"0":{"phone":selectedPerson.phone}}}
	        })
	      );
	    };
  });

})(angular, CRM.$, CRM._);
