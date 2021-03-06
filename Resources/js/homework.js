$(document).ready(function() {
	$.ajax ({
		url: "../xml/homework.xml",
		dataType: "xml",
		success: function(data) {
			var i = 0;
			xmlDoc = $(data)
			xmlDoc.find('project').each(function() {
				var name = $(this).find('name').text();
				var description = $(this).find('description').text();
				var location = $(this).find('location').text();
				$('#homework').append('<div class="row"><div class="col-md-12"><h3>' + name + '</h3>' + '<p>' + description + '</p>' + '<a class="ui-button ui-widget ui-corner-all" href="' + location + '">View Project <span class="glyphicon glyphicon-chevron-right"></span></a></div></div>');
			})
		}
	});
});
