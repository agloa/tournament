(function(angular, $, _) {

  angular.module('tournament').config(function($routeProvider) {
    $routeProvider.when('/tournament/user/:contact_id?', {
      controller: 'TournamentUserCtrl',
      templateUrl: '~/tournament/UserCtrl.html',

      // If you need to look up data when opening the page, list it out under "resolve".
      resolve: {
        selectedUser: function(crmApi, $route) {
          var contact_id = "user_contact_id";
          if ($route.current.params.contact_id > 0) contact_id = $route.current.params.contact_id;
          return getPerson(crmApi, contact_id, ["first_name, display_name"]);
        }
      }
    });
  });
  
  // The controller uses *injection*. This default injects a few things:
  // $scope -- This is the set of variables shared between JS and HTML.
  // crmApi, crmStatus, crmUiHelp -- These are services provided by civicrm-core.
  // selectedUser -- The current contact, defined above in config().
  angular.module('tournament').controller('TournamentUserCtrl', 
    function($scope, crmApi, crmStatus, crmUiHelp, selectedUser) {
     // The ts() and hs() functions help load strings for this module.
     var ts = $scope.ts = CRM.ts('tournament');
     // See: templates/CRM/tournament/UserCtrl.hlp
     var hs = $scope.hs = crmUiHelp({file: 'CRM/tournament/UserCtrl'});  
	   
     // We have selectedUser available in JS. We also want to reference it in HTML.
     $scope.selectedUser = selectedUser;
    }
  );

})
(angular, CRM.$, CRM._);
