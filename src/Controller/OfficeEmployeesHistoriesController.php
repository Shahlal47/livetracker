<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\OfficeEmployeeHistoriesTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use App\Model\Entity\OfficeEmployeesHistories;
use Cake\ORM\TableRegistry;

class OfficeEmployeesHistoriesController extends AppController
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
        $office_employee_history = TableRegistry::get('OfficeEmployeesHistories');
        $query = $office_employee_history->find('all');
        $this->set(compact('query'));
    }

    public function add()
    {
        $this->loadModel('GeoDistricts');
        $geo_districts = $this->GeoDistricts->find('all');
        $this->set(compact('geo_districts'));

        $this->loadModel('GeoThanas');
        $geo_thanas = $this->GeoThanas->find('all');
        $this->set(compact('geo_thanas'));

        $office_employee_history = $this->OfficeEmployeesHistories->newEntity();
        if ($this->request->is('post')) {
            $office_employee_history = $this->OfficeEmployeesHistories->patchEntity($office_employee_history, $this->request->data);
            if ($this->OfficeEmployeesHistories->save($office_employee_history)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('office_employee_history', $office_employee_history);
    }

    public function edit($id = null)
    {
        $office_employee_history = $this->OfficeEmployeesHistories->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->OfficeEmployeesHistories->patchEntity($office_employee_history, $this->request->data);
            if ($this->OfficeEmployeesHistories->save($office_employee_history)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('office_employee_history', $office_employee_history);
    }

    public function view($id = null)
    {
        $office_employee_history = $this->OfficeEmployeesHistories->get($id);
        $this->set(compact('office_employee_history'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $office_employee_history = $this->OfficeEmployeesHistories->get($id);
        if ($this->OfficeEmployeesHistories->delete($office_employee_history)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}
