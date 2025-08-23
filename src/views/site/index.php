<?php

/** @var yii\web\View $this */

$this->title = 'Главная';
?>
<div class="row">
    <div class="col-md-1 d-none d-md-block">
        <ul class="list-unstyled">
            <?php for ($year = 1828; $year <= 1840; $year++): ?>
                <li><a class="btn btn-secondary"><?= $year ?></a></li>
            <?php endfor; ?>
        </ul>
    </div>
    <div class="col-md-11 d-flex flex-column align-items-center text-center gap-1 cormorant-infant" style="font-size: 15pt">

        <div class="image-placeholder bg-light w-100" style="height: 400px; background-image: url(images/main.jpg); background-size: contain; background-repeat: no-repeat; background-position: center center"></div>
        <div style="text-align: left">
            <p>Сёстры Дивеевской общины и Серафимо-Дивеевского монастыря оставили после себя не только молитвы, но и судьбы, полные тихого подвига и преданности Богу. Даже в годы испытаний, когда монастырь был разрушен, они сохранили дух общины, продолжая трудиться вместе в кооперативе «Ателия» и за пределами её.</p>
            <p>Мы собрали их имена из архивных списков, чтобы каждая сестра осталась в памяти, а её жизнь стала свидетельством силы веры и любви.</p>
            <p>Этот сайт — о тех, кто посвятил себя служению и оставил свет, который невозможно погасить.</p>
        </div>
        <form action="#" method="get" style="max-width: 400px; width: 100%;">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Поиск">
                <button class="btn btn-primary" type="submit">Поиск</button>
            </div>
        </form>
    </div>
    <div class="col-md-11 d-block d-md-none text-center">
        <br />
        <?php for ($year = 1828; $year <= 1840; $year++): ?>
            <a class="btn btn-secondary"><?= $year ?></a>
        <?php endfor; ?>
    </div>
</div>
