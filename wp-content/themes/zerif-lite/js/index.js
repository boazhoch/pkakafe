/**
 * Created by boaz on 15/06/2015.
 */

var app = window.app || {};

app.links_arr = [];

jQuery("section").each(function(index, val){
    app.links_arr.push(jQuery(this).attr("id"));
});

jQuery(".page_item").each(function(index){
    jQuery(this).attr("data-href" , app.links_arr[index]);
});

jQuery(".navbar-brand").on("click", function (e) {
    if (window.location.search != "" || window.location.hash != "") {

    } else {
        e.preventDefault();
        e.stopPropagation();

        jQuery('html, body').stop().animate({
            'scrollTop': jQuery("html").offset().top
        }, 500, 'swing', function () {
        });
    }
});

jQuery('.page_item').on('click', function (e) {
    e.preventDefault();
    e.stopPropagation();

    var $target =  jQuery(this).data("href");
    $target = "#"+$target;

    jQuery('html, body').stop().animate({
        'scrollTop': jQuery($target).offset().top - 50
    }, 500, 'swing', function () {
    });
});
