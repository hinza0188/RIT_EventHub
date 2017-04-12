var expandDiv;
var expandTitle;
//var expandImage;
var expandLocation;
var expandDescription;
var expandRedirect;
var expandShown = false;

function init()
{
    expandDiv = document.querySelector("#expand-block");
    expandTitle = document.querySelector("#expand-title");
    //expandImage = document.querySelector("#expand-image");
    expandDescription = document.querySelector("#expand-description");
    expandLocation= document.querySelector("#expand-location");
    expandRedirect = document.querySelector("#expand-redirect");
}

function expand(event)
{
    if (expandShown)
    {
        expandShown = false;
        expandDiv.style.transform = "scale(0)";
    }
    else
    {
        expandShown = true;
        expandDiv.style.transform = "scale(1)";

        expandTitle.innerHTML = event.title;
        //expandImage.src = img;
        expandDescription.innerHTML = event.description;
        expandLocation.innerHTML = event.location;
        expandRedirect.href = 'events/' + event.id;
    }
}

function collapse()
{
    if (expandShown)
    {
        expandShown = false;
        expandDiv.style.transform = "scale(0)";
    }
}
