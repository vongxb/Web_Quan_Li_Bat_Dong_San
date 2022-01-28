$(document).ready(function(){
    var table = $('#example1').DataTable({
        'ajax':{
            'url' : '../../Controller/ShowAllNewImageController.php'
        },
        'columns' : [
            {'data':'NewImageID'},
            {'data':'NewImageLink'},
            {'data':'NewID'}         
        ]
    });
    $('#example1 tbody').on('click', 'tr', function () {
        var data = table.row( this ).data();
        alert( 'You clicked on '+data.NewImageID+'\'s row' );
        $("#EditNewImageLink").val(data.NewImageLink);
        $("#EditNewImageID").val(data.NewImageID);
        $("#EditNewID").val(data.NewID);
        $("#DeleteNewImageID").val(data.NewImageID);
    });
});
