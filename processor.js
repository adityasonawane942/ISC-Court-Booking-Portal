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
var dropslotid = '';
var dropslotcourtno = '';

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

function dropper(slotid, courtno) {
    console.log(courtno, slotid);
    dropslotid = slotid;
    dropslotcourtno = courtno;
    document.getElementById('dropslot').click();
}

$("#dropslot").click({param: "dropslot"}, fin);
$("#finalsub").click({param: "formsubmit"}, fin);
$("#logout").click({param: "logout"}, fin);

function fin(event){
    console.log(findata);
    console.log(event.data.param);
    $.ajax({
        type: 'POST',
        url: 'finalsub.php',
        data: {c: event.data.param, ds: JSON.stringify({slotid: dropslotid, courtno: dropslotcourtno}), bs: JSON.stringify({slotid: sloid, slottime: slotime, fac: facty, courtno: courno, nofpl: nop}), dd: JSON.stringify(findata)},
        success: function(data) {
            if(data=="logged out") {
                window.top.location='http://localhost/booking/';
            }
            else if(data=="dropped") {
                location.replace("http://localhost/booking/dashboard.php");
            }
            else {
                console.log(data);
            }
        }
    });
}