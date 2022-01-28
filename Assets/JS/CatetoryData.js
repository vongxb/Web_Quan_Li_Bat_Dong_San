$(document).ready(function(){
    $('#example1').DataTable({
        'ajax':{
            'url' : '../../Controller/ShowAllCatetoryController.php'
        },
        'columns' : [
            {'data':'CateID'},
            {'data':'CateName'},
            {'data':'CateAddress'},
            {'data':'CateContent'},
            {'data':'CateRent'},
            {'data':'CateStatus'},
            {'data':'GroupCateID'},
            {'data':'ContactID'}
        ]
    });
    $('#example1 tbody').on('click', 'tr', function () {
        var data = table.row( this ).data();
        alert( 'You clicked on '+data.CateName+'\'s row' );
        $("#EditCateName").val(data.CateName);
        $("#EditCateID").val(data.CateID);
        $("#deletecateid").val(data.CateID);
    });
});