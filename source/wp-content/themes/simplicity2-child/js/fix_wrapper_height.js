window.addEventListener("DOMContentLoaded", function () {
    setInterval(function () {
        var h = document.getElementById("content_wrapper").clientHeight
        var h1 = document.getElementById("sidebar_left").clientHeight
        var h2 = document.getElementById("sidebar_right").clientHeight
        var h3 = document.getElementById("main").clientHeight
        var h4 = document.getElementById("sidebar_right_for_SP").clientHeight
        var max = Math.max(h1, h2, h3)
        document.getElementById("content_wrapper").style.height = (max + 30 + h4) + "px"
    }, 1)
})