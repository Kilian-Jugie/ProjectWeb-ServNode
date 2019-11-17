var count = 0;
var countButton = document.getElementById("cross-count");
console.log(count);
countButton.onclick = function () {
    count++;
    console.log(count);
    if (count % 2 != 0) {
        document.getElementById("cross-life").style.transformOrigin = "50 50";
        document.getElementById("cross-metal").style.transformOrigin = "50 50";
        document.getElementById("cross-life").style.transform = "rotate(-45deg)";
        document.getElementById("cross-metal").style.transform = "rotate(45deg)";
        document.getElementById("cross-life").style.width = "3px";
        document.getElementById("cross-metal").style.width = "3px";
        document.getElementById("nav-barResponsive").style.display = "block";
    } else {
        document.getElementById("cross-life").style.transformOrigin = "50 50";
        document.getElementById("cross-metal").style.transformOrigin = "50 50";
        document.getElementById("cross-life").style.transform = "rotate(0deg)";
        document.getElementById("cross-metal").style.transform = "rotate(90deg)";
        document.getElementById("cross-life").style.transform = "rotate(45deg)";
        document.getElementById("cross-metal").style.transform = "rotate(135deg)";
        document.getElementById("cross-life").style.transform = "rotate(90deg)";
        document.getElementById("cross-metal").style.transform = "rotate(180deg)";
        document.getElementById("cross-life").style.width = "3px";
        document.getElementById("cross-metal").style.width = "3px";
        document.getElementById("nav-barResponsive").style.display = "none";
    }
}