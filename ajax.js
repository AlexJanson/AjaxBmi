function ajax() {
    let gewicht = document.getElementById("gewicht").value;
    let lengte = document.getElementById("lengte").value;
    if(window.XMLHttpRequest) xmlhttp = new XMLHttpRequest();
    else xmlhttp = new ActiveXObject();
    let script = "bmi.php";
    let httpString = script + "?gewicht=" + gewicht + "&lengte=" + lengte;
    let httpsResponse = "";
    xmlhttp.open("GET", httpString, true);
    xmlhttp.send();
    xmlhttp.onreadystatechange = function() {
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            httpsResponse = xmlhttp.responseText;
            document.getElementById("resultaat").innerHTML = httpsResponse;
            document.getElementById("resultaat").style.border = "1px solid black";
            
        }
    }
}