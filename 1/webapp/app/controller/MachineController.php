<?php
class MachineController {
    private $machine_dao;

    public function __construct(MachineDAO $machine_dao) {
        $this->machine_dao = $machine_dao;
    }

    public function listMachines() {
        $machines = $this->machine_dao->getAllMachines();
        include '..\app\view\Machine_list.php';
        
    }
}
?>