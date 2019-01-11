window.addEventListener("load", function () {

    var categories = [
        {category: "認知症", color: {background: "#DE7171"}, img_source: "/img/category/icon_recognition.png"},
        {category: "介護保険", color: {background: "#DE71B9"}, img_source: "/img/category/icon_insurance.png"},
        {category: "要介護認定", color: {background: "#CF71DE"}, img_source: "/img/category/icon_certification.png"},
        {category: "お金", color: {background: "#DED371"}, img_source: "/img/category/icon_money.png"},
        {category: "介護施設", color: {background: "#9ADE71"}, img_source: "/img/category/icon_hospital.png"},
        {category: "ケアプラン", color: {background: "#73DE71"}, img_source: "/img/category/icon_care_plan.png"},
        {category: "ケアマネージャ", color: {background: "#71DEA3"}, img_source: "/img/category/icon_care_manager.png"},
        {category: "リハビリ", color: {background: "#71DEDE"}, img_source: "/img/category/icon_rehabilitation.png"},
        {category: "リフォーム", color: {background: "#71B0DE"}, img_source: "/img/category/icon_reform.png"},
        {category: "解除器具", color: {background: "#7182DE"}, img_source: "/img/category/icon_device.png"},
        {category: "解除疲れ・ストレス", color: {background: "#8771DE"}, img_source: "/img/category/icon_stress.png"},
        {category: "入浴排泄ケア", color: {background: "#CF71DE"}, img_source: "/img/category/icon_stress.png"},
        {category: "家族", color: {background: "#DEB271"}, img_source: "/img/category/icon_care.png"},
        {category: "食事", color: {background: "#D5DE71"}, img_source: "/img/category/icon_family.png"},
        {category: "病気", color: {background: "#71DEA3"}, img_source: "/img/category/icon_food.png"},
        {category: "元気報告", color: {background: "#71DEDE"}, img_source: "/img/category/icon_report.png"},
        {category: "雑談", color: {background: "#87EFEF"}, img_source: "/img/category/icon_chat.png"}]
    var category = new Vue({
        el: '#category',
        data: {
            categories: categories
        }
    })
})