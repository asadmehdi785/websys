// USED FOR PART 1: Function takes in an HTML DOM element as well as an integer that holds the current 
// "depth" in the HTML DOM that we are at. For example, a depth of 0 would mean we are at the root 
// element (<html>),a depth of 1 would mean we are one more step inside, for example the <head> element.
//
// The function returns an "output", which will hold all the names of the elements encountered so 
// far preceded by a number of dashes denoting its depth. For example, 0 dashes means a depth of 0, 
// 1 dash means a depth of 1, etc.
function getDepth(element, depth)
{
	// Initliazing our output to just be an empty string at first
	var output = "";

	// Retrieving all the children of the element we are looking at
	var children = element.childNodes;

	// If we are looking at the HTML element, we will treat it as a special case
	if (element.nodeName == "HTML")
	{
		output += element.nodeName + "\n";
	}
	// Adding event listeners for click events to all the elements. Click on an element will output,
	// via an alert box, its name preceded by its depth (in dashes), followed by its parent element,
	// and so on until it outputs the root element (<html>).
	element.addEventListener("click", function()
	{
		var text = "";
		var level = "-".repeat(depth);
		text += level + element.nodeName;
		window.alert(text);
	});

	// Going through each child element one by one
	for (var i = 0; i < children.length; i++)
	{	
		// Skipping all text nodes
		if (children[i].nodeType != 3)
		{
			// Creating a dash, using depth+1 here because just depth returns the incorrect number
			var dash = "-".repeat(depth+1);

			// Adding on the dash and the name of the child, plus a newline character
			output += dash + children[i].nodeName + "\n";

			// Recursively calling getDepth with the element we are looking at, plus its depth
			output += getDepth(children[i], depth+1);
		}
	}

	// Returning the output string
	return output;
}

// Function changes the background color of the element it is referring to to gray and moves the 
// entire element 10px to the right
function mouseOver()
{
	this.style.backgroundColor = "gray";
	this.style.right = '0px';
	this.style.left = '10px';
}

// Function changes the background color of the element it is referring to to white and moves the 
// entire element 10px to the left
function mouseOut()
{
	this.style.backgroundColor = "white";
	this.style.left = '0px';
	this.style.right = '10px';
}

// Code will run after page has fully loaded
window.onload = function() {
	// PART 1: Calling our getDepth function with the root element and a starting depth of 0
	document.getElementById("info").innerHTML = getDepth(document.documentElement, 0);

	// PART 2: Selecting all elements with a class name of "quote", this will get all the <div>
	// elements on the page

	var itm = document.getElementsByClassName("quote");
	// Selecting the fourth <div> (we can choose any <div> here, does not really make a difference),
	// copying this element, and placing a new variable equal to it.
	var newdiv = itm[3].cloneNode(true);

	// Changing the HTML of this element to our quote, in <p> tags
	newdiv.innerHTML = "<p>\"Many quote knowledge, but few note it in mind.\" - Ali ibn Abi Talib</p>";
	
	// Appending this new element to our body
	document.body.appendChild(newdiv);

	// PART 3: We first get all the <div> elements
	var alldivs = document.getElementsByTagName("div");

	// We go through all the <div> elements
	for (var i = 0; i < alldivs.length; i++)
	{	
		// Setting the position property of the <div> to relative in order to edit the right and left
		// properties of that element
		alldivs[i].style.position = "relative";

		// Adding event listener for "mouseover" event
		alldivs[i].addEventListener("mouseover", mouseOver);

		// Adding event listener for "mouseout" event
		alldivs[i].addEventListener("mouseout", mouseOut);
	}
}