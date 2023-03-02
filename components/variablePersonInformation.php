<h3 class="titile_list">Общие сведения</h3>
<div class="wapper_form_person">
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