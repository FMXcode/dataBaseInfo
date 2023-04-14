<h3 class="titile_list" id="personInformation" style="background-color: #14590b; width: 98%; margin: 0 auto;height: 30px;border-radius: 5px; margin: 10px;line-height: 30px; ">Общие сведения</h3>
<div class="wapper_form_person" style="background-color: #14590b;border-radius: 5px;width: 98%;margin: 0 auto; padding: 10px;">
    <div class="wapper__content" style="width: 1200px;
    display:flex;
    justify-content:space-between;margin: 0 auto;padding: 10px;">
        <div class="wapper_input">
            <p>Звание</p>
            <!--                        <input type="hidden" name="user_id" value="--><?//=$person['user_id'] ?><!--">-->
            <select class="select-css" name="rank">
                <option>Лейтенант</option>
                <option>Старший лейтенант</option>
                <option>Капитан</option>
                <option>Майор</option>
                <option>Подполковник</option>
                <option>Полковник</option>
                <option>Генерал-майор</option>
                <option>Генерал-лейтенант</option>
                <option>Генерал-полковник</option>
            </select>
            <!--                <input type="text" name="rank" placeholder="Майор">-->
            <p>Фамилия</p>
            <input type="text" name="surname" required placeholder="Иванов">
            <p>Имя</p>
            <input type="text" name="name" required placeholder="Иван">
            <p>Отчество</p>
            <input type="text" name="patronymic" required placeholder="Иванович">
            <p>Дата рождения</p>
            <input type="date" name="dateBirth" required>
            <p id="tableList">занимаемая должность</p>
            <input type="text" name="position" placeholder="Кандидат технических наук ВАС">
        </div>
        <div class="wapper_textarea">
            <p>Окончил</p>
            <textarea name="graduated"></textarea>
            <p>Специальность</p>
            <textarea name="speciality"></textarea>
            <p>Научная специальность</p>
            <textarea name="scientific_specialty"></textarea>
            <p>Личное фото</p>
            <input type="file" name="photo_person">
        </div>
    </div>
</div>
