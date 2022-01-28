$(document).ready(function(){
    $.ajax({
        'url': './Controller/ShowMainCateNewController.php',
        'type': 'GET',
        success: function (data) {
            data= JSON.parse(data);
            data = data.data;
            data.forEach(dt => {
                var s = dt.NewContent.substring(0,50);
               $('#mainnew').append('<a href="News.php?id='+dt.NewID+'" style="font-weight:bold;"><div class="position-relative"><img src=".'+dt.NewImageLink+'" alt="banner" class="img-fluid" style = "width:1450px; height:520px;"/><div class="banner-content"><div class="badge badge-danger fs-12 font-weight-bold mb-3">Flash news</div> <br><h1 class="mb-0 bg-danger" style="color:white;" >'+dt.NewName+'</h1><h1 class="mb-2 bg-danger" style="color:white;">'+s+'</h1><div class="fs-12 bg-danger" style="color:white;"><span class="mr- 2bg-danger" style="color:white;">Photo </span>'+dt.NewDatePost+'</div></div></div></a>');
            });
    
        },
        error: function (e) {
            console.log(e.message);
        }
    });
});