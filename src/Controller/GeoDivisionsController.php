<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\GeoDivisionsTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use App\Model\Entity\GeoDivisions;
use Cake\ORM\TableRegistry;

class GeoDivisionsController extends AppController
{
    public $paginate = [
        'fields' => ['Districts.id'],
        'limit' => 25,
        'order' => [
            'Districts.id' => 'asc'
        ]
    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    public function index()
    {
        $geo_division = TableRegistry::get('GeoDivisions');
        $query = $geo_division->find('all');
        $this->set(compact('query'));
    }

    public function add()
    {

        $geo_division = $this->GeoDivisions->newEntity();
        if ($this->request->is('post')) {
            $geo_division = $this->GeoDivisions->patchEntity($geo_division, $this->request->data);
            if ($this->GeoDivisions->save($geo_division)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('geo_division', $geo_division);
    }

    public function edit($id = null)
    {
        $geo_division = $this->GeoDivisions->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->GeoDivisions->patchEntity($geo_division, $this->request->data);
            if ($this->GeoDivisions->save($geo_division)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('geo_division', $geo_division);
    }

    public function view($id = null)
    {
        $geo_division = $this->GeoDivisions->get($id);
        $this->set(compact('geo_division'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $geo_division = $this->GeoDivisions->get($id);
        if ($this->GeoDivisions->delete($geo_division)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}
