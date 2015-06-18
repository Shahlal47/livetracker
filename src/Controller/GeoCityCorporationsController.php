<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\GeoCityCorporationsTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use App\Model\Entity\GeoCityCorporation;
use Cake\ORM\TableRegistry;

class GeoCityCorporationsController extends AppController
{
    public function index()
    {
        $geo_city_corporations = TableRegistry::get('GeoCityCorporations');
        $query = $geo_city_corporations->find('all');
        $this->set(compact('query'));
    }

    public function add()
    {
        $this->loadModel('GeoDistricts');
        $geo_districts = $this->GeoDistricts->find('all');
        $this->set(compact('geo_districts'));

        $this->loadModel('GeoDivisions');
        $geo_divisions = $this->GeoDivisions->find('all');
        $this->set(compact('geo_divisions'));

        $geo_city_corporation = $this->GeoCityCorporations->newEntity();
        if ($this->request->is('post')) {
            $geo_city_corporation = $this->GeoCityCorporations->patchEntity($geo_city_corporation, $this->request->data);
            if ($this->GeoCityCorporations->save($geo_city_corporation)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('user', $geo_city_corporation);
//        $geo_city_corporationsTable = TableRegistry::get('GeoCityCorporations');
//        $geo_city_corporation = $geo_city_corporationsTable->newEntity();
//        if ($this->request->is('post')) {
//            if ($geo_city_corporationsTable->save($geo_city_corporation)) {
//                return $this->redirect(['action' => 'index']);
//            }
//        }
//        $this->set('geo_city_corporation', $geo_city_corporation);
    }

    public function edit($id = null)
    {
        $geo_city_corporation = $this->GeoCityCorporations->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->GeoCityCorporations->patchEntity($geo_city_corporation, $this->request->data);
            if ($this->GeoCityCorporations->save($geo_city_corporation)) {
                return $this->redirect(['action' => 'index']);
            }
        }

        $this->set('geo_city_corporation', $geo_city_corporation);
    }


    public function view($id = null)
    {
        $geo_city_corporation = $this->GeoCityCorporations->get($id);
        $this->set(compact('geo_city_corporation'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $geo_city_corporation = $this->GeoCityCorporations->get($id);
        if ($this->GeoCityCorporations->delete($geo_city_corporation)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}
