(function(angular, $, _) {

  angular.module('tournament').config(function($routeProvider) {
      $routeProvider.when('/tournament/billingOrganizations/:contact_id?', {
        controller: 'TournamentBillingOrganizationsCtrl',
        templateUrl: '~/tournament/BillingOrganizationsCtrl.html',

        // If you need to look up data when opening the page, list it out under "resolve".
        resolve: {
          billingOrganizations: function(crmApi, $route) {
       	    return GetBillingOrganizations(crmApi, $route.current.params.contact_id);
          }
	}
      });
    }
  );

  function GetBillingOrganizations(crmApi, routeContactID) {
    var relationship_type_id = billingContactRelationshipTypeID(crmApi);
    var contact_id = "user_contact_id";
    if (routeContactID > 0) contact_id = routeContactID;

    var relationship = { contact_id_a: contact_id, relationship_type_id: relationship_type_id, is_active: 1, is_permission_a_b: 1
                         ,"return": ["contact_id_b.id","contact_id_b.display_name"]};
    return crmApi('Relationship', 'get', relationship).then(
      // Success
      function(result) { return result.values; },
      // Failure
      function () { CRM.alert(ts('No billing organizations found for ID =%1', {1: routeContactID}) ,ts('Not Found'),'error'); }
    );
  }

  function GetOrganizationName(crmApi, contactID) {
    params = { "id": contactID, "return": ["organization_name"],"sequential": 1};
    return crmApi('Contact', 'get', params).then(
      // Success
      function(result) { return result.values; },
      // Failure
      function () { CRM.alert(ts('No organizationfound for ID =%1', {1: contactID}) ,ts('Not Found'),'error'); }
    );
  }

  function billingContactRelationshipTypeID(crmApi) {
    crmApi('RelationshipType', 'get', {
      "sequential": 1,
      "return": ["id"],
      "is_active": 1,
      "name_a_b": {"LIKE":"%Billing Contact%"},
      "contact_type_a": "Individual",
      "contact_type_b": "Organization"
    }).then(
      // Success
      function(result) {  return result.id; },
      // Failure
      function () { CRM.alert(ts('No relationship type found LIKE %Billing Contact%'),ts('Not Found'),'error'); }
    );
  }
  
  // The controller uses *injection*. This default injects a few things:
  // $scope -- This is the set of variables shared between JS and HTML.
  // crmApi, crmStatus, crmUiHelp -- These are services provided by civicrm-core.
  angular.module('tournament').controller('TournamentBillingOrganizationsCtrl', 
    function($scope, crmApi, crmStatus, crmUiHelp, billingOrganizations) {
      // The ts() and hs() functions help load strings for this module.
      var ts = $scope.ts = CRM.ts('tournament');
      // See: templates/CRM/tournament/BillingOrganizationsCtrl.hlp
      var hs = $scope.hs = crmUiHelp({file: 'CRM/tournament/BillingOrganizationsCtrl'});  
	   
      // We have billingOrganizations available in JS. We also want to reference it in HTML.
      $scope.billingOrganizations = billingOrganizations;
    });

})(angular, CRM.$, CRM._);
