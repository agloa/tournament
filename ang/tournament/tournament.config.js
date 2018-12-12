(function(angular, $, _) {
  var appModule = angular.module('tournament');

  appModule.config(function($routeProvider) {
    $routeProvider.when('/tournament', {
      controller: 'TournamentController',
      templateUrl: '~/tournament/TournamentController.html',

      // If you need to look up data when opening the page, list it out under "resolve".
      resolve: {
        currentUser: function(crmApi) {
          return crmApi('Contact', 'getsingle', {
            id: 'user_contact_id',
            return: ['first_name', 'last_name', 'display_name', 'sort_name', 'modified_date']
          });
        }
      }
    }).otherwise('/tournament');
  });

  // The controller uses *injection*. This default injects a few things:
  //   $scope -- This is the set of variables shared between JS and HTML.
  //   crmApi, crmStatus, crmUiHelp -- These are services provided by civicrm-core.
  //   currentUser -- The current contact, defined above in config().
  appModule.controller('TournamentController', function($scope, crmApi, crmStatus, crmUiHelp, currentUser) {
    // The ts() and hs() functions help load strings for this module.
    var ts = $scope.ts = CRM.ts('tournament');
    var hs = $scope.hs = crmUiHelp({file: 'CRM/tournament/TournamentController'}); // See: templates/CRM/tournament/TournamentController.hlp

    // We have currentUser available in JS. We also want to reference it in HTML.
    $scope.currentUser = currentUser;

    // Open a form in a popup - returns jquery object with crmSnippet, dialog, and ajaxForm initialized
    $scope.showPopup = function showPopup() {
      CRM.loadForm(CRM.url('civicrm/a/#/tournament/person/' + currentUser.contact_id));
    }
  });

})(angular, CRM.$, CRM._);
