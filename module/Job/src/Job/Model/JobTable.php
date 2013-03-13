<?php
namespace Job\Model;

use Zend\Db\TableGateway\TableGateway;

class JobTable
{
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }

    public function getJob($id)
    {
        $id  = (int) $id;
        $rowset = $this->tableGateway->select(array('id' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id");
        }
        return $row;
    }

    public function saveJob(Job $job)
    {
        $data = array(
            'artist' => $job->artist,
            'title'  => $job->title,
        );

        $id = (int)$job->id;
        if ($id == 0) {
            $this->tableGateway->insert($data);
        } else {
            if ($this->getJob($id)) {
                $this->tableGateway->update($data, array('id' => $id));
            } else {
                throw new \Exception('Form id does not exist');
            }
        }
    }

    public function deleteJob($id)
    {
        $this->tableGateway->delete(array('id' => $id));
    }
}
