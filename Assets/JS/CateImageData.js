$(document).ready(function(){
    var table = $('#example1').DataTable({
        'ajax':{
            'url' : '../../Controller/ShowCateImageDataController.php'
        },
        'columns' : [
            {'data':'CateImageID'},
            {'data':'CateImageLink'},
            {'data':'CateID'}         
        ]
    });
    $('#example1 tbody').on('click', 'tr', function () {
        var data = table.row( this ).data();
        alert( 'You clicked on '+data.CateImageID+'\'s row' );
        $("#EditCateImageLink").val(data.CateImageLink);
        $("#EditCateImageID").val(data.CateImageID);
        $("#EditCateID").val(data.CateID);
        $("#DeleteCateImageID").val(data.CateImageID);
    });
});
