<section>
<form class="signup_form" action="POST">
        <h3 class="form-title">Регистрация</h3>
        <input type="text" name="full_name" placeholder="Введите полное имя">
        <input type="email" name="mail" placeholder="email">
<input type="date" name="dates" placeholder="data 31.12.2022">  
        <select name="otdel" id="pet-select">
    <option value="">название отделов
    </option>
    <option value="kom">комерческий</option>
    <option value="fin">финансовый</option>
    <option value="market">маркетинговый</option>
        
</select>   
        <input type="password" name="password" placeholder="password">
        <input type="password" name="password_confirm" placeholder="confirm password">
        <label class="input-file">
        <input type="file" name="avatar">
        <span>Выберите файл</span>
        </label>
        <button type="submit">Зарегестрироваться</button>

    </form>
</section>