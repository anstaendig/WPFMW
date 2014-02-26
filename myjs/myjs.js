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
