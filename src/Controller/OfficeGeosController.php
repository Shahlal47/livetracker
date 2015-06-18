<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\OfficeGeosTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use App\Model\Entity\OfficeGeos;
use Cake\ORM\TableRegistry;

class OfficeGeosController extends AppController
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
        $office_geos = TableRegistry::get('OfficeGeos');
        $query = $office_geos->find('all');
        $this->set(compact('query'));
    }

    public function add()
    {
        $this->loadModel('OfficeOrganizations');
        $office_organizations = $this->OfficeOrganizations->find('all');
        $this->set(compact('office_organizations'));

        $this->loadModel('GeoDivisions');
        $geo_divisions = $this->GeoDivisions->find('all');
        $this->set(compact('geo_divisions'));

        $this->loadModel('GeoDistricts');
        $geo_districts = $this->GeoDistricts->find('all');
        $this->set(compact('geo_districts'));

        $this->loadModel('GeoUpazilas');
        $geo_upazilas = $this->GeoUpazilas->find('all');
        $this->set(compact('geo_upazilas'));

        $this->loadModel('GeoThanas');
        $geo_thanas = $this->GeoThanas->find('all');
        $this->set(compact('geo_thanas'));

        $this->loadModel('GeoUnions');
        $geo_unions = $this->GeoUnions->find('all');
        $this->set(compact('geo_unions'));

        $this->loadModel('GeoCityCorporations');
        $geo_city_corporations = $this->GeoCityCorporations->find('all');
        $this->set(compact('geo_city_corporations'));

        $this->loadModel('GeoMunicipalities');
        $geo_municipalities = $this->GeoMunicipalities->find('all');
        $this->set(compact('geo_municipalities'));

        $office_geos = $this->OfficeGeos->newEntity();
        if ($this->request->is('post')) {
            $office_geos = $this->OfficeGeos->patchEntity($office_geos, $this->request->data);
            if ($this->OfficeGeos->save($office_geos)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('office_geos', $office_geos);
    }

    public function edit($id = null)
    {
        $office_geos = $this->OfficeGeos->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->OfficeGeos->patchEntity($office_geos, $this->request->data);
            if ($this->OfficeGeos->save($office_geos)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('office_geos', $office_geos);
    }

    public function view($id = null)
    {
        $office_geos = $this->OfficeGeos->get($id);
        $this->set(compact('office_geos'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $office_geos = $this->OfficeGeos->get($id);
        if ($this->OfficeGeos->delete($office_geos)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}
