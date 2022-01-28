$(document).ready(function (){
    var table = $('#example1').DataTable({
      "ajax": {
          "url": "../../Controller/ShowAllNewController.php"
        },
        "columns" : [
            {"data":"NewID"},
            {"data":"NewName"},
            {"data":"NewContent"},
            {"data":"NewDatePost"},
            {"data":"NewCount"}
        ]
  });
  
  
    
    $('#example1 tbody').on('click', 'tr', function () {
        var data = table.row( this ).data();
        alert( 'You clicked on '+data.NewName+'\'s row' );
        $("#EditNewName").val(data.NewName);
        $("#EditNewContent").val(data.NewContent);
        $("#EditNewDatePost").val(data.NewDatePost);
        $("#EditNewCount").val(data.NewCount);
        $("#EditNewID").val(data.NewID);
        $("#DeleteNewID").val(data.NewID);
    });
  });