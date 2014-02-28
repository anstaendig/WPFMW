function flickrSearch()
{
    changeContent();
        var tag = document.getElementById("tag").value;
        var flickrFeed = "http://api.flickr.com/services/feeds/photos_public.gne?tags=" + tag + "&tagmode=any&format=json&jsoncallback=?";
        $.getJSON(flickrFeed, function (data) {

            var feedTitle = data.title;

            var htmlText = "";
            $.each(data.items, function (i, post) {
                //htmlText += "<div class='flickrgallery'>";
                htmlText += "<a href='" + post.media.m + "' class='fancybox-thumb' rel='flickr'><img class='thumbnail' src='" + post.media.m + "' /></a>";
            });

            /*$("#photos").html("<h3>" + feedTitle + "</h3>");*/
            $("#photos").html("<h3>Bilder mit \"" + tag + "\"</h3>");
            $("#photos").append(htmlText);
        });
}

function changeContent() {
    $("#photos").html("<img src='images/loader1.gif' id='loader'>");

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

function evalKeyForSubmit(event) {
    if (!event && window.event) {
        event = window.event;
    }
    if (event.which == 13 || event.which == 14)
    // ENTER oder RETURN gedrückt, also Suche starten
    {
        flickrSearch();
        return false;
    } else {
        return true;
    }
}