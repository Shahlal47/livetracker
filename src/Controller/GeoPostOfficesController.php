<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\GeoPostOfficesTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use App\Model\Entity\GeoPostOffices;
use Cake\ORM\TableRegistry;

class GeoPostOfficesController extends AppController
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
        $geo_post_office = TableRegistry::get('GeoPostOffices');
        $query = $geo_post_office->find('all');
        $this->set(compact('query'));
    }

    public function add()
    {
        $this->loadModel('GeoDistricts');
        $geo_districts = $this->GeoDistricts->find('all');
        $this->set(compact('geo_districts'));

        $geo_post_office = $this->GeoPostOffices->newEntity();
        if ($this->request->is('post')) {
            $geo_post_office = $this->GeoPostOffices->patchEntity($geo_post_office, $this->request->data);
            if ($this->GeoPostOffices->save($geo_post_office)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('geo_post_office', $geo_post_office);
    }

    public function edit($id = null)
    {
        $geo_post_office = $this->GeoPostOffices->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->GeoPostOffices->patchEntity($geo_post_office, $this->request->data);
            if ($this->GeoPostOffices->save($geo_post_office)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('geo_post_office', $geo_post_office);
    }


    public function view($id = null)
    {
        $geo_post_office = $this->GeoPostOffices->get($id);
        $this->set(compact('geo_post_office'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $geo_post_office = $this->GeoPostOffices->get($id);
        if ($this->GeoPostOffices->delete($geo_post_office)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}
