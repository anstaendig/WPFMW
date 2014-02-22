function changeContent() {
    $("#photos").html("<img src='images/loader1.gif'>");

    var pix = document.getElementById("photos");
    if (pix.children.length == 1) {
        var txt = document.getElementById("txt");
        txt.className = "resulttxt";
        var msg = "Ihre Ergebnisse: ";
        var rd_Start = 0;
        var rd_Laenge = txt.firstChild.nodeValue.length;
        txt.firstChild.replaceData(rd_Start, rd_Laenge, msg);
    } else {
        /*alert("Es ist ein Fehler aufgetreten.");*/
    }
}

function populate() {
    var tag = document.getElementById('tag').value;
    document.getElementById('photos').innerHTML = getFlickr.html[tag].replace(/_m\.jpg/g, '_s.jpg');
    return false;
}

function activate() { /*funktioniert noch  nicht*/
    var logout = document.getElementById("logout");
    if (logout) {
        logout.className = "active";
    }
}
