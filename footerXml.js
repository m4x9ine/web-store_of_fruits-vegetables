$(document).ready(function(){
    var text, parser, xmlDoc;
    
    text = "<info>" +
    "<text>Сайт сделан Косс Валерией</text>" +
    "</info>";
    
    parser = new DOMParser();
    xmlDoc = parser.parseFromString(text,"text/xml");
    
    document.getElementById("footer__bottom__info").innerHTML = xmlDoc.getElementsByTagName("text")[0].childNodes[0].nodeValue;
});