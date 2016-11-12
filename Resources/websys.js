$(document).ready(function() {
	$.ajax ({
		url: "Resources/classdata.xml",
		dataType: "xml",
		success: function(data) {
			var i = 0;
			xmlDoc = $(data)
			xmlDoc.find('project').each(function() {
				var name = $(this).find('name').text();
				var description = $(this).find('description').text();
				var location = $(this).find('location').text();
				if (i > 8)
				{
					$('#homework').append('<li><a href=' + location + '>' + name + '</a></li>');
					$('#homework > li:last').append('<p>' + description +'</p>');
				}
				else
				{
					$('#labs').append('<li><a href=' + location + '>' + name + '</a></li>');
					$('#labs > li:last').append('<p>' + description +'</p>');
				}
				
				i++;
				
			})
		}
	});
});