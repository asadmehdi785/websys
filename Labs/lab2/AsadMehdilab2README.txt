Asad Mehdi
Lab 2

Part 0 (Setup):
I am currently using Sublime Text, and also have Google Chrome, so I'm all set here.

Part 1 (Semantic HTML):
I used a <h1> tag for the main heading, which I think was appropriate since that is basically the heading explaining what the document is about.

I created an ordered list for the whole list of my six favorite songs, and for each song, I created an unordered list that contained all the relevant information to that song. The reason for the ordered list was to put my six favorite songs in a concrete order, and the reasoning for the unordered list was to put all the information regarding the song inside its own list. This made it so that each songs' information can be found succintly within their own place.

Part 2 (XML):
I called my root element "favorite_songs", since the XML file was to show my six favorite songs. For each song, I put its data within <song></song> tags, which makes sense beause the data described a single song. I used <name>, <artist>, <album>, <date>, <genre> and <cover> to denote each respective aspect of the song, and I think the tag names make sense.

Part 3 (HTML and CSS):
For this part, I had a <div> with a class of "table", which is essentially a wrapper for the entire table. Then, I included a <div> with a class of "row", and put the necessary information for each song in each "row". For each part of the information for each song, I used a <div> with a class of "cell" to contain that information. So essentially, each row of the table will contain all the information for each song. I felt that this made semantic sense since all the data for each song is kept in its own <div>. I used <p> tags to hold the actual information for each song, within each "cell".

Part 4 (XML and CSS):
I edited my XML to include a <root_element> that included the xmlns property I needed to make links and images work. I used <html:a></html:a> for links and <html:img></html:img> for images in the XML. Otherwise, I made just minor changes in the layout from the XML from part 2, and overall the structure is the same.