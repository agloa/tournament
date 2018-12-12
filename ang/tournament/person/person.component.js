'use strict';

// Register `person` component, along with its associated controller and template
(function(angular, $, _) {
  
  var appModule = angular.module('tournament');

  appModule.config(function($routeProvider) {
    $routeProvider.when('/tournament/person/:contact_id?', {
      controller: 'PersonController',
      templateUrl: '~/tournament/person.template.html',

      // If you need to look up data when opening the page, list it out under "resolve".
      resolve: {
        selectedPerson: function(crmApi, $route) {
          var contact_id = "user_contact_id";
          if ($route.current.params.contact_id > 0) contact_id = $route.current.params.contact_id;
          
          var fieldsToReturn = ["prefix_id","first_name", "middle_name", "last_name", "display_name", "suffix_id", "birth_date" , "gender_id" , "address_id"]
          
          return crmApi('Contact', 'getsingle', {id: contact_id, return:fieldsToReturn}).then(
            // Success
            function(result) { return result; },
            // Failure
            function () { CRM.alert(ts('No person record exists with an ID of %1', {1: person_id}),ts('Not Found'),'error'); }
          );
        },

        genders:  function(crmApi) { return crmApiOptionValues(crmApi, "gender"); },
        prefixes: function(crmApi) { return crmApiOptionValues(crmApi, "individual_prefix");},
        suffixes: function(crmApi) { return crmApiOptionValues(crmApi, "individual_suffix");},
      }
    });
  });

  appModule.controller('PersonController', function($scope, crmApi, crmStatus, crmUiHelp, selectedPerson, genders, prefixes, suffixes) {
    // The ts() and hs() functions help load strings for this module.
    var ts = $scope.ts = CRM.ts('tournament');
    var hs = $scope.hs = crmUiHelp({file: 'CRM/tournament/TournamentController'}); // See: templates/CRM/tournament/TournamentController.hlp

    $scope.selectedPerson = selectedPerson;
    $scope.genders = genders;
    $scope.prefixes = prefixes;
    $scope.suffixes = suffixes;

    $scope.save = function save() {
      return crmStatus(
        // Status messages. For defaults, just use "{}"
        {start: ts('Saving...'), success: ts('Saved')},
        // The save action. Note that crmApi() returns a promise.
        crmApi('Contact', 'create', {
          id: selectedPerson.id,
          first_name: selectedPerson.first_name,
          last_name: selectedPerson.last_name,
          middle_name: selectedPerson.middle_name,
          birth_date: selectedPerson.birth_date,
          gender_id: selectedPerson.gender_id,
          prefix_id: selectedPerson.prefix_id,
          suffix_id: selectedPerson.suffix_id
        })
      );
    };
  });

  function crmApiOptionValues(crmApi, option_group_id) {
    return crmApi('OptionValue', 'get', {
      "sequential": 1,
      "return": ["value","label"],
      "option_group_id": option_group_id
    }).then(function(result) {
      return result.values;
    });
  }
})(angular, CRM.$, CRM._);
