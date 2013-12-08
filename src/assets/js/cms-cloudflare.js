$(document).ready(function() {
    var cmsCloudFlareRequest = $.get(cmsCloudFlareURL);
    cmsCloudFlareRequest.success(function(result) {
        $('#data').addClass('well');
        $('#data').html(result);
    });
    cmsCloudFlareRequest.error(function(jqXHR, textStatus, errorThrown) {
        $('#data').html('<p class="lead">There was an error getting the data</p>');
    });
});
