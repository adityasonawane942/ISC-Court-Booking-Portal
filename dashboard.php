<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<?php
/* @var $this SidebarrightController */

 $this->pageTitle="Court Booking - ". Yii::app()->name;
?>

<style>
#outer {
    height: 100vh;
}
p {
    color: black;
}
button {
    outline: 0;
    border: 2px solid black;
    padding: 10px 15px;
    border-radius: 10px;
    background-color: black;
    color: white;
    transition: ease 0.3s;
}
button:hover {
    background-color: white;
    color: black;
}
input {
    outline: 0;
    padding: 10px 15px;
    border: 2px solid black;
    border-radius: 10px;
    transition: ease 0.3s;
}
input:focus {
    border: 2px solid #FCC72C;
}
select {
    outline: 0;
    padding: 5px 10px;
    border: 2px solid black;
    transition: ease 0.3s;
}
select:focus {
    border: 2px solid #FCC72C;
}
#tab {
    -ms-overflow-style: none;  /* Internet Explorer 10+ */
    scrollbar-width: none;  /* Firefox */
}
#tab::-webkit-scrollbar { 
    display: none;  /* Safari and Chrome */
}
div.container-fluid {
    background-color: rgba(0, 0, 0, 0.04);
}
.card {
    background-color: rgba(0, 0, 0, 0);
}
#fh5co-blog-section {
    padding: 7em 0 0 0; 
}
select {
    font-size: 17px;
}

@media screen and (max-width: 576px) {
    button {
        padding: 1vw 3vw;
    }
}
</style>
<html>
<body>
<div class="fh5co-overlay" style=" height: 80px;"></div>
<div id="fh5co-blog-section" class="fh5co-section-gray">
  <div class="container" style="margin-top:60px;">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
        <h3>Court Booking</h3>
      </div>
    </div>
  </div>
</div>

<?php

session_start();
$_SESSION["fac"] = '';

?>

<?php

$connection = Yii::app()->db;

// $servername = "localhost";
// $username = "usera";
// $password = "test1234";
// $dbname = "trial";

// $connection = mysqli_connect($servername, $username, $password, $dbname);

if ($connection) {
    // echo 'conn';
} else {
    die("Connection failed.");
}

if(isset($_SESSION["logdata"])) {
    $ud = $_SESSION["logdata"]; 
    $roll = $ud['user_information']['username'];
}
else {
    $roll = '';
    echo "<script type='text/javascript'>window.top.location='https://gymkhana.iitb.ac.in/~sports/index.php?r=site/userlogin';</script>";
}

?>

<div class="outer">
<div class="container-fluid">
    <div style="display: inline-block; width: 100%;">
        <div style="display: inline-block; width: 78%;">
            <h2 style="padding: 10px 0;"><b>Welcome <?php echo $roll ?></b></h2>
        </div>
        <div style="text-align: end; display: inline-block; width: 18%;">
            <button id="logout">Logout</button>
        </div>
    </div>
    <br>
</div>

<?php

