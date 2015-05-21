<div class="large-12 columns">
    <?php foreach ($averages->groupBy('year') as $year => $averages) : ?>
    <h2><?= h($year) ?></h2>
        <?php foreach (collection($averages)->groupBy('department') as $department => $averages) : ?>
        <ul class="pricing-table" style="margin-top:100px">
            <li class="title">Average salary of employees in <?= $department ?></li>
            <?php foreach ($averages as $data) : ?>
            <li class="price"><?= $data->gender?>: <?= $this->Number->currency($data->average); ?></li>
            <?php endforeach; ?>
        </ul>
        <?php endforeach; ?>
    <?php endforeach; ?>
</div>
