window.addEventListener("DOMContentLoaded", function () {
    var translate_category = {
        "お金": "mk_money",
        "ケアプラン": "mk_care_plan",
        "ケアマネージャー": "mk_care_manager",
        "その他": "mk_others",
        "リハビリ": "mk_rehabilitation",
        "リフォーム": "mk_reform",
        "介護保険": "mk_insurance",
        "介護器具": "mk_device",
        "介護施設": "mk_-hospital",
        "介護疲れ・ストレス": "mk_stress",
        "元気報告": "mk_report",
        "入浴・排泄ケア": "mk_care",
        "家族": "mk_family",
        "病気": "mk_sick",
        "自己紹介": "mk_self_introduction",
        "要介護認定": "mk_certification",
        "認知症": "mk_cognition",
        "雑談": "mk_chat",
        "食事": "mk_food"
    }
    var categories = [
        {category: "認知症", color: {background: "#DE7171"}, img_source: "https://hajimetenokaigo.jp/wp-content/uploads/2019/01/icon_recognition.png"},
        {category: "介護保険", color: {background: "#DE71B9"}, img_source: "https://hajimetenokaigo.jp/wp-content/uploads/2019/01/icon_insurance.png"},
        {category: "要介護認定", color: {background: "#CF71DE"}, img_source: "https://hajimetenokaigo.jp/wp-content/uploads/2019/01/icon_certification.png",},
        {category: "お金", color: {background: "#DED371"}, img_source: "https://hajimetenokaigo.jp/wp-content/uploads/2019/01/icon_money.png"},
        {category: "介護施設", color: {background: "#9ADE71"}, img_source: "https://hajimetenokaigo.jp/wp-content/uploads/2019/01/icon_hospital.png"},
        {category: "ケアプラン", color: {background: "#73DE71"}, img_source: "https://hajimetenokaigo.jp/wp-content/uploads/2019/01/icon_care_plan.png",},
        {category: "ケアマネージャー", color: {background: "#71DEA3"}, img_source: "https://hajimetenokaigo.jp/wp-content/uploads/2019/01/icon_care_manager.png"},
        {category: "リハビリ", color: {background: "#71DEDE"}, img_source: "https://hajimetenokaigo.jp/wp-content/uploads/2019/01/icon_rehabilitation.png"},
        {category: "リフォーム", color: {background: "#71B0DE"}, img_source: "https://hajimetenokaigo.jp/wp-content/uploads/2019/01/icon_reform.png"},
        {category: "介護器具", color: {background: "#7182DE"}, img_source: "https://hajimetenokaigo.jp/wp-content/uploads/2019/01/icon_device.png"},
        {category: "介護疲れ・ストレス", color: {background: "#8771DE"}, img_source: "https://hajimetenokaigo.jp/wp-content/uploads/2019/01/icon_stress.png"},
        {category: "入浴・排泄ケア", color: {background: "#CF71DE"}, img_source: "https://hajimetenokaigo.jp/wp-content/uploads/2019/01/icon_stress.png"},
        {category: "家族", color: {background: "#DEB271"}, img_source: "https://hajimetenokaigo.jp/wp-content/uploads/2019/01/icon_care.png"},
        {category: "食事", color: {background: "#D5DE71"}, img_source: "https://hajimetenokaigo.jp/wp-content/uploads/2019/01/icon_family.png"},
        {category: "病気", color: {background: "#71DEA3"}, img_source: "https://hajimetenokaigo.jp/wp-content/uploads/2019/01/icon_food.png"},
        {category: "元気報告", color: {background: "#71DEDE"}, img_source: "https://hajimetenokaigo.jp/wp-content/uploads/2019/01/icon_report.png"},
        {category: "雑談", color: {background: "#87EFEF"}, img_source: "https://hajimetenokaigo.jp/wp-content/uploads/2019/01/icon_chat.png"}
    ]
    for (var category of categories) {
        category.active = translate_category[category.category] === args.path[2]
    }
    for (var index  in categories) {
        categories[index].href = "/minnadekaigo/" + translate_category[categories[index].category]
    }
    var category = new Vue({
        el: '#category',
        data: {
            categories: categories
        }
    })
})