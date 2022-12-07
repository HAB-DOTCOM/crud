<?php

$result = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $command = $_POST['command'];

    if ($command) {
        $split_command = explode(" ", $command);
        $permited_commands = ['echo', 'getmac', 'dir', 'time', 'CHKDSK', 'ipconfig', 'arp', 'ping', 'traceroute'];
        $not_permitted = ['|', '||', '&', '&&'];
        $exist = false;
        foreach ($not_permitted as $sign) {
            if (in_array($sign, $split_command)) {
                $exist = true;
            }
        }

        if ($exist) {
            $result = 'unauthorized code !! ' . '<br>' . "you cannot use ' | ' in your command";
        } else {

            if (in_array($split_command[0], $permited_commands)) {
                $result = exec($command);
            } else {
                $result = 'command not found';
            }
        }
    }
}
?>
<style>
    span {
        position: center;
    }

    input {
        outline: solid;
        padding: 5px;
        padding-left: 30px;
        border: solid;
        font-size: medium;
    }

    div {
        border-top: solid 1px blue;
    }
</style>
<form action="" method="POST">
    <input type="text" name='command' required>
    
</form>
<button type="submit">run</button>
<p>
    <?php echo '<pre>';
    print_r($result);
    echo '</pre>'; ?>
</p>