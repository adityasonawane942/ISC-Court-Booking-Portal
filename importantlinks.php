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

 $this->pageTitle="Important Links - ". Yii::app()->name;
?>

<style>
a {
    color: white;
}
a:hover {
    text-decoration: none;
}
a:focus {
    text-decoration: none;
}
#link {
    outline: 0;
    border: 2px solid black;
    padding: 10px 15px;
    border-radius: 10px;
    background-color: black;
    color: white;
    transition: ease 0.3s;
    width: 50%;
}
#link:hover {
    background-color: white;
    color: black;
}
.row {
    margin: 15px 0;
}
.container-fluid {
    padding: 0 15px 113px 15px;
}

#fh5co-blog-section {
    padding: 7em 0 0 0; 
}

@media screen and (max-width: 576px) {
  .container-fluid {
    padding: 80px 15px 150px 15px;
  }
  button {
      font-size: 15px;
  }
  #link { 
      width: 100%;
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
        <h3>Important Links</h3>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid" style="background-color: rgba(0, 0, 0, 0.04); text-align: center;">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <a target="_blank" href="https://gymkhana.iitb.ac.in/~sports/index.php?r=site/iplfantasyleague"><button id="link">IPL Fantasy League</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <a target="_blank" href="https://gymkhana.iitb.ac.in/~sports/assets/view/IPL%20FPL%20Rulebook.pdf"><button id="link">IPL Fantasy League Rulebook</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <a target="_blank" href="https://docs.google.com/document/d/1j7ksbTjdrD7tDxpIzC_d_zPXBuBnnqr5e15yugRWNUs/edit"><button id="link">Chess Virtual Cup Rulebook</button></a>
        </div>
    </div>
</div>

</body>
</html>