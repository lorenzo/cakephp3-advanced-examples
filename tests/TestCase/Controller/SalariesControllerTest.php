<?php
namespace App\Test\TestCase\Controller;

use App\Controller\SalariesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\SalariesController Test Case
 */
class SalariesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.salaries',
        'app.employees',
        'app.titles',
        'app.departments',
        'app.departments_employees'
    ];

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
