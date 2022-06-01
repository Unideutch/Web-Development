<div class="popup__back">
    <div class="questionnaire popup">
        <div class="questionnaire__welcome">
            <img class="popup__escape" src="images/Frame 67.svg" alt="" />
            <img class="welcome__image" src="images/Welcome.svg" alt="" />
            <h2 class="questionnaire__title">Записаться на курс</h2>
        </div>
        <form method="post" class="form" action="answer.php">
            <input type="text" placeholder="Ваше имя" class="form__option" required name="name">
            <input type="email" placeholder="Email" class="form__option" required name="email">
            <select class="form__option" name="work">
                <option class="select__option">Деятельность</option>
                <option class="select__option">Программист</option>
                <option class="select__option">Дизайнер</option>
                <option class="select__option">Маркетолог</option>
            </select>
            <div>
                <input type="checkbox" class="checkbox">
                <label class="checkbox__label">Согласен получать информационные материалы о старте курса</label>
            </div>
            <button type="submit" class="button form__button">Записаться на курс</button>
        </form>
    </div>
</div>