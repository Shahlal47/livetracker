<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\GeoMunicipalitiesTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use App\Model\Entity\GeoMunicipalities;
use Cake\ORM\TableRegistry;

class GeoMunicipalitiesController extends AppController
{
    public function index()
    {
        $geo_municipalities = TableRegistry::get('GeoMunicipalities');
        $query = $geo_municipalities->find('all');
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

        $geo_municipalities = $this->GeoMunicipalities->newEntity();
        if ($this->request->is('post')) {
            $geo_municipalities = $this->GeoMunicipalities->patchEntity($geo_municipalities, $this->request->data);
            if ($this->GeoMunicipalities->save($geo_municipalities)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('geo_municipalities', $geo_municipalities);
    }

    public function edit($id = null)
    {
        $geo_municipalities = $this->GeoMunicipalities->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->GeoMunicipalities->patchEntity($geo_municipalities, $this->request->data);
            if ($this->GeoMunicipalities->save($geo_municipalities)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('geo_municipalities', $geo_municipalities);
    }

    public function view($id = null)
    {
        $geo_municipalities = $this->GeoMunicipalities->get($id);
        $this->set(compact('geo_municipalities'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $geo_municipalities = $this->GeoMunicipalities->get($id);
        if ($this->GeoMunicipalities->delete($geo_municipalities)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}