echo '<div class="container-fluid">';
echo '<h4><b>Booked Slots</b></h4>';
echo '<hr style="margin-top: 0; border-top: 1px solid black; margin-bottom: 0.5rem;">';
$currtime = date("Y-m-d H:i", time());
$booked = $connection->createCommand("SELECT * FROM booked_slots WHERE booked_by='$roll' AND status=1 AND slot_time > '$currtime' ORDER BY timestamp DESC")->queryAll();
$nbooked = count($booked);
if($nbooked>0) {
    echo '<div id="tab" class="table-responsive">
    <table style="text-align: center;" class="table table-borderless table-sm">
        <thead>
        <tr>
        <th>Slot ID</th>
        <th>Slot Time</th>
        <th>Facility</th>
        <th>Court/Table #</th>
        <th>Slot booked for</th>
        <th>Roll #s</th>
        <th>Drop</th>
        </tr>
        </thead>
        <tbody>';
    foreach($booked as $slot) {
        $i = $slot['court_no'];
        $rd = $slot['player_details'];
        $fd = json_decode($rd);
        $co = count($fd->$i);
        echo '<tr>
            <td>'.$slot['slot_id'].'</td>
            <td>'.$slot['slot_time'].'</td>
            <td>'.$slot['facility'].'</td>
            <td>'.$slot['court_no'].'</td>
            <td>'.$slot['no_of_players'].'</td>
            <td>';
        for($j = 0; $j<$co-1; $j++) {
            echo $fd->$i[$j]->roll_number.', ';
        }
        echo $fd->$i[$co-1]->roll_number.'</td>';
        $finaldd = str_replace('"', "'", $slot['player_details']);
        echo '<td><button onclick="dropper('.$slot['slot_id'].','.$slot['court_no'].','.$finaldd.','.$slot['startpos'].','.$slot['no_of_players'].')">Drop</button></td>
            </tr>'; 
    }
    echo '</tbody>
    </table>
    </div>';
}
else {
    echo '<div><p>You have no booked slots.</p></div>';
}

echo '<br>';
echo '</div>';

echo '<div class="container-fluid">';
echo '<h4><b>Available Slots</b></h4>';
echo '<hr style="margin-top: 0; border-top: 1px solid black;">';

$facility = 'Tennis Court';

?>

<div>
    <select id="fac" value="<?php echo $facility ?>" onchange="changefac()">
        <option>Tennis Court</option>
        <!-- <option>Badminton Court</option> -->
        <!-- <option>Table Tennis Room</option> -->
    </select>
    <button style="display: none;" id="viewdet" type="button">Click Me</button>
    <button style="display: none;" id="finalsub" type="button">Click Me</button>
    <button style="display: none;" id="dropslot" type="button">Click Me</button>
</div>

<?php

date_default_timezone_set("Asia/Kolkata");

// if($_SESSION["fac"]=='') {
//     $facility = "Tennis Court";
// }
// else {
//     $facility = $_SESSION["fac"];
// }

