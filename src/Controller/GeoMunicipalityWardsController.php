<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\GeoMunicipalityWardsTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use App\Model\Entity\GeoMunicipalityWards;
use Cake\ORM\TableRegistry;

class GeoMunicipalityWardsController extends AppController
{
    public function index()
    {
        $geo_municipality_wards = TableRegistry::get('GeoMunicipalityWards');
        $query = $geo_municipality_wards->find('all');
        $this->set(compact('query'));
    }

    public function add()
    {
        $this->loadModel('GeoDistricts');
        $geo_districts = $this->GeoDistricts->find('all');
        $this->set(compact('geo_districts'));

        $this->loadModel('GeoMunicipalities');
        $geo_municipalities = $this->GeoMunicipalities->find('all');
        $this->set(compact('geo_municipalities'));

        $this->loadModel('GeoUpazilas');
        $geo_upazilas = $this->GeoUpazilas->find('all');
        $this->set(compact('geo_upazilas'));

        $geo_municipality_wards = $this->GeoMunicipalityWards->newEntity();
        if ($this->request->is('post')) {
            $geo_municipality_wards = $this->GeoMunicipalityWards->patchEntity($geo_municipality_wards, $this->request->data);
            if ($this->GeoMunicipalityWards->save($geo_municipality_wards)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('geo_municipality_wards', $geo_municipality_wards);
    }

    public function edit($id = null)
    {
        $geo_municipality_wards = $this->GeoMunicipalityWards->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->GeoMunicipalityWards->patchEntity($geo_municipality_wards, $this->request->data);
            if ($this->GeoMunicipalityWards->save($geo_municipality_wards)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('geo_municipality_wards', $geo_municipality_wards);
    }

    public function view($id = null)
    {
        $geo_municipality_wards = $this->GeoMunicipalityWards->get($id);
        $this->set(compact('geo_municipality_wards'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $geo_municipality_wards = $this->GeoMunicipalityWards->get($id);
        if ($this->GeoMunicipalityWards->delete($geo_municipality_wards)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}
