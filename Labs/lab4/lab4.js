// Function to append information into the existing lab4.html document
// "place" is the current song position we are at (ex: first, second, etc.)
// "v" is the current song we are looking at
function append(place, v)
{
	$("#" + place + " div:nth-child(1)").append("<p class='title'>" + v.name + "</p>");
	$("#" + place + " div:nth-child(2)").append("<p class='artist'><a href='" + v.artist_site + "'>" + v.artist + "</a></p>");
	$("#" + place + " div:nth-child(3)").append("<p class='album'><a href='" + v.album_link + "'>" + v.album + "</a></p>");
	$("#" + place + " div:nth-child(4)").append("<img class='cover' src='" + v.cover + "' alt=''/>");
	$("#" + place + " div:nth-child(5)").append("<p class='release'>" + v.date + "</p>");
	$("#" + place + " div:nth-child(6)").append("<ul class='genre'><li>" + v.genre + "</li></ul>");
}

$(document).ready(function() {
	// When user clicks on the CD image, the get request will be done
	$("#site").click(function() {
		$.getJSON("lab4.json", function(data) {
			$.each(data, function(prop, value) {
				var i = 1;
				// Go through each song, and call the append function based on what song position we are on
				$.each(value, function(k, v) {
					if (i == 1)
					{
						var place = "first";
						append(place, v);
					}
					else if (i == 2)
					{
						var place = "second";
						append(place, v);
					}
					else if (i == 3)
					{
						var place = "third";
						append(place, v);
					}
					else if (i == 4)
					{
						var place = "fourth";
						append(place, v);
					}
					else if (i == 5)
					{
						var place = "fifth";
						append(place, v);
					}
					else if (i == 6)
					{
						var place = "sixth";
						append(place, v);
					}
					i++;
				})
			})
		})
	})	
})