$(function () {
	var access_key  = getUrlParameter('token');
	$.getJSON(REMOTE_APPLICATION_URL + '/api/v2/statistics.php', {token:access_key}, function(data) {                
		$('#widget-views').html("<span class='animate-number' data-animation-duration='1000'>" + data['totalViews'] + "</span>");
		$('#widget-clicks').html("<span class='animate-number' data-animation-duration='1000'>" + data['totalClicks'] + "</span>");
		$('#widget-refer').html("<span class='animate-number' data-animation-duration='1000'>" + data['totalRefers'] + "</span>");
		$('#widget-product').html("<span class='animate-number' data-animation-duration='1000'>" + data['totalUploadedProducts'] + "</span>");
	});
});