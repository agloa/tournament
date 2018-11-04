(function(angular, $, _) {
  angular.module('tournament').config(function($routeProvider) {
      $routeProvider.when('/tournament/groups/:contact_id?', {
        controller: 'TournamentGroupsCtrl',
        templateUrl: '~/tournament/GroupsCtrl.html',

        // If you need to look up data when opening the page, list it out under "resolve".
        resolve: {
          groups: function(crmApi, $route) {
       	    return GetGroups(crmApi, $route.current.params.contact_id);
          }
	}
      });
    }
  );

  function GetGroups(crmApi, routeContactID) {
    var contact_id = "user_contact_id";
    if (routeContactID > 0) contact_id = routeContactID;
    params = {
      "sequential": 1,
      "return": ["contact_id","contact_id.display_name","group_id.id","group_id.group_type","group_id.title"],
      "status": "Added",
      "group_id.is_active": 1,
      "group_id.is_hidden": 0,
      "contact_id": contact_id
    };

    return crmApi('GroupContact', 'get', params).then(
      // Success
      function(result) { return result.values; },
      // Failure
      function () { CRM.alert(ts('No groups found for ID =%1', {1: contact_id}) ,ts('Not Found'),'error'); }
    );
  }

  // The controller uses *injection*. This default injects a few things:
  // $scope -- This is the set of variables shared between JS and HTML.
  // crmApi, crmStatus, crmUiHelp -- These are services provided by civicrm-core.
  angular.module('tournament').controller('TournamentGroupsCtrl', 
    function($scope, crmApi, crmStatus, crmUiHelp, groups) {
      // The ts() and hs() functions help load strings for this module.
      var ts = $scope.ts = CRM.ts('tournament');
      // See: templates/CRM/tournament/GroupsCtrl.hlp
      var hs = $scope.hs = crmUiHelp({file: 'CRM/tournament/GroupsCtrl'});  
	   
      // We have objects available in JS. We also want to reference it in HTML.
      $scope.groups = groups;
    });

})(angular, CRM.$, CRM._);
