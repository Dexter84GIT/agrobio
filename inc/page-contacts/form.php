<div class="container">
    <form action="" class="form df cb-form">
    <div class="block df fdc">
        <p class="title">Напишите нам письмо</p>
    </div>
    <div class="block df fdc gap30">
        <div class="row df fdc">
            <label for="email">E-mail</label>
            <input type="email" id="email" placeholder="@mail.ru" required>
        </div>
        <div class="row df fdc">
            <div class="top df aic jcsb">
                <label for="info">Информация</label>
                <label for="file" class="file df aic">
                    Прикрепить
                    <input type="file" id="file">
                </label>
            </div>
            <textarea name="info" id="info"> </textarea>
        </div>
        <div class="row">
            <label for="agree" class="label df aic">
                <input type="checkbox" name="agree" id="agree" required>
                Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных
                данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О
                персональных данных», на условиях и для целей, определенных в Согласии на обработку
                персональных данных
            </label>
        </div>
        <input type="checkbox" class="hidden">
        <div class="row submit">
            <input type="submit" value="Отправить">
        </div>
    </div>
</form>
</div>