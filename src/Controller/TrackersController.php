<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table\TrackersTable;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

class TrackersController extends AppController
{
    public function index()
    {

    }

    public function live()
    {
        $query = $this->Trackers->find('all', ['order' => ['Trackers.event_number' => 'ASC']]);
        $row = $query->first();
        $this->set(compact('row'));
    }

    public function history()
    {
        $query = $this->Trackers->find('all', ['order' => ['Trackers.event_number' => 'ASC']]);
        $row_first = $query->first();
        $this->set(compact('row_first'));

        $result = $this->Trackers->find('all', ['order' => ['Trackers.event_number' => 'DESC']]);
        $row_last = $result->first();
        $this->set(compact('row_last'));


        if($this->request->is('post')){

            $trackers = TableRegistry::get('Trackers');
            $data = $this->request->data;

            if(!empty($data)) {

                $server_date_start = date('Y-m-d', strtotime($data['server_date_start']));
                $server_date_end = date('Y-m-d', strtotime($data['server_date_end']));

                $server_time_start = date('H:i:s', strtotime($data['server_time_start']));
                $server_time_end = date('H:i:s', strtotime($data['server_time_end']));

                $locations1 = $trackers
                    ->find('all')
                    ->where([
                        'server_date BETWEEN \''.$server_date_start.'\' AND \''.$server_date_end.'\''
                    ])
                    ->andwhere([
                        'server_time BETWEEN \''.$server_time_start.'\' AND \''.$server_time_end.'\''
                    ]);


                $server_date = date('Y-m-d', strtotime($data['server_date']));
                $server_time_start = date('H:i:s', strtotime($data['server_time_start']));
                $server_time_end = date('H:i:s', strtotime($data['server_time_end']));

                $locations2 = $trackers
                    ->find('all')
                    ->where(['server_date' => $server_date])
                    ->andwhere([
                        'server_time BETWEEN \''.$server_time_start.'\' AND \''.$server_time_end.'\''
                    ]);

                if (!empty($locations1) || !empty($locations2)) {
                    $this->set(array('locations1' => $locations1, 'locations2' => $locations2));
                }
            }
        }
    }

    public function animation()
    {
        $trackers = TableRegistry::get('Trackers');
        $rows = $trackers->find('all')->where(['server_date' => '2014-09-25']);

        $this->set(compact('rows'));
    }
}