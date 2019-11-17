function cross() {
    document.getElementById("cross-life").style.transformOrigin = "50 50";
    document.getElementById("cross-metal").style.transformOrigin = "50 50";
    document.getElementById("cross-life").style.transform = "rotate(-45deg)";
    document.getElementById("cross-metal").style.transform = "rotate(45deg)";
    document.getElementById("cross-life").style.width = "3px";
    document.getElementById("cross-metal").style.width = "3px";
}