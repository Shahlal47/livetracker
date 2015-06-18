<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\GeoUnionsTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use App\Model\Entity\GeoUnions;
use Cake\ORM\TableRegistry;

class GeoUnionsController extends AppController
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
        $geo_union = TableRegistry::get('GeoUnions');
        $query = $geo_union->find('all');
        $this->set(compact('query'));
    }

    public function add()
    {
        $this->loadModel('GeoDistricts');
        $geo_districts = $this->GeoDistricts->find('all');
        $this->set(compact('geo_districts'));

        $this->loadModel('GeoUpazilas');
        $geo_upazilas = $this->GeoUpazilas->find('all');
        $this->set(compact('geo_upazilas'));

        $geo_union = $this->GeoUnions->newEntity();
        if ($this->request->is('post')) {
            $geo_union = $this->GeoUnions->patchEntity($geo_union, $this->request->data);
            if ($this->GeoUnions->save($geo_union)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('geo_union', $geo_union);
    }

    public function edit($id = null)
    {
        $geo_union = $this->GeoUnions->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->GeoUnions->patchEntity($geo_union, $this->request->data);
            if ($this->GeoUnions->save($geo_union)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('geo_union', $geo_union);
    }


    public function view($id = null)
    {
        $geo_union = $this->GeoUnions->get($id);
        $this->set(compact('geo_union'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $geo_union = $this->GeoUnions->get($id);
        if ($this->GeoUnions->delete($geo_union)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}
