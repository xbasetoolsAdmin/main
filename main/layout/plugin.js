 function ajaxinfo() {
                $.ajax({
                    type: 'Post',
                    url: 'divPage2.html',
                    timeout: 10000,

                    success: function(data) {
                        if (data != '01') {
                            var data = JSON.parse(data);
                            for (var prop in data) {
                                $("#" + prop).html(data[prop]).show();
                            }
                        } else {
                            window.location = "logout.html";
                        }
                    }
                });

            }
            setInterval(function() {
                ajaxinfo()
            }, 3000);

            ajaxinfo();

	   pageDiv(2,'Add Balance - OdinShop','',1);
    .tooltip('show');
     //console.log("show");
