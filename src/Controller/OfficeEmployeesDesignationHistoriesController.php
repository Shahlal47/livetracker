<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\OfficeEmployeesDesignationHistoriesTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use App\Model\Entity\OfficeEmployeesDesignationHistories;
use Cake\ORM\TableRegistry;

class OfficeEmployeesDesignationHistoriesController extends AppController
{
//    public $paginate = [
//        'fields' => ['Districts.id'],
//        'limit' => 25,
//        'order' => [
//            'Districts.id' => 'asc'
//        ]
//    ];
//
//    public function initialize()
//    {
//        parent::initialize();
//        $this->loadComponent('Paginator');
//    }

    public function index()
    {
        $employees_designation_history = TableRegistry::get('OfficeEmployeesDesignationHistories');
        $query = $employees_designation_history->find('all');
        $this->set(compact('query'));
    }

    public function add()
    {
        $this->loadModel('OfficeOrganizations');
        $office_organizations = $this->OfficeOrganizations->find('all');
        $this->set(compact('office_organizations'));

        $employees_designation_history = $this->OfficeEmployeesDesignationHistories->newEntity();
        if ($this->request->is('post')) {
            $employees_designation_history = $this->OfficeEmployeesDesignationHistories->patchEntity($employees_designation_history, $this->request->data);
            if ($this->OfficeEmployeesDesignationHistories->save($employees_designation_history)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('employees_designation_history', $employees_designation_history);
    }

    public function edit($id = null)
    {
        $employees_designation_history = $this->OfficeEmployeesDesignationHistories->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->OfficeEmployeesDesignationHistories->patchEntity($employees_designation_history, $this->request->data);
            if ($this->OfficeEmployeesDesignationHistories->save($employees_designation_history)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('employees_designation_history', $employees_designation_history);
    }


    public function view($id = null)
    {
        $employees_designation_history = $this->OfficeEmployeesDesignationHistories->get($id);
        $this->set(compact('employees_designation_history'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $employees_designation_history = $this->OfficeEmployeesDesignationHistories->get($id);
        if ($this->OfficeEmployeesDesignationHistories->delete($employees_designation_history)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}
