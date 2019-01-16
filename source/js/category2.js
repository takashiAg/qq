window.addEventListener("DOMContentLoaded", function () {

    var categories = [
        {category: "要支援１", color: {background: "#DE7171"}, img_source: "/img/category/icon_recognition.png"},
        {category: "要支援２", color: {background: "#DE71B9"}, img_source: "/img/category/icon_recognition.png"},
        {category: "要介護１", color: {background: "#CF71DE"}, img_source: "/img/category/icon_recognition.png"},
        {category: "要介護２", color: {background: "#DED371"}, img_source: "/img/category/icon_recognition.png"},
        {category: "要介護３", color: {background: "#9ADE71"}, img_source: "/img/category/icon_recognition.png"},
        {category: "要介護４", color: {background: "#73DE71"}, img_source: "/img/category/icon_recognition.png"},
        {category: "要介護５", color: {background: "#71DEA3"}, img_source: "/img/category/icon_recognition.png"}
    ]
    var category = new Vue({
        el: '#category2',
        data: {
            categories: categories
        }
    })
})