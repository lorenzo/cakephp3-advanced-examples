<div class="large-12 columns">
    <ul class="pricing-table" style="margin-top:100px">
        <li class="title">Average salary of currently hired employees by gender</li>
        <?php foreach ($averages as $gender => $data) : ?>
        <li class="price"><?= $gender?>: <?= $this->Number->currency($data->average); ?></li>
        <?php endforeach; ?>
    </ul>
</div>
