$(document).ready(function() {
    $.ajax({
        url: cmsCloudFlareURL,
        type: "GET",
        dataType: "html",
        timeout: 5000,
        success: function(data, status, xhr) {
            var data = $('#data');
            data.fadeOut(200, function() {
                data.addClass('well');
                data.html(data);
                data.fadeIn(200);
            });
        },
        error: function(xhr, status, error) {
            var data = $('#data');
            data.fadeOut(200, function() {
                data.html('<p class="lead">There was an error getting the data</p>');
                data.fadeIn(200);
            });
        }
    });
});
