<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\OfficeEmployeesTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use App\Model\Entity\OfficeEmployees;
use Cake\ORM\TableRegistry;

class OfficeEmployeesController extends AppController
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
        $office_employee = TableRegistry::get('OfficeEmployees');
        $query = $office_employee->find('all');
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

        $this->loadModel('GeoPostOffices');
        $geo_post_offices = $this->GeoPostOffices->find('all');
        $this->set(compact('geo_post_offices'));

        $office_employee = $this->OfficeEmployees->newEntity();
        if ($this->request->is('post')) {
            $office_employee = $this->OfficeEmployees->patchEntity($office_employee, $this->request->data);
            if ($this->OfficeEmployees->save($office_employee)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('office_employee', $office_employee);
    }

    public function edit($id = null)
    {
        $office_employee = $this->OfficeEmployees->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->OfficeEmployees->patchEntity($office_employee, $this->request->data);
            if ($this->OfficeEmployees->save($office_employee)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('office_employee', $office_employee);
    }

    public function view($id = null)
    {
        $office_employee = $this->OfficeEmployees->get($id);
        $this->set(compact('office_employee'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $office_employee = $this->OfficeEmployees->get($id);
        if ($this->OfficeEmployees->delete($office_employee)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}
