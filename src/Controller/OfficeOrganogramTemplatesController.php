<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\OfficeOrganogramTemplatesTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use App\Model\Entity\OfficeOrganogramTemplates;
use Cake\ORM\TableRegistry;

class OfficeOrganogramTemplatesController extends AppController
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
        $office_oraganogram_templates = TableRegistry::get('OfficeOrganogramTemplates');
        $query = $office_oraganogram_templates->find('all');
        $this->set(compact('query'));
    }

    public function add()
    {
        $this->loadModel('OfficeOrganizationStructure');
        $office_organization_structures = $this->OfficeOrganizationStructure->find('all');
        $this->set(compact('office_organization_structures'));

        $this->loadModel('OfficeOrganizations');
        $office_organizations = $this->OfficeOrganizations->find('all');
        $this->set(compact('office_organizations'));

        $office_oraganogram_templates = $this->OfficeOrganogramTemplates->newEntity();
        if ($this->request->is('post')) {
            $office_oraganogram_templates = $this->OfficeOrganogramTemplates->patchEntity($office_oraganogram_templates, $this->request->data);
            if ($this->OfficeOrganogramTemplates->save($office_oraganogram_templates)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('office_oraganogram_templates', $office_oraganogram_templates);
    }

    public function edit($id = null)
    {
        $office_oraganogram_templates = $this->OfficeOrganogramTemplates->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->OfficeOrganogramTemplates->patchEntity($office_oraganogram_templates, $this->request->data);
            if ($this->OfficeOrganogramTemplates->save($office_oraganogram_templates)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('office_oraganogram_templates', $office_oraganogram_templates);
    }

    public function view($id = null)
    {
        $office_oraganogram_templates = $this->OfficeOrganogramTemplates->get($id);
        $this->set(compact('office_oraganogram_templates'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $office_oraganogram_templates = $this->OfficeOrganogramTemplates->get($id);
        if ($this->OfficeOrganogramTemplates->delete($office_oraganogram_templates)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}
