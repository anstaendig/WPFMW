$(document).ready(function () {
    /* Apply fancybox to multiple items */
    $(".fancybox").fancybox({
        openEffect: 'none',
        closeEffect: 'none'
    });

    $(".fancybox-thumb").fancybox({
        prevEffect: 'none',
        nextEffect: 'none',
        helpers: {
            title: {
                type: 'outside'
            },
            thumbs: {
                width: 50,
                height: 50
            }
        }
    });
});

function changeView(view) {
    
    if ( view === "user1" )
    {
        document.getElementById("gallery_kuenstler").className = "vis";        
        document.getElementById("logout").className = "vis";
        document.getElementById("login").className = "unvis";
    }
    
    else if (view === "user2"  )
    {
        document.getElementById("gallery_flickr").className = "vis";    
        document.getElementById("logout").className = "vis";
        document.getElementById("login").className = "unvis";
    }
    
    else if ( view === "logout" )
    {
        document.getElementById("gallery_kuenstler").className = "unvis";   
        document.getElementById("gallery_flickr").className = "unvis";    
        document.getElementById("logout").className = "unvis";
        document.getElementById("login").className = "vis";
    }    
    
    else 
    {
        alert("Something went terribly wrong!");
    }
}