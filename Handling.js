function openBH(URL) {
    document.getElementById("OBH").style.backgroundImage = "url(Images/takeoff.gif)";
    setTimeout( function() { window.location.href = URL; }, 4000 );
}
function openP(URL) {
    var p=document.getElementById("OP");
    p.style.backgroundSize = "250px 400px";
    p.style.backgroundImage = "url(Images/takeoff.gif)";
    setTimeout( function() { window.location.href = URL; }, 4000 );
}
function openG(URL) {
    document.getElementById("OG").style.backgroundImage = "url(Images/takeoff.gif)";
    setTimeout( function() { window.location.href = URL; }, 4000 );
}