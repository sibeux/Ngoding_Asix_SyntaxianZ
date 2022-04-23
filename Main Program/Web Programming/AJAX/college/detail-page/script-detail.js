var film_id = document.getElementById("film_id");
var data = document.getElementById("data");

film_id.addEventListener("click",function () {
    // inisiasi objek ajax
    var ObjAjax = new XMLHttpRequest();
    
    // cek kesiapan ajax
    ObjAjax.onreadystatechange = function () {
        if (ObjAjax.readyState == 4 && ObjAjax.status == 200) {
            // ingin ngapain
            data.innerHTML = ObjAjax.responseText;
        }
    }

    ObjAjax.open("get","./data-detail.php?film_id="+film_id.value,true);
    ObjAjax.send();
}) 