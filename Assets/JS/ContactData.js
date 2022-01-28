$(document).ready(function (){
  var table = $('#example1').DataTable({
    "ajax": {
        "url": "../../Controller/ShowAllContactController.php"
      },
      "columns" : [
          {"data":"ContactID"},
          {"data":"ContactName"},
          {"data":"ContactAddress"},
          {"data":"ContactPhone"},
          {"data":"ContactEmail"}
      ]
});


  
  $('#example1 tbody').on('click', 'tr', function () {
      var data = table.row( this ).data();
      alert( 'You clicked on '+data.ContactName+'\'s row' );
      $("#EditContactName").val(data.ContactName);
      $("#EditContactAddress").val(data.ContactAddress);
      $("#EditContactPhone").val(data.ContactPhone);
      $("#EditContactEmail").val(data.ContactEmail);
      $("#EditContactID").val(data.ContactID);
      $("#DeleteContactID").val(data.ContactID);
  });
});