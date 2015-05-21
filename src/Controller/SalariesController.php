<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Salaries Controller
 *
 * @property \App\Model\Table\SalariesTable $Salaries
 */
class SalariesController extends AppController
{
    public function average()
    {
        $this->set('average', $this->Salaries->find('average')->first()->average);
    }

    public function gender_average()
    {
        $this->set('averages', $this->Salaries
            ->find('ofHired')
            ->find('averagePerGender')
            ->indexBy('gender')
        );
    }

    public function yearly_average()
    {
        $this->set('averages', $this->Salaries
            ->find('averagePerYear')
            ->find('averagePerDepartment')
            ->find('averagePerGender')
            ->find('max')
        );
    }
}
