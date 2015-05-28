<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException();
endif;

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
</head>
<body class="home">
    <header>
        <div class="header-image">
            <?= $this->Html->image('http://cakephp.org/img/cake-logo.png') ?>
            <h1>Agile Database Access with CakePHP 3</h1>
        </div>
    </header>
    <div id="content">
		<div class="row">
			<div class="columns large-12 platform checks">
				<ul>
					<li><?= $this->Html->link('Average Salary', ['controller' => 'Salaries', 'action' => 'average']); ?></li>
					<li><?= $this->Html->link('Female Managers', ['controller' => 'Managers', 'action' => 'female']); ?></li>
					<li><?= $this->Html->link('Female Managers Percentage', ['controller' => 'Managers', 'action' => 'female_ratio']); ?></li>
					<li><?= $this->Html->link('Average Salary Per Gender', ['controller' => 'Salaries', 'action' => 'gender_average']); ?></li>
					<li><?= $this->Html->link('Yearly Average Salary Per Department and Gender', ['controller' => 'Salaries', 'action' => 'yearly_average']); ?></li>

					<li><?= $this->Html->link('Managers JSON index', ['controller' => 'Managers', 'action' => 'index', '_ext' => 'json']); ?></li>
					<li><?= $this->Html->link('Managers JSON index V2', ['_name' => 'V2::Managers::index', '_ext' => 'json']); ?></li>
				</ul>
			</div>
		</div>
    <div>
</body>
</html>
