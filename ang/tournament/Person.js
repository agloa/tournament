function getPerson(crmApi, person_id, fieldsToReturn) {
  return crmApi('Contact', 'getsingle', {id: person_id, return:fieldsToReturn})
  .then(
    // Success
    function(result) { return result; },
    // Failure
    function () { CRM.alert(ts('No person record exists with an ID of %1', {1: person_id}),ts('Not Found'),'error'); }
  );
};
