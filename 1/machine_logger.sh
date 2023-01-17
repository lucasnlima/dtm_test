#!/bin/bash
# Constants
machine_id = 001
log_date = $(date '+%Y-%m-%d %H:%M:%S')
mysql_host = host.address
user = machine_logger
user_password = ******

# Get system info
mem_usage=$(free -m | awk 'NR==2{printf "%.2f", $3*100/$2 }')
running_processes=$(ps aux | awk '{print "[" $2 "," $11 "," $1 "]"}')
logged_users=$(who | awk '{print $1}')
cpu_usage=$(top -b -n1 | grep "Cpu(s)" | awk '{print $3 + $4}')

# Update Machine info in DB
mysql -h $mysql_host -u $user -p $user_password -e "
  USE MACHINES_DATABASE;

  INSERT INTO log (machineId, logDate, memoryUsage, loggedUsers, runningPorcess, cpuUsage
  VALUES ('$machine_id', '$log_date', '$mem_usage','$logged_users',$running_processes','$cpu_usage');
  
  UPDATE machines
  SET lastUpdateDate = '$log_date'
  WHERE id = '$machine_id';
"

Com esse scrip na máquina é 
~~~~
crontab -e
~~~~