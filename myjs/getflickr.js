getFlickr=
{   
	html:[],
    
	leech:function(tag, func)
    {
		getFlickr.func = func;
		getFlickr.tag = tag;
		
		var node = document.createElement('script');
		node.src = 'http://flickr.com/services/feeds/photos_public.gne?tags=' + tag + '&format=json';
		document.getElementsByTagName('head')[0].appendChild(node);
	},
    
	returnList:function(feed)
    {
		var pix = feed.items;
        
		getFlickr.html[getFlickr.tag] = '';
        
		for( var i=0; i<pix.length; i++)
        {
            getFlickr.html[getFlickr.tag] += '<img src="'+pix[i].media.m +'" alt="'+pix[i].title+'" />';
		}
    
		if( getFlickr.func !== undefined )
        {
 			 eval( getFlickr.func+'()' ); // Execute JavaScript code
		}
	},
}

function jsonFlickrFeed(feed)
{
	getFlickr.returnList(feed);
}