    let counter = 1;
    let NumberOfPics = 13;
    let nodeFavicon	= document.getElementsByTagName("link");
    function animateFavicon() {
    for (let i = 0; i < nodeFavicon.length; i++){
    if( (nodeFavicon[i].getAttribute("rel") == "icon") || (nodeFavicon[i].getAttribute("rel") == "shortcut icon"))
{   nodeFavicon[i].setAttribute("href", "img/" + counter + ".ico");}}
    if (counter < NumberOfPics) {
    setTimeout(animateFavicon, 700);
    counter++;
    if (counter == NumberOfPics) { counter = 1; }}}
    animateFavicon();