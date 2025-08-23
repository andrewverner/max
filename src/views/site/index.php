<?php

/** @var yii\web\View $this */

$this->title = 'Главная';
?>
<div class="row">
    <div class="col-md-1">
        <ul class="list-unstyled">
            <?php for ($year = 1828; $year <= 1840; $year++): ?>
                <li><a class="btn btn-secondary"><?= $year ?></a></li>
            <?php endfor; ?>
        </ul>
    </div>
    <div class="col-md-11 d-flex flex-column align-items-center text-center gap-1 cormorant-infant" style="font-size: 15pt">

        <div class="image-placeholder bg-light w-100" style="height: 400px; background-image: url(images/main.jpg); background-size: contain; background-repeat: no-repeat; background-position: center center"></div>
        <div style="text-align: left">
            <p>Серафимо-Дивеевская обитель — это святое место, избранное Богом и Пресвятой Богородицей. Здесь, у мощей преподобного Серафима Саровского, каждый паломник находит утешение, покой и молитвенное укрепление.</p>
            <p>Обитель основана в XVIII веке трудами праведных стариц и по особому завету преподобного Серафима стала «четвёртым уделом Богородицы» — местом, где Небесная Царица Самовластно обитает и охраняет Своих чад.</p>
            <p>Сегодня сестры монастыря с любовью и молитвой продолжают традиции духовной жизни, несут послушания, трудятся во славу Божию и принимают всех, кто ищет света Христова.</p>
            <p>Мы приглашаем вас к участию в богослужениях, к поклонению святыням обители, к жизни в духе православной веры. Пусть этот уголок земли станет для вас местом встречи с вечностью, тишиной и милосердием.</p>
        </div>
        <form action="#" method="get" style="max-width: 400px; width: 100%;">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Поиск">
                <button class="btn btn-primary" type="submit">Поиск</button>
            </div>
        </form>
    </div>
</div>
