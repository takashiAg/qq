function add_category() {
    let target = document.getElementById("category")
    let categories = [
        {category: "認知症", color: "DE7171", img_source: "icon_care"},
        {category: "介護保険", color: "DE7171", img_source: "icon_care"},
        {category: "要介護認定", color: "DE7171", img_source: "icon_care"},
        {category: "お金", color: "DE7171", img_source: "icon_care"},
        {category: "介護施設", color: "DE7171", img_source: "icon_care"},
        {category: "ケアプラン", color: "DE7171", img_source: "icon_care"},
        {category: "ケアマネージャ", color: "DE7171", img_source: "icon_care"},
        {category: "リハビリ", color: "DE7171", img_source: "icon_care"},
        {category: "リフォーム", color: "DE7171", img_source: "icon_care"},
        {category: "解除器具", color: "DE7171", img_source: "icon_care"},
        {category: "解除疲れ・ストレス", color: "DE7171", img_source: "icon_care"},
        {category: "入浴排泄ケア", color: "DE7171", img_source: "icon_care"},
        {category: "家族", color: "DE7171", img_source: "icon_care"},
        {category: "食事", color: "DE7171", img_source: "icon_care"},
        {category: "病気", color: "DE7171", img_source: "icon_care"},
        {category: "元気報告", color: "DE7171", img_source: "icon_care"},
        {category: "雑談", color: "DE7171", img_source: "icon_care"}
    ]
    let template = `<div class="category"><span style="background: #{{color}};width: 3px"></span><img src="../img/category/{{img_source}}.png"><span>{{category}}</span></div>`
    for (let category of categories) {
        target.innerHTML += template
            .replace("{{color}}", category.color)
            .replace("{{img_source}}", category.img_source)
            .replace("{{category}}", category.category)
    }
    return true;
}
