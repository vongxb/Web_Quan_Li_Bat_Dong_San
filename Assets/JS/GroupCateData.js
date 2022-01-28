$(document).ready(function () {
    var table = $('#example1').DataTable({
        "ajax": {
            "url": "../../Controller/ShowAllGroupCateController.php"
          },
          "columns" : [
              {"data":"GroupCateID"},
              {"data":"GroupCateName"}
          ]
    });

   
      
      $('#example1 tbody').on('click', 'tr', function () {
          var data = table.row( this ).data();
          alert( 'You clicked on '+data.GroupCateName+'\'s row' );
          $("#EditGroupCateName").val(data.GroupCateName);
          $("#EditGroupCateID").val(data.GroupCateID);
          $("#DeleteGroupCateName").val(data.GroupCateName);
      });
});