if($nbooked==0) {
    $currtime = date_format(date_add(date_create(date("Y-m-d H:i", time())), date_interval_create_from_date_string("1 hours")), "Y-m-d H:i");
    $fintime = date_format(date_add(date_create(date("Y-m-d H:i", time())), date_interval_create_from_date_string("24 hours")), "Y-m-d H:i");
    $result = $connection->createCommand("SELECT * FROM available_slots WHERE facility='$facility' AND (slot_time < '$fintime' AND slot_time > '$currtime') ORDER BY slot_time")->queryAll();
    $navail = count($result);
    if($navail>0) {
        $ind = -1;
        echo '<div>';
        echo '<div class="row">';
        foreach($result as $entry) {
            $ind++;
            $data = json_decode($entry['booking_details']);
            $finalst = str_replace('"', "'", $entry['booking_details']);
            echo '<div class="col-sm-6">';
            echo '<div class="card" style="border: 0;">';
            echo '<div class="card-body text-center">';
            echo '<p style="margin: 0;">Slot Time: '.$entry['slot_time'].'</p>';
            echo '<p style="margin: 0;">Availability</p>';
            echo '<div class="row">';
            for($i = 1; $i <= $entry['no_of_courts']; $i++) {
                $count = $entry['allowed_players'];
                for($j = 0; $j < $entry['allowed_players']; $j++) {
                    if($data->$i[$j]->roll_number) {
                        $count--;
                    }
                }
                
                if ($count==$entry['allowed_players']) {
                    $color = 'lawngreen';
                }
                elseif ($count==0) {
                    $color = 'red';
                }
                else {
                    $color = 'yellow';
                }
        
                echo '<div class="col-sm-2" onclick="details('.$ind.','.$i.','.$count.','.$entry['allowed_players'].','.$entry['slot_id'].','.$finalst.',`'.$facility.'`,`'.$entry['slot_time'].'`);" style="cursor: pointer; border: 1px solid black; background-color: '.$color.';">';
                echo 'C'.$i.'<br>';
                echo $count.'/'.$entry['allowed_players'];
        
                echo '</div>';
            }
            echo '</div>';
            echo '<div name="det">';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
        echo '<br>';
        echo '</div>';
    }
    else {
        echo '<p>No slots available in the next 24 hours.</p>';
        echo '<br><br>';
        echo '</div>';
    }
}
else if($nbooked>0) {
    $currtime = date("Y-m-d H:i", time());
    $fintime = date_format(date_add(date_create(date("Y-m-d H:i", time())), date_interval_create_from_date_string("1 hours")), "Y-m-d H:i");
    $result = $connection->createCommand("SELECT * FROM available_slots WHERE facility='$facility' AND (slot_time < '$fintime' AND slot_time > '$currtime') ORDER BY slot_time")->queryAll();
    $navail = count($result);
    if($navail>0) {
        $ind = -1;
        echo '<div>';
        echo '<div class="row">';
        foreach($result as $entry) {
            $ind++;
            $data = json_decode($entry['booking_details']);
            $finalst = str_replace('"', "'", $entry['booking_details']);
            echo '<div class="col-sm-6">';
            echo '<div class="card" style="border: 0;">';
            echo '<div class="card-body text-center">';
            echo '<p style="margin: 0;">Slot Time: '.$entry['slot_time'].'</p>';
            echo '<p style="margin: 0;">Availability</p>';
            echo '<div class="row">';
            for($i = 1; $i <= $entry['no_of_courts']; $i++) {
                $count = $entry['allowed_players'];
                for($j = 0; $j < $entry['allowed_players']; $j++) {
                    if($data->$i[$j]->roll_number) {
                        $count--;
                    }
                }
                
                if ($count==$entry['allowed_players']) {
                    $color = 'lawngreen';
                }
                elseif ($count==0) {
                    $color = 'red';
                }
                else {
                    $color = 'yellow';
                }
        
                echo '<div class="col-sm-2" onclick="details('.$ind.','.$i.','.$count.','.$entry['allowed_players'].','.$entry['slot_id'].','.$finalst.',`'.$facility.'`,`'.$entry['slot_time'].'`)" style="cursor: pointer; border: 1px solid black; background-color: '.$color.';">';
                echo 'C'.$i.'<br>';
                echo $count.'/'.$entry['allowed_players'];
        
                echo '</div>';
            }
            echo '</div>';
            echo '<div name="det">';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
        echo '<br>';
        echo '</div>';
    }
    else {
        echo '<p>No slots available in the next 1 hour.</p>';
        echo '<br><br>';
        echo '</div>';
    }
}

?>

</div>

<script type="text/javascript">

function details(ind, cno, avail, lim, sid, bdata, fac, slottime) {
    console.log(ind, cno, avail, sid, bdata, fac, slottime);
    var inner = '<div class="row"><div class="col-sm-4"><p style="margin: 0;">Court No. '+cno+'</p></div><div class="col-sm-8" style="margin: 0;"><p style="margin: 0;">Places Available: '+avail+' out of '+lim+'</p></div>';
    var count = 0;
    for(var i = 0; i < lim; i++) {
        if(bdata[cno][i].roll_number) {
            count++;
        }
    }

    var jsbdata = JSON.stringify(bdata);
    var newTemp = jsbdata.replace(/"/g, "'");

    var currcount = count;

    for(; count < lim; count++) {
        inner = inner + '<div class="col-sm-6"><input style="margin: 5px;" name="namez" placeholder="Roll Number" type="text" value=""></div>';
    }

    if(inner!='<div class="row"><div class="col-sm-4"><p style="margin: 0;">Court No. '+cno+'</p></div><div class="col-sm-8" style="margin: 0;"><p style="margin: 0;">Places Available: '+avail+' out of '+lim+'</p></div>') {
        inner = inner + '<div class="col-sm-6"><button style="margin: 5px;" onclick="submit('+ind+','+cno+','+sid+','+newTemp+','+currcount+','+count+',`'+fac+'`,`'+slottime+'`);">Proceed</button></div>';
    }

    inner = inner + '</div>';
    document.getElementsByName('det')[ind].innerHTML = inner;
}

var findata = '';
var sloid = '';
var slotime = '';
var facty = ''
var courno = '';
var nop = '';
var startpos = '';
var dropslotid = '';
var dropslotcourtno = '';

function changefac() {
    console.log(document.getElementById('fac').value);
    facty = document.getElementById('fac').value;
    console.log(facty);
    document.getElementById('viewdet').click();
}

function submit(ind, cno, sid, bdata, ini, fin, faci, slott) {
    console.log(ind, cno, sid, bdata, ini, fin, faci, slott);
    var count = 0;
    var filled = 0;

    for(var i = ini; i < fin; i++) {
        if(document.getElementsByName('namez')[count].value!='') {
            // count++;
            filled++;
        }
        count++;
    }

    console.log(count);

    if(filled == 0) {
        alert('Please enter at least one name');
        return;
    }

    count = 0;

    for(var i = ini; i < fin; i++) {
        // console.log(document.getElementsByName('namez')[count].value);
        // console.log(bdata[cno][i].roll_number);
        bdata[cno][i].roll_number = document.getElementsByName('namez')[count].value;
        // console.log(bdata[cno][i].roll_number)
        count++;
    }

    findata = bdata;
    sloid = sid;
    slotime = slott;
    facty = faci;
    courno = cno;
    nop = filled;
    startpos = ini;
    console.log(bdata);
    console.log(findata);
    console.log(sloid);
    console.log(slotime);
    console.log(facty);
    console.log(courno);
    console.log(nop);

    var result = confirm("Are you sure you want to book the selected court in the selected slot?");
    if(result) {
        console.log("ok");
        document.getElementById('finalsub').click();
    }
    else {
        console.log("cancel");
    }
}

function dropper(slotid, courtno, pdet, stposi, bfor) {
    console.log(courtno, slotid, pdet, stposi, bfor);
    findata = pdet;
    for(var i = 0; i < bfor; i++) {
        findata[courtno][stposi+i].roll_number = '';
    }
    console.log(findata);
    dropslotid = slotid;
    dropslotcourtno = courtno;
    var result = confirm("Are you sure you want to drop the booking?");
    if(result) {
        console.log("ok");
        document.getElementById('dropslot').click();
    }
    else {
        console.log("cancel");
    }
}

$("#viewdet").click({param: "viewdet"}, fin);
$("#dropslot").click({param: "dropslot"}, fin);
$("#finalsub").click({param: "formsubmit"}, fin);
$("#logout").click({param: "logout"}, fin);

function fin(event){
    console.log(findata);
    console.log(event.data.param);
    console.log(facty);
    $.ajax({
        type: "POST",
        url: "https://gymkhana.iitb.ac.in/~sports/index.php?r=site/helper",
        data: {c: event.data.param, fac: facty, ds: JSON.stringify({slotid: dropslotid, courtno: dropslotcourtno}), bs: JSON.stringify({slotid: sloid, slottime: slotime, fac: facty, courtno: courno, nofpl: nop, stpos: startpos}), dd: JSON.stringify(findata)},
        success: function(data) {
            if(data=="logged out") {
                window.top.location='https://gymkhana.iitb.ac.in/~sports/index.php?r=site/courtbooking';
            }
            else if(data=="dropped") {
                location.reload();
            }
            else if(data=="booked") {
                location.reload();
            }
            else {
                location.reload();
                console.log(data);
            }
        }
    });
}

</script>

</body>
</html>