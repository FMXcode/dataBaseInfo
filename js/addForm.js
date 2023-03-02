let coll = document.getElementsByClassName('arrow');
let content = document.getElementsByClassName('elementShow')
let index = 0;

for (let i = 0; i < coll.length; i++) {
    coll[i].addEventListener('click', function () {
        // console.log('click');
        // this.classList.toggle('active');
        let newItem = document.createElement('div');
        let list = document.getElementById("sport");
        console.log(list);
        console.log(newItem);
        newItem.className = "wapper_table sport_item";
        newItem.innerHTML = "<div class=\"scien_textarea\">\n" +
            "            <div class=\"lable_sport\">\n" +
            "                название\n" +
            "            </div>\n" +
            "            <select class=\"scien_select\" name=\`name_work\`></select>\n" +
            "        </div>\n" +
            "        <div class=\"scien_input\">\n" +
            "            <div class=\"lable_sport\">\n" +
            "                результаты\n" +
            "            </div>\n" +
            "            <input type=\"text\" name=\"data1\">\n" +
            "        </div>\n" +
            "        <div class=\"scien_input\">\n" +
            "            <div class=\"lable_sport\">\n" +
            "                Количество уч.\n" +
            "            </div>\n" +
            "            <input type=\"number\" name=\"volume1\">\n" +
            "        </div>\n" +
            "        <div class=\"scien_textarea\">\n" +
            "            <div class=\"lable_sport\">\n" +
            "                организаторы\n" +
            "            </div>\n" +
            "            <textarea name=\"authors\"></textarea>\n" +
            "        </div>\n" +
            "        <div class=\"button_show\">\n" +
            "            <img src=\"../photo/minus.png\" alt=\"\" class=\"arrow\" id=\"delete\">\n" +
            "        </div>";
        list.after(newItem);
        index++;
    })
}