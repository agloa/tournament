(function(angular, $, _) {

  angular.module('tournament').config(function($routeProvider) {
      $routeProvider.when('/tournament/billingOrganization/:contact_id', {
        controller: 'TournamentBillingOrganizationCtrl',
        templateUrl: '~/tournament/BillingOrganizationCtrl.html',

        // If you need to look up data when opening the page, list it out under "resolve".
        resolve: {
          selectedContact: function(crmApi, $route) {
            contact_id = $route.current.params.contact_id;
            params = {  id: contact_id, "return": ["organization_name","phone","email"] };
       	    return crmApi('Contact', 'getsingle', params).then(
                // Success
                function(result) { return result; },
                // Failure
                function () { CRM.alert(ts('No contact record exists with an ID of %1', {1: $route.current.params.contact_id}),ts('Not Found'),'error'); }
	     );
          },

	}
      });
    }
  );
  
  // The controller uses *injection*. This default injects a few things:
  // $scope -- This is the set of variables shared between JS and HTML.
  // crmApi, crmStatus, crmUiHelp -- These are services provided by civicrm-core.
  // selectedContact -- The current contact, defined above in config().
  angular.module('tournament').controller('TournamentBillingOrganizationCtrl', 
    function($scope, crmApi, crmStatus, crmUiHelp, selectedContact) {
      // The ts() and hs() functions help load strings for this module.
      var ts = $scope.ts = CRM.ts('tournament');
      // See: templates/CRM/tournament/BillingOrganizationCtrl.hlp
      var hs = $scope.hs = crmUiHelp({file: 'CRM/tournament/BillingOrganizationCtrl'});  
	   
      // We have selectedContact available in JS. We also want to reference it in HTML.
      $scope.selectedContact = selectedContact;
	
      $scope.save = function save() {	        
        params = { id: selectedContact.id, organization_name: selectedContact.organization_name
                   , "api.Email.replace": {"values":{"0":{"email":selectedContact.email}}}
                   , "api.Phone.replace": {"values":{"0":{"phone":selectedContact.phone}}}};
        // The save action. Note that crmApi() returns a promise.
        return crmStatus(
          // Status messages. For defaults, just use "{}"
	  {start: ts('Saving...'), success: ts('Saved')},

          crmApi('Contact', 'create', params)
        );
      };
    });

})(angular, CRM.$, CRM._);
