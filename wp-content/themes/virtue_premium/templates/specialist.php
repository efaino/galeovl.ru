<?php $specialists = get_field('specialist'); ?>
<div class="our-specialist">
    <div class="our-specialist__title">
        <h2>Специалисты</h2>
    </div>
    <div class="our-specialist__items">
        <?php foreach ($specialists

                       as $specialist) :
            $name = $specialist['name'];
            $decr = $specialist['description'];
            $img = $specialist['img']['url'];
            ?>
            <div class="our-specialist__item">
                <div class="our-specialist__item__img">
                    <img src="<?= $img ?>" alt="">
                </div>
                <div class="our-services__item_title">
                    <h2><?= $name ?></h2>
                </div>
                <div class="our-services__item_description">
                    <p><?= $decr ?></p>
                </div>
                <div class="our-specialist__item__img__background__btn">
                    <a href="#zapis" class="zapisats">Записаться</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>