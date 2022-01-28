$(document).ready(function() {
    var table = $('#example1').DataTable();
     
    $('#example1 tbody').on('click', 'tr', function () {
        var data = table.row( this ).data();
        alert( 'You clicked on '+data[0]+'\'s row' );
    } );
} );