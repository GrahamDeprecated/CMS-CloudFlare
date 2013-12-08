$(document).ready(function() {
    var cmsCloudFlareRequest = $.get(cmsCloudFlareURL);
    cmsCloudFlareRequest.success(function(result) {
        $('#data').fadeOut(200, function() {
            this.addClass('well');
            this.html(result);
            this.fadeIn(200)
        });
        
    });
    cmsCloudFlareRequest.error(function(jqXHR, textStatus, errorThrown) {
        $('#data').fadeOut(200, function() {
            this.html('<p class="lead">There was an error getting the data</p>');
            this.fadeIn(200)
        });
    });
});
