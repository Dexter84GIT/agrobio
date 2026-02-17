<section class="about">
    <div class="container">
        <div class="about-content df aic">
            <div class="about-left df fdc">
                <p class="about-title">О компании</p>
                <div class="about-text df fdc">
                    <?php
                        $text = get_field('about_text');
                    if (!empty($text)): ?>
                        <?php echo $text; ?>
                    <?php else: ?>
                        <p>Текст отсутствует</p>
                    <?php endif; ?>
                </div>
                <a href="/about" class="about-button">Подробнее</a>
            </div>
            <div class="about-right df fdc">
                <a href="/history" class="">История</a>
                <a href="/mission" class="">Миссия</a>
                <a href="/healing-systems" class="">Системы лечения</a>
                <a href="/production" class="">Производство</a>
                <a href="/znak" class="">Честный знак</a>
                <a href="/career" class="">Карьера</a>
            </div>
        </div>
    </div>
</section>