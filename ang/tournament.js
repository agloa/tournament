(function(angular, $, _) {
  angular.module('tournament', [ // module name
    'crmUi', 'crmUtil', 'ngRoute' // Declare a list of dependencies.
  ])
        // Makes lodash/underscore available in templates
        .run(function($rootScope) {
          $rootScope._ = _;
        })

        // Show/hide "loading" spinner between routes
        .run(function($rootScope) {
          $rootScope.$on('$routeChangeStart', function() {
            CRM.$('#crm-main-content-wrapper').block();
          });

          $rootScope.$on('$routeChangeSuccess', function() {
            CRM.$('#crm-main-content-wrapper').unblock();
          });

          $rootScope.$on('$routeChangeError', function() {
            CRM.$('#crm-main-content-wrapper').unblock();
          });

          // the first route that is loaded fires a $routeChangeSuccess event on
          // completing load, but it doesn't raise $routeChangeStart when it starts,
          // so we will just start the app with the spinner going
          CRM.$('#crm-main-content-wrapper').block();
        })
        ;
})(angular, CRM.$, CRM._); // <- What are these
