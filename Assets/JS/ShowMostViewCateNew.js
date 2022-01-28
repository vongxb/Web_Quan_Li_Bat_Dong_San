$(document).ready(function(){
    $.ajax({
        'url': './Controller/ShowMostViewNewController.php',
        'type': 'GET',
        success: function (data) {
            data= JSON.parse(data);
            data = data.data;
            data.forEach(dt => {
                var s = dt.NewContent.substring(0,50);
               $('#mostview').append('<a href="News.php?id='+dt.NewID+'" style="color:white"><div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between" ><div class="pr-3"><h5>'+dt.NewName+'</h5><div class="fs-12"><span class="mr-2">Photo </span>'+dt.NewDatePost+'</div></div><div class="rotate-img"><img src=".'+dt.NewImageLink+'" alt="thumb" class="img-fluid img-lg"/></div></div></a>');
            });
    
        },
        error: function (e) {
            console.log(e.message);
        }
    });
});