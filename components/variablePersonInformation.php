<h3 class="titile_list" style="background-color: #3b4c25; width: 99%; margin: 0 auto;height: 30px;border-radius: 5px; margin: 10px;line-height: 30px; margin-top: 10px;">Общие сведения</h3>
<div class="wapper_form_person" style="background-color: #3b4c25;border-radius: 5px;width: 98%;margin: 0 auto; padding: 10px;">
    <div class="wapper_content" style="width: 1200px;padding:20px 100px;display:flex;justify-content:space-between;margin: 0 auto;">
        <div class="wapper_input">
            <p>Специальность</p>
            <select class="select-css" name="speciality">
                <option>Применение и эксплуатация автоматизированных систем специального назначения</option>
            </select>
            <p>Специализация</p>
            <select class="select-css" name="specialization">
                <option>Эксплуатация вычислительных машин, комплексов, систем и сетей специального назначения</option>
            </select>
            <p>Военная специальность</p>
            <select class="select-css" name="military_specialty">
                <option>Эксплуатация вычислительных машин, комплексов, систем и сетей специального назначения</option>
            </select>
            <p>Квалификация</p>
            <select class="select-css" name="gualification">
                <option>Специалист</option>
                <option>Инженер</option>
            </select>
            <p>Дата рождения</p>
            <input type="date" name="date_birth" required>
            <p>Место рождения</p>
            <input type="text" name="place_birth">
            <p>Домашний адрес</p>
            <input type="text" name="home_address">
            <p id="personalData">Образование</p>
            <input type="text" name="education">
        </div>
        <div class="wapper_textarea">
            <h3 style="margin: 0;">Результаты Егэ</h3>
            <p>Русский язык</p>
            <input name="res_rus" type="number" max="100" maxlength="3">
            <p>Математика</p>
            <input name="res_matematics" type="number">
            <p>Физика</p>
            <input name="res_physics" type="number">
            <p>Физическая подготовка</p>
            <input name="$res_training" type="number">
            <p>Категория проф. пригодности</p>
            <input name="category_suitability" type="number">
            <p>Личное фото</p>
            <input type="file" name="photo_person">
        </div>
    </div>
</div>