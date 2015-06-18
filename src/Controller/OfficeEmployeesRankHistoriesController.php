<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\OfficeEmployeesRankHistoriesTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use App\Model\Entity\OfficeEmployeesRankHistories;
use Cake\ORM\TableRegistry;

class OfficeEmployeesRankHistoriesController extends AppController
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
        $employees_rank_history = TableRegistry::get('OfficeEmployeesRankHistories');
        $query = $employees_rank_history->find('all');
        $this->set(compact('query'));
    }

    public function add()
    {
        $this->loadModel('OfficeOrganizations');
        $office_organizations = $this->OfficeOrganizations->find('all');
        $this->set(compact('office_organizations'));

        $employees_rank_history = $this->OfficeEmployeesRankHistories->newEntity();
        if ($this->request->is('post')) {
            $employees_rank_history = $this->OfficeEmployeesRankHistories->patchEntity($employees_rank_history, $this->request->data);
            if ($this->OfficeEmployeesRankHistories->save($employees_rank_history)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('employees_rank_history', $employees_rank_history);
    }

    public function edit($id = null)
    {
        $employees_rank_history = $this->OfficeEmployeesRankHistories->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->OfficeEmployeesRankHistories->patchEntity($employees_rank_history, $this->request->data);
            if ($this->OfficeEmployeesRankHistories->save($employees_rank_history)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('employees_rank_history', $employees_rank_history);
    }


    public function view($id = null)
    {
        $employees_rank_history = $this->OfficeEmployeesRankHistories->get($id);
        $this->set(compact('employees_rank_history'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $employees_rank_history = $this->OfficeEmployeesRankHistories->get($id);
        if ($this->OfficeEmployeesRankHistories->delete($employees_rank_history)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}
