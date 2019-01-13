window.addEventListener("DOMContentLoaded", function () {
    var attention_words = new Vue({
        el: '#attention',
        data: {
            words: [
                {name: "介護保険", href: "/top"},
                {name: "認知症", href: "/top"},
                {name: "年末調整", href: "/top"},
                {name: "要介護認定", href: "/top"},
                {name: "介護報酬", href: "/top"},
                {name: "骨折", href: "/top"}
            ]
        }
    })
})