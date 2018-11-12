(function(angular, $, _) {

  angular.module('tournament').config(function($routeProvider) {
      $routeProvider.when('/tournament', {
        controller: 'TournamentEditCtrl',
        templateUrl: '~/tournament/EditCtrl.html',

        // If you need to look up data when opening the page, list it out under "resolve".
        resolve: {
          myContact: function(crmApi) {        	    
            return crmApi('Contact', 'getsingle', {
              id: 'user_contact_id',
              return: ["prefix_id"
                       ,"first_name"
                       , "middle_name"
                       , "last_name"
                       , "suffix_id"
                       , "birth_date"
                       , "gender_id"
                       ,"email"
                       ,"phone"]
                , "api.Relationship.get": {"relationship_type_id":12,"return":["cid","display_name"]}
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
	function($scope, crmApi, crmStatus, crmUiHelp, myContact, genders, prefixes, suffixes) {
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
	
	    $scope.save = function save() {
	        
	      return crmStatus(
	        // Status messages. For defaults, just use "{}"
	        {start: ts('Saving...'), success: ts('Saved')},
	        // The save action. Note that crmApi() returns a promise.

	          //"api.Address.replace": {"values":{"0":{"street_address": myContact.street_address}}},
	        crmApi('Contact', 'create', {
	          id: myContact.id,
	          first_name: myContact.first_name,
	          last_name: myContact.last_name,
	          middle_name: myContact.middle_name,
	          birth_date: myContact.birth_date,
	          gender_id: myContact.gender_id,
	          prefix_id: myContact.prefix_id,
	          suffix_id: myContact.suffix_id,
	          "api.Email.replace": {"values":{"0":{"email":myContact.email}}},
	          "api.Phone.replace": {"values":{"0":{"phone":myContact.phone}}}
	        })
	      );
	    };
  });

})(angular, CRM.$, CRM._);
