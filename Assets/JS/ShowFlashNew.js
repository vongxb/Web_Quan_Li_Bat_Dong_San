$(document).ready(function(){
    $.ajax({
        'url': './Controller/ShowFlashNewController.php',
        'type': 'GET',
        success: function (data) {
            data= JSON.parse(data);
            data = data.data;
            data.forEach(dt => {
                var s = dt.NewContent.substring(0,30);
               $('#flashnew').append('<a href="News.php?id='+dt.NewID+'" style="color:Black"><div class="row"><div class="col-sm-4 grid-margin"><div class="position-relative"><div class="rotate-img"><img src=".'+dt.NewImageLink+'" alt="thumb" class="img-fluid"/></div> <div class="badge-positioned"><span class="badge badge-danger font-weight-bold">Flash news</span></div></div></div><div class="col-sm-8  grid-margin"><h2 class="mb-2 font-weight-600">'+dt.NewName+'</h2><div class="fs-13 mb-2"><span class="mr-2">Photo </span>'+dt.NewDatePost+'</div><p class="mb-0">'+s+'</p></div></div></a>');
            });
    
        },
        error: function (e) {
            console.log(e.message);
        }
    });
});