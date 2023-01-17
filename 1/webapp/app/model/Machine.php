<?php

class Machine {
    private $id;
    private $hostname;
    private $ip;
    // private $uptime;
    // private $cpu_usage;
    // private $memory_usage;
  

    //Construtor
    // public function __construct($id, $hostname, $ip, $uptime, $cpu_usage, $memory_usage) {
    public function __construct($id=null, $hostname=null, $ip=null) {
        if($id!==null) $this->id = $id;
        if ($hostname!==null)$this->hostname = $hostname;
        if ($ip!==null)$this->ip = $ip;
        // $this->uptime = $uptime;
        // $this->cpu_usage = $cpu_usage;
        // $this->memory_usage = $memory_usage;
    }

    //Getters e Setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getHostname() {
        return $this->hostname;
    }

    public function setHostname($hostname) {
        $this->hostname = $hostname;
    }

    public function getIp() {
        return $this->ip;
    }

    public function setIp($ip) {
        $this->ip = $ip;
    }
}
?>