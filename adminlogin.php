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

 $this->pageTitle="Court Booking Admin - ". Yii::app()->name;
?>

<style>
p {
    margin : 0;
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
#signin {
  background-color: black; 
  padding: 10px 20px; 
  border-radius: 10px; 
  text-decoration: none;
  color: white; 
  border: 2px solid black;
  transition: ease 0.3s;
}
#fh5co-blog-section {
    padding: 7em 0 0 0; 
}
.container-fluid {
    padding: 0 15px 101px 15px;
}

@media screen and (max-width: 576px) {
  .container-fluid {
    padding: 0 15px 50px 15px;
  }
}
</style>
<html>
<body>

<script type="text/javascript">

function signin() {
    n = document.getElementById('us').value;
    w = document.getElementById('ps').value;
    console.log(n,w);
    $.ajax({
        type: "POST",
        url: "https://gymkhana.iitb.ac.in/~sports/index.php?r=site/helper",
        data: {c: 'signin', fac: n, ds: 'fdg', bs: 'fsd', dd: w},
        success: function(data) {
            console.log(data);
        }
    });
}

</script>

<div class="fh5co-overlay" style=" height: 80px;"></div>
<div id="fh5co-blog-section" class="fh5co-section-gray">
  <div class="container" style="margin-top:60px;">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
        <h3>Court Booking Admin</h3>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid" style="background-color: rgba(0, 0, 0, 0.04); text-align: center;">
    <div class="row">
        <div class="offset-sm-3"></div>
        <div class="col-sm-6">
            <div class="card" style="border: 0; background-color: rgba(0, 0, 0, 0);">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <p>Username</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <input id="us" type="text" name="username" placeholder="Username">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <p>Password</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <input id="ps" type="password" name="word" placeholder="Password">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <button id="signin" onclick="signin()">Sign In</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>