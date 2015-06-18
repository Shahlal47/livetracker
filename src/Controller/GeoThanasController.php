<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\GeoThanasTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use App\Model\Entity\GeoThanas;
use Cake\ORM\TableRegistry;

class GeoThanasController extends AppController
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
        $geo_thana = TableRegistry::get('GeoThanas');
        $query = $geo_thana->find('all');
        $this->set(compact('query'));
    }

    public function add()
    {
        $this->loadModel('GeoDistricts');
        $geo_districts = $this->GeoDistricts->find('all');
        $this->set(compact('geo_districts'));

        $geo_thana = $this->GeoThanas->newEntity();
        if ($this->request->is('post')) {
            $geo_thana = $this->GeoThanas->patchEntity($geo_thana, $this->request->data);
            if ($this->GeoThanas->save($geo_thana)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('geo_thana', $geo_thana);
    }

    public function edit($id = null)
    {
        $geo_thana = $this->GeoThanas->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->GeoThanas->patchEntity($geo_thana, $this->request->data);
            if ($this->GeoThanas->save($geo_thana)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('geo_thana', $geo_thana);
    }


    public function view($id = null)
    {
        $geo_thana = $this->GeoThanas->get($id);
        $this->set(compact('geo_thana'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $geo_thana = $this->GeoThanas->get($id);
        if ($this->GeoThanas->delete($geo_thana)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}
