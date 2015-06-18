<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\OfficeOrganizationHistoriesTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use App\Model\Entity\OfficeOrganizationHistories;
use Cake\ORM\TableRegistry;

class OfficeOrganizationHistoriesController extends AppController
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
        $office_organization_histories = TableRegistry::get('OfficeOrganizationHistories');
        $query = $office_organization_histories->find('all');
        $this->set(compact('query'));
    }

    public function add()
    {
        $this->loadModel('OfficeOrganizations');
        $office_organizations = $this->OfficeOrganizations->find('all');
        $this->set(compact('office_organizations'));

        $this->loadModel('OfficeGeos');
        $office_geos = $this->OfficeGeos->find('all');
        $this->set(compact('office_geos'));

        $office_organization_histories = $this->OfficeOrganizationHistories->newEntity();
        if ($this->request->is('post')) {
            $office_organization_histories = $this->OfficeOrganizationHistories->patchEntity($office_organization_histories, $this->request->data);
            if ($this->OfficeOrganizationHistories->save($office_organization_histories)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('office_organization_histories', $office_organization_histories);
    }

    public function edit($id = null)
    {
        $office_organization_histories = $this->OfficeOrganizationHistories->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->OfficeOrganizationHistories->patchEntity($office_organization_histories, $this->request->data);
            if ($this->OfficeOrganizationHistories->save($office_organization_histories)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('office_organization_histories', $office_organization_histories);
    }

    public function view($id = null)
    {
        $office_organization_histories = $this->OfficeOrganizationHistories->get($id);
        $this->set(compact('office_organization_histories'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $office_organization_histories = $this->OfficeOrganizationHistories->get($id);
        if ($this->OfficeOrganizationHistories->delete($office_organization_histories)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}
