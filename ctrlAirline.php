
<?php


class ctrlAirline extends clsControllerBase
{
    public function getIndex() {
        include ROOT_PATH.DS.'mvc'.DS.'modelos'.DS.'modAirline.php';
        $this->template->show("visAirline.php");
    }

    public function getAllAirlines() {
        include ROOT_PATH.DS.'mvc'.DS.'modelos'.DS.'modAirline.php';
        $obj = new clsModAirline();
        //$rows = $obj->get()->fetchAll();
        echo json_encode($obj->get()->fetchAll());
        //return $rows;
    }

    public function createAirline() {
        include ROOT_PATH.DS.'mvc'.DS.'modelos'.DS.'modAirline.php';
        $obj = new clsModAirline();
        $obj->name    = $_POST['name'];

         echo json_encode($obj->createAirline()->fetchAll()); 
    }

    public function updateAirline() {
        include ROOT_PATH.DS.'mvc'.DS.'modelos'.DS.'modAirline.php';
        $obj = new clsModAirline();
        $obj->idAirline  = $_POST['idAirline'];
        $obj->name    = $_POST['name'];        

        echo json_encode($obj->updateAirline()->fetchAll()); 
    }

    public function deleteAirline() {
        include ROOT_PATH.DS.'mvc'.DS.'modelos'.DS.'modAirline.php';
        $obj = new clsModAirline();
        $obj->idAirline  = $_POST['idAirline'];

        echo json_encode($obj->deleteAirline()->fetchAll()); 
             
    }

    function convertUTF8($data){
        return utf8_encode($data);
    }
}