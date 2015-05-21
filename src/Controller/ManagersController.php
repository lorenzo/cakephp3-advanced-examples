<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Serializer\LinksEnricher;

/**
 * Managers Controller
 *
 * @property \App\Model\Table\ManagersTable $Managers
 */
class ManagersController extends AppController
{

    public $paginate = [
        'contain' => ['Employees', 'Departments']
    ];

    /**
     * Index method
     *
     * @return void
     */
    public function index($version = 1)
    {
        $managers = $this->paginate($this->Managers);

        if ($version === 2) {
            $managers = $managers->map(new LinksEnricher($this->Managers));
        }

        $this->set('managers', $managers);
        $this->set('_serialize', ['managers']);
    }

    /**
     * View method
     *
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($department, $employee)
    {
        $manager = $this->Managers->get([$department, $employee], [
            'contain' => ['Employees', 'Departments']
        ]);
        $this->set('manager', $manager);
        $this->set('_serialize', ['manager']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $manager = $this->Managers->newEntity();
        if ($this->request->is('post')) {
            $manager = $this->Managers->patchEntity($manager, $this->request->data);
            if ($this->Managers->save($manager)) {
                $this->Flash->success('The manager has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The manager could not be saved. Please, try again.');
            }
        }
        $employees = $this->Managers->Employees->find('list', ['limit' => 200]);
        $departments = $this->Managers->Departments->find('list', ['limit' => 200]);
        $this->set(compact('manager', 'employees', 'departments'));
        $this->set('_serialize', ['manager']);
    }

    /**
     * Edit method
     *
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($department, $employee)
    {
        $manager = $this->Managers->get([$department, $employee], [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $manager = $this->Managers->patchEntity($manager, $this->request->data);
            if ($this->Managers->save($manager)) {
                $this->Flash->success('The manager has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The manager could not be saved. Please, try again.');
            }
        }
        $employees = $this->Managers->Employees->find('list', ['limit' => 200]);
        $departments = $this->Managers->Departments->find('list', ['limit' => 200]);
        $this->set(compact('manager', 'employees', 'departments'));
        $this->set('_serialize', ['manager']);
    }

    /**
     * Delete method
     *
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($department, $employee)
    {
        $this->request->allowMethod(['post', 'delete']);
        $manager = $this->Managers->get([$department, $employee]);
        if ($this->Managers->delete($manager)) {
            $this->Flash->success('The manager has been deleted.');
        } else {
            $this->Flash->error('The manager could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }

    public function female()
    {
        $this->paginate['finder'] = 'female';
        $this->setAction('index');
    }

    public function female_ratio()
    {
        $this->set('ratio', $this->Managers->find('femaleRatio')->first()->female_ratio);
    }
}
