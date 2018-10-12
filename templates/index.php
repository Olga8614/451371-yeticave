<h2 class="promo__title">Нужен стафф для катки?</h2>
<p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
<section class="promo">
    <ul class="promo__list">
        <?php foreach ($categories as $val): ?>
        <li class="promo__item <?=$val['ctg_class']; ?>" >
            <a class="promo__link" href="all-lots.html"><?=$val['category']; ?></a>
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
                <img src="<?=$val['lot_picture']; ?>" width="350" height="260" alt="<?=$val['lot_name']; ?>">
            </div>
            <div class="lot__info">
                    <span class="lot__category"><?=get_category($val['lot_category']); ?></span>
                    <h3 class="lot__title"><a class="text-link" href="lot.html"><?=$val['lot_name']; ?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost"><?=$val['init_price']; ?><b class="rub">р</b></span>
                        </div>
                        <div class="lot__rate">
                            <span class="lot__amount">Текущая цена</span>
                            <span class="lot__cost"><?=formated($val['current_price']);?></span>
                        </div>
                        <div class="lot__timer timer"><?=time_left('end_date');?>
                        </div>
                    </div>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
</section>

   