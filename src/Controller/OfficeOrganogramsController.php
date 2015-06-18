<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\OfficeOrganogramsTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use App\Model\Entity\OfficeOrganograms;
use Cake\ORM\TableRegistry;

class OfficeOrganogramsController extends AppController
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
        $office_oraganograms = TableRegistry::get('OfficeOrganograms');
        $query = $office_oraganograms->find('all');
        $this->set(compact('query'));
    }

    public function add()
    {
        $this->loadModel('OfficeOrganizations');
        $office_organizations = $this->OfficeOrganizations->find('all');
        $this->set(compact('office_organizations'));

        $office_oraganograms = $this->OfficeOrganograms->newEntity();
        if ($this->request->is('post')) {
            $office_oraganograms = $this->OfficeOrganograms->patchEntity($office_oraganograms, $this->request->data);
            if ($this->OfficeOrganograms->save($office_oraganograms)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('office_oraganograms', $office_oraganograms);
    }

    public function edit($id = null)
    {
        $office_oraganograms = $this->OfficeOrganograms->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->OfficeOrganograms->patchEntity($office_oraganograms, $this->request->data);
            if ($this->OfficeOrganograms->save($office_oraganograms)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('office_oraganograms', $office_oraganograms);
    }

    public function view($id = null)
    {
        $office_oraganograms = $this->OfficeOrganograms->get($id);
        $this->set(compact('office_oraganograms'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $office_oraganograms = $this->OfficeOrganograms->get($id);
        if ($this->OfficeOrganograms->delete($office_oraganograms)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}
