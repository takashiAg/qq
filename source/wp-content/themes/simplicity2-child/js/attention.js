window.addEventListener("DOMContentLoaded", function () {
    var attention_words = new Vue({
        el: '#attention',
        data: {
            words: [
                {name: "介護保険", href: "/minnadekaigo/mk_insurance/"},
                {name: "認知症", href: "/minnadekaigo/mk_cognition/"},
                {name: "解除器具", href: "/minnadekaigo/mk_device/"},
                {name: "要介護認定", href: "/minnadekaigo/mk_certification/"},
                {name: "元気報告", href: "/minnadekaigo/mk_report/"},
                {name: "食事", href: "/minnadekaigo/mk_food/"}
            ]
        }
    })
})