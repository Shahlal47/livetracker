<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table;
use App\Model\Table\GeoDistrictsTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use App\Model\Entity\GeoDistricts;
use Cake\ORM\TableRegistry;

class GeoDistrictsController extends AppController
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
        $geo_district = TableRegistry::get('GeoDistricts');
        $query = $geo_district->find('all');
        $this->set(compact('query'));
    }

    public function add()
    {
        $this->loadModel('GeoDivisions');
        $geo_divisions = $this->GeoDivisions->find('all');
        $this->set(compact('geo_divisions'));

        $geo_district = $this->GeoDistricts->newEntity();
        if ($this->request->is('post')) {
            $geo_district = $this->GeoDistricts->patchEntity($geo_district, $this->request->data);
            if ($this->GeoDistricts->save($geo_district)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('user', $geo_district);
    }

    public function edit($id = null)
    {
        $geo_district = $this->GeoDistricts->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->GeoDistricts->patchEntity($geo_district, $this->request->data);
            if ($this->GeoDistricts->save($geo_district)) {
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('geo_district', $geo_district);
    }


    public function view($id = null)
    {
        $geo_district = $this->GeoDistricts->get($id);
        $this->set(compact('geo_district'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $geo_district = $this->GeoDistricts->get($id);
        if ($this->GeoDistricts->delete($geo_district)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}
