window.addEventListener("DOMContentLoaded", function () {
    var footer = new Vue({
        el: '#footer',
        data: {
            categories1: [
                {name: "トップページ", href: "/top"},
                {name: "カテゴリ一覧", href: "/top"},
                {name: "サイトマップ", href: "/top"},
                {name: "運営者情報", href: "/top"},
                {name: "プライバシーポリシー", href: "/top"},
                {name: "利用規約", href: "/top"},
                {name: "お問い合わせ", href: "/top"}
            ],
            categories2: [
                {name: "介護が始まるまでの準備", href: "/top"},
                {name: "介護が必要になる原因", href: "/top"},
                {name: "ケアプラン", href: "/top"},
                {name: "ケアマネージャ", href: "/top"},
                {name: "介護保険のサービス・施設の種類", href: "/top"},
                {name: "国の保険を利用できる被保険者", href: "/top"},
                {name: "給付金・保険んりょう・介護費用", href: "/top"},
                {name: "要介護認定の申請・更新", href: "/top"}
            ],
            categories3: [
                {name: "リハビリ", href: "/top"},
                {name: "介護リフォーム", href: "/top"},
                {name: "介護疲れ・ストレス", href: "/top"},
                {name: "介護費用の軽減", href: "/top"},
                {name: "入浴・清潔ケア", href: "/top"},
                {name: "家族での進め方", href: "/top"},
                {name: "排泄・トイレ介助", href: "/top"},
                {name: "歩行・移乗の介護", href: "/top"},
                {name: "福祉用具・介護用品", href: "/top"},
                {name: "認知症", href: "/top"},
                {name: "食事サポート", href: "/top"}
            ]
        }
    })
})