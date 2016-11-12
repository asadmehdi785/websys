Asad Mehdi
Lab 5 - Front-end Optimization

Part 0
 - My lab 5 folder is being served by Apache.
 - I will be using Chrome developer tools for this lab.

Part 1
 - Before making any changes to the lab5.html file, the page currently takes about ~1457ms to load, according to the Timeline tab in Chrome developer tools.
 - After making the event delegation change, the page took around ~1267ms to load.

Part 2
 - I made the following improvements:

 1. When the "Show All" button is clicked, I now use the "children()" jQuery method to select and show all the <li> elements, rather than going through each <li> element individually and showing them. The children() method only goes to the immediate children, so it is more efficient than other methods of selecting descendant elements in jQuery.

 2. In the for loop that appends 5000 additional <li> elements, instead of appending each <li> individually, I built up a large string containing all the <li> elements first, and then appended the large string all at once. This significantly reduced the amount of time it took for the page to load, from around ~1300ms on average to about ~622ms.

 3. I moved the CSS code that creates the background to the top, inside of the <head> tags. I also moved the JavaScript code down to the bottom, below the </body> tag.

 4. I removed the background image and instead used the "background-color" property to have a light blue coloring in the background, which essentially does the same thing as the background image, but is more efficient since we don't have to load an image and put it on the page.

 5. I minified both the CSS and JavaScript code, so as to reduce file sizes.

 After all the above improvements, the page took an average of ~575ms to load.

 NOTE: For the JavaScript code, I included the more readable code in comments, and the minified is what is actually being executed.

 Sources:
 jQuery documentation: http://api.jquery.com/
 Fastest method for selecting descendant elements: http://stackoverflow.com/questions/3177763/what-is-the-fastest-method-for-selecting-descendant-elements-in-jquery

