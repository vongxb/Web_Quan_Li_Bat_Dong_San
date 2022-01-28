$(document).ready(function(){
    var table = $('#example2').DataTable({
        'ajax':{
            'url' : '../../Controller/ShowAllAccountController.php'
        },
        'columns' : [
            {'data':'Username'},
            {'data':'Password'},
            {'data':'Name'},
            {'data':'BirthDay'},
            {'data':'Gender'},
            {'data':'Address'},
            {'data':'PhoneNumber'},
            {'data':'Email'},
            {'data':'IDGroup'}
        ]
    });
    $('#example2 tbody').on('click', 'tr', function () {
        var data = table.row( this ).data();
        alert( 'You clicked on '+data.Username+'\'s row' );
        $('#editusername').val(data.Username);
        $('#deleteusername').val(data.Username);
        $('#editpassword').val(data.Password);
        $('#editname').val(data.Name);
        $('#editbirthday').val(data.BirthDay);
        $("#editgender").val(data.Gender);
        $("#editaddress").val(data.Address);
        $("#editemail").val(data.Email);
        $("#editphonenumber").val(data.PhoneNumber);
        $("#editidgroup").val(data.IDGroup);
    });
});