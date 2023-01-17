<!DOCTYPE html>
<html>

<head>
    <title>DTM TOOLS - Machine List</title>
</head>

<body>
    <h1>Machine List</h1>
    <table>
        <thead>
        </thead>
        <tbody>
            <?php foreach ($machines as $machine) { ?>
                <tr>
                    <td>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Host: <?php echo $machine->getHostname(); ?></h5>
                                <p class="card-text"><?php echo $machine->getIp(); ?></p>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>