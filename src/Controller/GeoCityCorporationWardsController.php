<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\GeoCityCorporationWardsTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use App\Model\Entity\GeoCityCorporationWards;
use Cake\ORM\TableRegistry;

class GeoCityCorporationWardsController extends AppController
{
    public function index()
    {
        $geo_city_corporation_wards = TableRegistry::get('GeoCityCorporationWards');
        $query = $geo_city_corporation_wards->find('all');
        $this->set(compact('query'));
    }

    public function add()
    {
        $this->loadModel('GeoCityCorporations');
        $geo_city_corporations = $this->GeoCityCorporations->find('all');
        $this->set(compact('geo_city_corporations'));

        $this->loadModel('GeoDistricts');
        $geo_districts = $this->GeoDistricts->find('all');
        $this->set(compact('geo_districts'));

        $this->loadModel('GeoDivisions');
        $geo_divisions = $this->GeoDivisions->find('all');
        $this->set(compact('geo_divisions'));

        $geo_city_corporation_wards = $this->GeoCityCorporationWards->newEntity();
        if ($this->request->is('post')) {
            $geo_city_corporation_wards = $this->GeoCityCorporationWards->patchEntity($geo_city_corporation_wards, $this->request->data);
            if ($this->GeoCityCorporationWards->save($geo_city_corporation_wards)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('geo_city_corporation_wards', $geo_city_corporation_wards);
    }

    public function edit($id = null)
    {
        $geo_city_corporation_wards = $this->GeoCityCorporationWards->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->GeoCityCorporationWards->patchEntity($geo_city_corporation_wards, $this->request->data);
            if ($this->GeoCityCorporationWards->save($geo_city_corporation_wards)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('geo_city_corporation_ward', $geo_city_corporation_wards);
    }


    public function view($id = null)
    {
        $geo_city_corporation_wards = $this->GeoCityCorporationWards->get($id);
        $this->set(compact('geo_city_corporation_wards'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $geo_city_corporation_wards = $this->GeoCityCorporationWards->get($id);
        if ($this->GeoCityCorporationWards->delete($geo_city_corporation_wards)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}
