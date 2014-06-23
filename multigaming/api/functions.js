function showHitboxResult(str)
{
    if (str.length == 0)
    {
        document.getElementById("hitboxSearch").innerHTML = "";
        document.getElementById("hitboxSearch").style.border = "0px";
        return;
    }
    if (str.length < 3)
    {
        document.getElementById("hitboxSearch").innerHTML = "Please enter 3 or more letters";
        document.getElementById("hitboxSearch").style.border = "1px solid #003300";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        { // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById("hitboxSearch").innerHTML = xmlhttp.responseText;
                document.getElementById("hitboxSearch").style.border = "1px solid #003300";
            }
        }
        xmlhttp.open("GET", "multigaming/api/search/hitboxSearch.php?q=" + str, true);
        xmlhttp.send();
    }
}

function showTwitchResult(str)
{
    if (str.length == 0)
    {
        document.getElementById("twitchSearch").innerHTML = "";
        document.getElementById("twitchSearch").style.border = "0px";
        return;
    }
    if (str.length < 3)
    {
        document.getElementById("twitchSearch").innerHTML = "Please enter 3 or more letters";
        document.getElementById("twitchSearch").style.border = "1px solid #003300";
        return;
    }
    else
    {
        if (window.XMLHttpRequest)
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        { // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function ()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById("twitchSearch").innerHTML = xmlhttp.responseText;
                document.getElementById("twitchSearch").style.border = "1px solid #003300";
            }
        }
        xmlhttp.open("GET", "multigaming/api/search/twitchSearch.php?q=" + str, true);
        xmlhttp.send();
    }
}

function allowDrop(ev)
{
    ev.preventDefault();
}

function drag(ev)
{
    ev.dataTransfer.setData("Text", ev.target.id);
}

function drop(ev)
{
    ev.preventDefault();
    var data = ev.dataTransfer.getData("Text");
    ev.target.appendChild(document.getElementById(data));
}
