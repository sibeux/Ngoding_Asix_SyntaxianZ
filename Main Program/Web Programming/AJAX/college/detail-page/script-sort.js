var milih = document.getElementById("milih");
var data = document.getElementById("data");

$(document).ready(function() {

    var flag = 0;
    $.ajax({
        type: "GET",
        url: "data-sort.php",
        data: {
            'offset': 0,
            'limit': 9
        },
        success: function(data) {
            $("body .row").append(data);
            flag += 9;
        }
    });

    $(window).scroll(function() {

        if ($(window).scrollTop() + $(window).height() > $(document).height() - 300) {
            $.ajax({
                type: "GET",
                url: "data-sort.php",
                data: {
                    'offset': flag,
                    'limit': 9
                },
                success: function(data) {
                    $("body .row").append(data);
                    flag += 9;
                }
            });
        }
    })
});

milih.addEventListener("change",function () {
    // inisiasi objek ajax
    var ObjAjax = new XMLHttpRequest();
    
    // cek kesiapan ajax
    ObjAjax.onreadystatechange = function () {
        if (ObjAjax.readyState == 4 && ObjAjax.status == 200) {
            // ingin ngapain
            data.innerHTML = ObjAjax.responseText;
        }
    }

    ObjAjax.open("get","./data-sort.php?milih="+milih.value,true);
    ObjAjax.send();
}) 