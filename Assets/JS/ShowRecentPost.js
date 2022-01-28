$(document).ready(function(){
    $.ajax({
        'url': './Controller/ShowRecentPostController.php',
        'type': 'GET',
        success: function (data) {
            data= JSON.parse(data);
            data = data.data;
            data.forEach(dt => {
               $('#recentpost').append('<a href="News.php?id='+dt.NewID+'" style="color:white"><div class="row"><div class="col-sm-12"><div class="footer-border-bottom pb-2"><div class="row"><div class="col-3"><img src=".'+dt.NewImageLink+'" alt="thumb" class="img-fluid"/></div><div class="col-9"><h5 class="font-weight-600">'+dt.NewName+'</h5></div></div></div></div></div></a>');
            });
    
        },
        error: function (e) {
            console.log(e.message);
        }
    });
});