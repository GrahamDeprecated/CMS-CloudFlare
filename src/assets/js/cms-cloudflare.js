$(document).ready(function() {
    $.ajax({
        url: cmsCloudFlareURL,
        type: "GET",
        dataType: "html",
        timeout: 5000,
        success: function(data, status, xhr) {
            $('#data').fadeOut(200, function() {
                this.addClass('well');
                this.html(data);
                this.fadeIn(200);
            });
        },
        error: function(xhr, status, error) {
            $('#data').fadeOut(200, function() {
                this.html('<p class="lead">There was an error getting the data</p>');
                this.fadeIn(200);
            });
        }
    });
});
