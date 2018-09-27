<h2 class="promo__title">Нужен стафф для катки?</h2>
<p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
<section class="promo">
    <ul class="promo__list">
        <?php foreach ($categories as $val): ?>
        <li class="promo__item <?=$val['ctg-class']; ?>" >
            <a class="promo__link" href="all-lots.html"><?=$val['ctg-name']; ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</section>
<section class="lots">
    <div class="lots__header">
        <h2>Открытые лоты</h2>
    </div>
    <ul class="lots__list">
        <?php foreach ($items as $val): ?>
        <li class="lots__item lot">
            <div class="lot__image">
                <img src="<?=$val['url']; ?>" width="350" height="260" alt="<?=$val['name']; ?>">
            </div>
            <div class="lot__info">
                    <span class="lot__category"><?=$val['category']; ?></span>
                    <h3 class="lot__title"><a class="text-link" href="lot.html"><?=$val['name']; ?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost"><?=$val['price']; ?><b class="rub">р</b></span>
                        </div>
                        <div class="lot__rate">
                            <span class="lot__amount">Текущая цена</span>
                            <span class="lot__cost"><?=formated($val['price']);?></span>
                        </div>
                        <div class="lot__timer timer">
                        </div>
                    </div>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
</section>

   