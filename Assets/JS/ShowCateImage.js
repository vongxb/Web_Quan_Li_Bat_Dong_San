$(document).ready(function () {
        $.ajax({
            'url': './Controller/ShowAllCateImageController.php',
            'type': 'GET',
            success: function (data) {
                // $('#ads').append('<p>Hello</p>');
                data= JSON.parse(data);
                data = data.data;
                data.forEach(dt => {
                    if(dt.CateStatus =='1')
                    {
                        $('#ads').append('<div class="col-md-4"><div class="card rounded"><div class="card-image"><span class="card-notify-badge">'+dt.GroupCateName+'</span><span class="card-notify-year">'+dt.CateContent+'</span><img class="img-fluid" width="500" height="370" src=".'+dt.CateImageLink+'" alt="Alternate Text" /></div><div class="card-image-overlay m-auto"><span class="card-detail-badge">Còn</span><span class="card-detail-badge">Giá: '+dt.CateRent+' VND</span></div><div class="card-body text-center"><div class="ad-title m-auto"><h5>'+dt.CateName+'</h5><span>Địa chỉ: '+dt.CateAddress+'</span></div><a class="ad-btn" href="CategoryDetail.php?id='+dt.CateID +'">View</a><a class="ad-btn" href="Lienhe.php?id='+dt.ContactID +'" name="ViewContactID">Liên hệ</a></div></div></div>'); 
                    }
                    else{
                        $('#ads').append('<div class="col-md-4"><div class="card rounded"><div class="card-image"><span class="card-notify-badge">'+dt.GroupCateName+'</span><span class="card-notify-year">'+dt.CateContent+'</span><img class="img-fluid" width="500" height="370" src=".'+dt.CateImageLink+'" alt="Alternate Text" /></div><div class="card-image-overlay m-auto"><span class="card-detail-badge">Đang giao dịch</span><span class="card-detail-badge">Giá: '+dt.CateRent+' VND</span></div><div class="card-body text-center"><div class="ad-title m-auto"><h5>'+dt.CateName+'</h5><span>Địa chỉ: '+dt.CateAddress+'</span></div><a class="ad-btn" href="CategoryDetail.php?id='+dt.CateID +'">View</a><a class="ad-btn" href="Lienhe.php?id='+dt.ContactID +'" name="ViewContactID">Liên hệ</a></div></div></div>'); 
                    }
                    
                });

            },
            error: function (e) {
                console.log(e.message);
            }
        });



});