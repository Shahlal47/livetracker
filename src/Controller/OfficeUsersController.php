<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\OfficeUsersTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use App\Model\Entity\OfficeUsers;
use Cake\ORM\TableRegistry;

class OfficeUsersController extends AppController
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
        $office_users = TableRegistry::get('OfficeUsers');
        $query = $office_users->find('all');
        $this->set(compact('query'));
    }

    public function add()
    {

        $office_users = $this->OfficeUsers->newEntity();
        if ($this->request->is('post')) {
            $office_users = $this->OfficeUsers->patchEntity($office_users, $this->request->data);
            if ($this->OfficeUsers->save($office_users)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('office_users', $office_users);
    }

    public function edit($id = null)
    {
        $office_users = $this->OfficeUsers->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->OfficeUsers->patchEntity($office_users, $this->request->data);
            if ($this->OfficeUsers->save($office_users)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('office_users', $office_users);
    }


    public function view($id = null)
    {
        $office_users = $this->OfficeUsers->get($id);
        $this->set(compact('office_users'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $office_users = $this->OfficeUsers->get($id);
        if ($this->OfficeUsers->delete($office_users)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}
