<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\OfficeOrganizationStructureTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use App\Model\Entity\OfficeOrganizationStructure;
use Cake\ORM\TableRegistry;

class OfficeOrganizationStructureController extends AppController
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
        $office_organization_structure = TableRegistry::get('OfficeOrganizationStructure');
        $query = $office_organization_structure->find('all');
        $this->set(compact('query'));
    }

    public function add()
    {
        $this->loadModel('OfficeOrganizations');
        $office_organizations = $this->OfficeOrganizations->find('all');
        $this->set(compact('office_organizations'));

        $office_organization_structure = $this->OfficeOrganizationStructure->newEntity();
        if ($this->request->is('post')) {
            $office_organization_structure = $this->OfficeOrganizationStructure->patchEntity($office_organization_structure, $this->request->data);
            if ($this->OfficeOrganizationStructure->save($office_organization_structure)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('office_organization_structure', $office_organization_structure);
    }

    public function edit($id = null)
    {
        $office_organization_structure = $this->OfficeOrganizationStructure->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->OfficeOrganizationStructure->patchEntity($office_organization_structure, $this->request->data);
            if ($this->OfficeOrganizationStructure->save($office_organization_structure)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('office_organization_structure', $office_organization_structure);
    }

    public function view($id = null)
    {
        $office_organization_structure = $this->OfficeOrganizationStructure->get($id);
        $this->set(compact('office_organization_structure'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $office_organization_structure = $this->OfficeOrganizationStructure->get($id);
        if ($this->OfficeOrganizationStructure->delete($office_organization_structure)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}
