var count = 0;
var countButton = document.getElementById("cross-count");
console.log(count);

// var displayResponsiveNav = document.getElementById("displayingResponsive");
// var windows = document.documentElement.clientWidth;
// $(window).on('resize', function (e) {
//     var check = windows;
//     if (check < 800) {
//         displayResponsiveNav.style.display = "block";
//     };
// });




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
        document.getElementById("header-numero-dos").style.display = "none";
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
        document.getElementById("header-numero-dos").style.display = "block";
    }
}