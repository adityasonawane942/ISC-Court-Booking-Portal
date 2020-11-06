<?php 
    session_start();
    $connection = Yii::app()->db;
    if ($connection) {
        // echo 'conn';
    } else {
        die("Connection failed.");
    }
    // $servername = "localhost";
    // $username = "usera";
    // $password = "test1234";
    // $dbname = "trial";

    // $connection = mysqli_connect($servername, $username, $password, $dbname);

    if(isset($_POST['dd']) && isset($_POST['fac']) && isset($_POST['c']) && isset($_POST['bs']) && isset($_POST['ds'])) {
        $details = $_POST['dd'];
        $sscdd = $_POST['c'];
        $facility = $_POST['fac'];
        $bookobj = json_decode($_POST['bs']);
        $dropobj = json_decode($_POST['ds']);
        if($sscdd=="formsubmit") {
            $ud = $_SESSION["logdata"]; 
            $roll = $ud['user_information']['username'];
            try {
                $sql = $connection->createCommand("INSERT INTO booked_slots (booked_by, slot_id, slot_time, facility, court_no, no_of_players, startpos, player_details, status) VALUES ('$roll', '$bookobj->slotid', '$bookobj->slottime', '$bookobj->fac', '$bookobj->courtno', '$bookobj->nofpl', '$bookobj->stpos', '$details', 1)");
                $sql->execute();
                $sqltwo = $connection->createCommand("UPDATE available_slots SET booking_details='$details' WHERE slot_id='$bookobj->slotid'");
                $sqltwo->execute();
                die("booked");
            } catch (Exception $ex) {
                die('Query failed '.$ex->getMessage());
            }
        }
        else if($sscdd=="signin") {
            $sql = $connection->createCommand("SELECT * from booking_admins WHERE username='$facility' AND password='$details'")->queryAll();
            $count = count($sql);
            if($count) {
                die("found");
            }
            else {
                die("nf");
            }
        }
        else if($sscdd=="logout") {
            session_unset();
            session_destroy();
            die('logged out');
        }
        else if($sscdd=="dropslot") {
            try {
                $sqlth = $connection->createCommand("UPDATE booked_slots SET status=0 WHERE slot_id='$dropobj->slotid' AND court_no='$dropobj->courtno'");
                $sqlth->execute();
                $sqlfour = $connection->createCommand("UPDATE available_slots SET booking_details='$details' WHERE slot_id='$dropobj->slotid'");
                $sqlfour->execute();
                die("dropped");
            } catch (Exception $ex) {
                die('Query failed '.$ex->getMessage());
            }
        }
        else if($sscdd=="viewdet") {
            $_SESSION["fac"] = $facility;
            die($_SESSION["fac"]);
        }
    }

 ?>