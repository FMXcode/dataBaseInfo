<h3 class="titile_list" style="margin-top: 140px;">Личные данные</h3>
<div class="wapper_form_person">
    <div class="wapper_input">
        <p>Воинское звание</p>
        <!--                        <input type="hidden" name="user_id" value="--><?//=$person['user_id'] ?><!--">-->
        <select class="select-css" name="rank">
            <option>Рядовой</option>
            <option>ефрейтор</option>
            <option>Младший сержант</option>
            <option>Сержант</option>
            <option>Страший сержант</option>
            <option>Старшина</option>
            <option>Прапорщик</option>
        </select>
        <!--                <input type="text" name="rank" placeholder="Майор">-->
        <p>Учебная группа</p>
        <input type="text" name="study_group" required placeholder="3071">
        <p>Фамилия</p>
        <input type="text" name="surname" required placeholder="Иванов">
        <p>Имя</p>
        <input type="text" name="name" required placeholder="Иван">
        <p>Отчество</p>
        <input type="text" name="second_name" required placeholder="Иванович">
        <p>занимаемая должность</p>
        <select class="select-css" name="job_title">
            <option>Курсант</option>
            <option>Командир отделения</option>
            <option>Командир учебной группы</option>
        </select>
        <p>Отец</p>
        <input type="text" name="father_info" required>
        <p id="progerss">Мать</p>
        <input type="text" name="mother_info" required>
    </div>
    <div class="wapper_textarea">
        <p>Домашний адрес родителей</p>
        <textarea name="home_address"></textarea>
        <p>Брат/Cёстры</p>
        <textarea name="brothers_or_sisters"></textarea>
        <p>Семейное положение</p>
        <select class="select-css" name="family_status">
            <option>Холост(не замужем)</option>
            <option>Женат(замужем)</option>
        </select>
        <p>Жена/Муж</p>
        <textarea name="wife_or_husband"></textarea>
        <p>Дети</p>
        <textarea name="children"></textarea>
    </div>
</div>
