<?php

class MachineDAO {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function insertMachine(Machine $machine) {
        $query = "INSERT INTO machines (hostname, ip) VALUES (?,?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ss", $machine->getHostname(), $machine->getIp());
        $stmt->execute();
    }

    public function updateMachine(Machine $machine) {
        $query = "UPDATE machines SET hostname = ?, ip = ? WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ss", $machine->getHostname(), $machine->getIp());
        $stmt->execute();
    }

    public function findMachineById($id) {
        $query = "SELECT * FROM machines WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }

    public function getAllMachines() {
        $query = "SELECT * FROM machines";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, 'Machine');
        return $result;
    }
}

?>