<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\OfficeOrganizationsTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use App\Model\Entity\OfficeOrganizations;
use Cake\ORM\TableRegistry;

class OfficeOrganizationsController extends AppController
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
        $office_organizations = TableRegistry::get('OfficeOrganizations');
        $query = $office_organizations->find('all');
        $this->set(compact('query'));
    }

    public function add()
    {

        $office_organizations = $this->OfficeOrganizations->newEntity();
        if ($this->request->is('post')) {
            $office_organizations = $this->OfficeOrganizations->patchEntity($office_organizations, $this->request->data);
            if ($this->OfficeOrganizations->save($office_organizations)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('office_organizations', $office_organizations);
    }

    public function edit($id = null)
    {
        $office_organizations = $this->OfficeOrganizations->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->OfficeOrganizations->patchEntity($office_organizations, $this->request->data);
            if ($this->OfficeOrganizations->save($office_organizations)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('office_organizations', $office_organizations);
    }


    public function view($id = null)
    {
        $office_organizations = $this->OfficeOrganizations->get($id);
        $this->set(compact('office_organizations'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $office_organizations = $this->OfficeOrganizations->get($id);
        if ($this->OfficeOrganizations->delete($office_organizations)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}
