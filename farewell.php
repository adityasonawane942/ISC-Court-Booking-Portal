<?php
/* @var $this SidebarrightController */

 $this->pageTitle="Farewell 2020 - ". Yii::app()->name;
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
    html {
        -ms-overflow-style: none;
        overflow-x: hidden;
        scroll-behavior: smooth;
    }
    body {
     background: rgba(0, 0, 0, 0.04);
     color: #5a5a5a;
    }
    h4 {
     text-transform: none;
    }
    #fh5co-blog-section {
    padding: 7em 0 0 0;
    }
    .heading-section {
    margin-bottom: 0;
    }
    html::-webkit-scrollbar {
        display: none;
      }
    .modal-body {
        -ms-overflow-style: none;
        overflow-x: hidden;
    }
    
    .modal-body::-webkit-scrollbar {
        display: none;
      }
    #scrollBtn {
      display: none;
      position: fixed;
      bottom: 4vh;
      right: 2vw;
      z-index: 150;
      width: 50px;
      height: 50px;
      border: none;
      outline: none;
      background-color: red;
      cursor: pointer;
      border-radius: 50%;
      font-size: 3rem;
    }

    #scrollBtn:hover {
      background-color: black;
          }
    .mobile-navigation {
      display: none;
      margin-top: 1vw;
    }
    .card {
      cursor: pointer;
      margin: 0.5vw 0;
     background: rgb(0 0 0 / 0%);
     border: 1px solid #FCC72C;
     transition: ease 0.5s;
    }
    .card:hover {
      box-shadow: 0 0 10px 0px;
      transform: scale(1.02);
    }
    .modal-content {
     background: black;
    }
    #aq {
      padding-top: 2vw;
    }
    a.small {
      margin: 1vw;
      padding: 0.5vw 2vw;
      border-radius: 20px;
      background-color: black;
      color: white;
    }
    .main_content {
      color: white;
      font-size: 15px;
      display: block;
      overflow-y: auto;
      scrollbar-width: none;
      -ms-overflow-style: none;
      font-weight: bold;
    }
    .close {
      color: white;
      font-size: 4rem;
      opacity: 1;
    }
    .main_content::-webkit-scrollbar {
      width: 0;
      height: 0;
    }

    .plus{
      position: absolute;
      left: 0;
    }
    p {
      margin: 0;
    }
    .card-title {
      font-size: 1.3vw;
    }
    p.card-text {
      font-size: 1.1vw;
    }
    .modal-title {
      color: white;
      font-size: 2.5vw;
    }
    .mb-1 {
      font-size: 2vw;
    }
    .proimage {
      display: none;
    }
    .modal-header .close {
      outline: 0;
    }

    
    @media screen and (min-width:576px) {
      .col-sm-3 {
        max-width: 20%;
      }
    }

    @media screen and (max-width:992px) {
      .main_content {
        width: 100%;
        float: none;
        text-align: center;
        justify-content: center;
      }
      .mobile-navigation {
        display: block;
      }
      .card-title {
        font-size: 1.7vw;
      }
    p.card-text {
      font-size: 1.4vw;
    }
    .modal-title {
      font-size: 2.7vw;
    }
    .mb-1 {
      font-size: 2.2vw;
    }
    }
    @media screen and (max-width:800px) {
      .card-title {
        font-size: 1.8vw;
      }
    p.card-text {
      font-size: 1.5vw;
    }
    .modal-title {
      font-size: 2.8vw;
    }
    .mb-1 {
      font-size: 2.4vw;
    }
    }
    @media screen and (max-width:700px) {
      .card-title {
        font-size: 1.9vw;
      }
    p.card-text {
      font-size: 1.6vw;
    }
    .modal-title {
      font-size: 2.9vw;
    }
    .mb-1 {
      font-size: 2.6vw;
    }
    }
    @media screen and (max-width:576px) {
    .card-title {
      font-size: 4vw;
      margin-bottom: 1vw;
    }
    #aq {
      padding-top: 5vw;
    }
    p.card-text {
      font-size: 3.3vw;
    }
    .modal-title {
      font-size: 5vw;
    }
    .mb-1 {
      font-size: 6vw;
    } 
    .close {
      font-size: 3rem;
    }
    .card:hover {
      box-shadow: 0 0 0px 0px;
      transform: none;
    }
    .card-img-top {
      display: none;
    }
    .proimage {
      display: inline-block;
      width: 30%;
      vertical-align: middle;
    }
    .card-body {
      padding: 0.5rem;
    }
    .text {
      padding-left: 10px;
      display: inline-block;
      width: 68%;
      vertical-align: middle;
    }
    }
  </style>
</head>

<body>
<div class="fh5co-overlay" style=" height: 80px;"></div>
<div id="fh5co-blog-section" class="fh5co-section-gray">
  <div class="container" style="margin-top:60px;">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
        <h3>FAREWELL 2020</h3>
      </div>
    </div>
  </div>
</div>
  <!-- <button id="scrollBtn" title="Go to top">&#8963;</button> -->
<!-- <div class="mobile-navigation">
  <div class="d-flex justify-content-center">
    <a class="small" href="#aquatics">Aquatics</a>
    <a class="small" href="#athletics">Athletics</a>
    <a class="small" href="#badminton">Badminton</a>
    <a class="small" href="#basketball">Basketball</a>
  </div>
<div class="d-flex justify-content-center">
  <a class="small" href="#board-games">Board Games</a>
  <a class="small" href="#cricket">Cricket</a>
  <a class="small" href="#hockey">Hockey</a>
  <a class="small" href="#football">Football</a>
</div>
  <div class="d-flex justify-content-center">
    <a class="small" href="#kho-kho">Kho Kho</a>
    <a class="small" href="#lawn-tennis">Lawn Tennis</a>
    <a class="small" href="#squash">Squash</a>
    <a class="small" href="#table-tennis">Table Tennis</a>
  </div>
  <div class="d-flex justify-content-center">
    <a class="p-2" href="#"></a>
  <a class="small" href="#volleyball">Volleyball</a>
  <a class="small" href="#weightlifting">Weightlifting</a>
  <a class="p-2" href="#" class="ml-auto"></a>
</div>
</div> -->



  <div style="background: rgba(0,0,0,0.04);" class="container-fluid" id="aquatics">
    <h1 class="mb-1 text-capitalize" id="aq"><b>aquatics</b></h1>
<hr style="margin-top: 5px; border: 2px solid #FCC72C;">
    <div class="row">
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/shubhankar.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/shubhankar.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Shubhankar Mihir Seth</h4>
              <p data-toggle="modal" data-target="#aquaticsModalshubh" class="card-text stretched-link">Inspite of being a national level swimmer, I was mesmerized at the mere sight of the pool. 
                 ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/vihang.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/vihang.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Vihang Wagh (Mohanty) </h4>
              <p data-toggle="modal" data-target="#aquaticsModalviha" class="card-text stretched-link">The adrenaline rush while waiting to hear that whistle to blow and you take off, at every  ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/mansi.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/mansi.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Mansi Khedekar</h4>
              <p data-toggle="modal" data-target="#aquaticsModalmansi" class="card-text stretched-link">I was a swimmer previously, so the day I set foot in campus I made my way to the pool ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/divyanshu.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/divyanshu.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Divyanshu Chahal</h4>
              <p data-toggle="modal" data-target="#aquaticsModaldivya" class="card-text stretched-link">The memories made at Inter IIT 2019 are priceless and I will remember it for a lifetime ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/viral.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/viral.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Viral Shah</h4>
              <p data-toggle="modal" data-target="#aquaticsModalviral" class="card-text stretched-link">The pool was my go to place here! Beginning from NSO, my journey with swimming ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/aniket.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/aniket.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Aniket Ranade</h4>
              <p data-toggle="modal" data-target="#aquaticsModalanik" class="card-text stretched-link">Chill. Nothing is important in life except for living it to the fullest ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalshubh">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title">Shubhankar Mihir Seth</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionshubh">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneshubh">How were you introduced to your sport in insti?</a>
                <br><p id="oneshubh" class="collaps showe" data-parent="#accordionshubh" style="font-weight: normal; color: white;" align=justify>During the Sports Orientation, a lot of seniors talked about how great the pool is, so I went to check it out. And I was amazed - it was one of the best pools I'd seen, despite being a national-level swimmer. I decided to go in for NSO Swimming. From there to the GCs, Swimathon, and finally making it to the team, I haven't looked back.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twoshubh">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twoshubh" class="collapse" data-parent="#accordionshubh" style="font-weight: normal; color: white;" align=justify>I think my fondest memories with the team are the little celebrations we did at the end of each Inter IIT, where all of would just jump into the pool fully dressed and have a gala time, till we got kicked out of because of our antics. It was a genuine display of the close bonding and fun-loving nature of our team, and I'm sure it made the other contingents jealous XD. 

                  In terms of the sport, my fondest memory is from my first Inter IIT in Madras. Last event of the tournament and Bombay was in 3rd place, trailing by a point. I had made it to the finals, so there was a lot of pressure, but not much hope, because the 100 free wasn't my main event. I don't remember how I surpassed my personal best to win a bronze and take Bombay to 2nd place. What I do remember is the tight hug from Reddy Sir as I came out of the pool, dripping wet. I've always had the highest respect for Sir, and he was a very stoic coach, so that hug was both rare and special <3</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeshubh">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeshubh" class="collapse" data-parent="#accordionshubh" style="font-weight: normal; color: white;" align=justify>Besides the unforgettable memories and the lovely people, I've learned lessons for a lifetime. Swimathon taught me resilience and how much strength is in the mind, juggling the shortest and the longest event at Inter IIT made me realize that adaptability was key, and having been a part of such wonderful teams, I now know that it's the people that matter, not the medals.  </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourshubh">Any message to your new team and juniors?</a>
                <br><p id="fourshubh" class="collapse" data-parent="#accordionshubh" style="font-weight: normal; color: white;" align=justify>I'm going to miss each one of you so much, and thank you for sharing some of my fondest moments with me. We're a part of something much bigger than ourselves, and here's hoping that you guys keep making me proud. Go Bombay!</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalviha">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title">Vihang Wagh (Mohanty)</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionviha">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneviha">How were you introduced to your sport in insti?</a>
                <br><p id="oneviha" class="collapse show" data-parent="#accordionviha" style="font-weight: normal; color: white;" align=justify>NSO.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twoviha">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twoviha" class="collapse" data-parent="#accordionviha" style="font-weight: normal; color: white;" align=justify>Ahh... The matches at the Inter-IIT. I was often the one in the swim-off at the start. Taking your position, your heart beating as you wait for the ref to blow the whistle. Feels ❤️</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeviha">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeviha" class="collapse" data-parent="#accordionviha" style="font-weight: normal; color: white;" align=justify>Hmm... The grit and the emotions. I am not good at putting these things in word 😬</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourviha">Any message to your new team and juniors?</a>
                <br><p id="fourviha" class="collapse" data-parent="#accordionviha" style="font-weight: normal; color: white;" align=justify>Just do it. Every year you can. Regardless of your other commitments, Inter-IIT is always worth it. The value it adds to your life cannot be measured in plain terms. You will look back at this time and remember only the fun stuff. Also, thanks for making this memorable. I was very lucky to be a part of this team. </p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalmansi">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title">Mansi Khedekar</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionmansi">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onemansi">How were you introduced to your sport in insti?</a>
                <br><p id="onemansi" class="collaps showe" data-parent="#accordionmansi" style="font-weight: normal; color: white;" align=justify>Having previously trained in Swimming, I made my way to the pool the first day I came to campus. Being introduced to the coach and the right seniors, I started training for Inter IIT that was coming up in just two months! However, I was overwhelmed with all available extra-curriculars. I was involved in a bit of everything. It wasn't till I was at Kanpur wearing my tracksuit that I wanted to commit to making a mark at Inter IIT and to sports at IIT. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twomansi">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twomansi" class="collapse" data-parent="#accordionmansi" style="font-weight: normal; color: white;" align=justify>Swimming being an Individual sports, team spirit is truly tested during Relays. All the 4 swimmers have to perform & any mistake affects the team drastically. Having said that, swimming the last lap with everyone counting on you to take over the people ahead, and then doing just that is a thrilling moment.
                  In my fourth year, each day I had an event. Morning heats, afternoon finals. Each morning, I performed horribly and devastated. I even swallowed up water in my main event and for a sec wanted to quit the race because I couldn’t breath. Yup, that's what butterfly does to you. But I am glad I didn't quit & Glad I dragged myself through it. It was my main event. But like I had done for each event that Inter IIT, I came back with reinforced determination. I was 5 or even 6th in heats and finished podium in each of my events. Walking back to the deck and seeing your team proud of you is also one of the best feelings ever. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threemansi">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threemansi" class="collapse" data-parent="#accordionmansi" style="font-weight: normal; color: white;" align=justify>Sports gave me a sense of belonging. Almost all of my fond memories of my journey at IIT Bombay are associated with Sports. ‘Patience’- Athletics taught me patience because my progress was too gradual for my liking. I didn’t see improvement and it frustrated me. So at the end of the day, I learned to wait and keep working & eventually I did see improvement in myself, not just performance wise but in general in my overall fitness & well-being.
                  What came as a surprise is seeing my training for Athletics improve my swimming performance as well. It didn’t hurt that I had access to better messing facilities by means of 2 different inter-IIT camps.  All the highs and the lows I went through only made me gain experience and grow stronger as I came through. My journey through 4 years of sports taught me how to focus & not let nervousness ruin the event. 
                  Preparing for two sports, I had to keep training almost 9-10 months of a year; this enabled me to have a focussed approach towards it. In this process, I gained knowledge on fitness, injuries & rehab, Diet & nutrition which has given me a better outlook in life. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourmansi">Any message to your new team and juniors?</a>
                <br><p id="fourmansi" class="collapse" data-parent="#accordionmansi" style="font-weight: normal; color: white;" align=justify>Ask. There will always be seniors who will help you. There are going to be plenty of days that you just don’t feel like working out. I had them too, quite a few unfortunately, but there always was a kickback. A feeling of missing something Crucial. As long as you kick back harder and keep on working hard towards your goal, you can achieve it. If you don’t, you still come out stronger and fitter than you were before! </p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModaldivya">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title">Divyanshu Chahal</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordiondivya">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onedivya">How were you introduced to your sport in insti?</a>
                <br><p id="onedivya" class="collaps showe" data-parent="#accordiondivya" style="font-weight: normal; color: white;" align=justify>I was already a swimmer.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twodivya">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twodivya" class="collapse" data-parent="#accordiondivya" style="font-weight: normal; color: white;" align=justify>Whole inter IIT 2k19</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threedivya">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threedivya" class="collapse" data-parent="#accordiondivya" style="font-weight: normal; color: white;" align=justify>A lot of memories.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourdivya">Any message to your new team and juniors?</a>
                <br><p id="fourdivya" class="collapse" data-parent="#accordiondivya" style="font-weight: normal; color: white;" align=justify>Always follow your passion.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalviral">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title">Viral Shah</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionviral">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneviral">How were you introduced to your sport in insti?</a>
                <br><p id="oneviral" class="collaps showe" data-parent="#accordionviral" style="font-weight: normal; color: white;" align=justify>NSO</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twoviral">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twoviral" class="collapse" data-parent="#accordionviral" style="font-weight: normal; color: white;" align=justify>Polo practice and matches</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeviral">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeviral" class="collapse" data-parent="#accordionviral" style="font-weight: normal; color: white;" align=justify>Health and Fitness are equally important for all round development</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourviral">Any message to your new team and juniors?</a>
                <br><p id="fourviral" class="collapse" data-parent="#accordionviral" style="font-weight: normal; color: white;" align=justify>All the best for future, make us and the IITB community proud</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalanik">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title">Aniket Ranade</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionanik">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneanik">How were you introduced to your sport in insti?</a>
                <br><p id="oneanik" class="collapse show" data-parent="#accordionanik" style="font-weight: normal; color: white;" align=justify>NSO</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twoanik">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twoanik" class="collapse" data-parent="#accordionanik" style="font-weight: normal; color: white;" align=justify>Inter-IIT</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeanik">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeanik" class="collapse" data-parent="#accordionanik" style="font-weight: normal; color: white;" align=justify>A lot of great memories.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fouranik">Any message to your new team and juniors?</a>
                <br><p id="fouranik" class="collapse" data-parent="#accordionanik" style="font-weight: normal; color: white;" align=justify>Chill. Nothing is important in life except for living it to the fullest</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div style="background: rgba(0,0,0,0.04);" class="container-fluid" id="athletics">
    <h1 class="mb-1 text-capitalize" id="aq"><b>athletics</b></h1>
<hr style="margin-top: 5px; border: 2px solid #FCC72C;">
    <div class="row">
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/ashi.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/ashi.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Ashi Gupta</h4>
              <p data-toggle="modal" data-target="#aquaticsModalashi" class="card-text stretched-link">The first step towards sports was difficult for me but once I entered the circuit 
                 ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/profile.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/profile.png" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Gaurav Saini</h4>
              <p data-toggle="modal" data-target="#aquaticsModalgaur" class="card-text stretched-link">Being a part of a dedicated team has given me lots of memories and  ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/saurav.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/saurav.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Saurabh Rajguru</h4>
              <p data-toggle="modal" data-target="#aquaticsModalsaur" class="card-text stretched-link">I began my journey with NSO and over the years I've learnt that it requires commitment ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/tushar.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/tushar.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Tushar Uike</h4>
              <p data-toggle="modal" data-target="#aquaticsModaltush" class="card-text stretched-link">From choosing cricket over athletics and returning back to it, after experiencing ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/nikhil.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/nikhil.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Nikhil Jaiswal</h4>
              <p data-toggle="modal" data-target="#aquaticsModalnikh" class="card-text stretched-link">From just regularly running in the ground to joining the team there are innumerable moments ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/ayushi.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/ayushi.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Ayushi Panghal</h4>
              <p data-toggle="modal" data-target="#aquaticsModalayus" class="card-text stretched-link">I was new to athletics when I began in my freshie year with NSO. The Gymkhana grounds ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/mansi.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/mansi.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Mansi Khedekar</h4>
              <p data-toggle="modal" data-target="#aquaticsModalmansiath" class="card-text stretched-link">The whole family of sports gave me a sense of belonging. There were rough days and ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/pratik.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/pratik.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Pratik Patil</h4>
              <p data-toggle="modal" data-target="#aquaticsModalprat" class="card-text stretched-link">Sports orientation was the starting point. But it was the crossy GC when I got ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/kamlesh.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/kamlesh.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Kamlesh Kumar Meena</h4>
              <p data-toggle="modal" data-target="#aquaticsModalkaml" class="card-text stretched-link">I already was a sprinter but then my coach told me to try out long jump. That is how ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/sambit.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/sambit.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Sambit Parida</h4>
              <p data-toggle="modal" data-target="#aquaticsModalsamb" class="card-text stretched-link">It was one evening when I was just trying out long jump in the sand pit and  ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/profile.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/profile.png" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Mohit Sambherwal</h4>
              <p data-toggle="modal" data-target="#aquaticsModalmohi" class="card-text stretched-link">Sen Gupta sir encouraged me to take part in the team. The Juhu beach practice ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalashi">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title">Ashi Gupta</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionashi">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneashi">How were you introduced to your sport in insti?</a>
                <br><p id="oneashi" class="collapse show" data-parent="#accordionashi" style="font-weight: normal; color: white;" align=justify>I wanted to pursue sports, but as usual, the first step was difficult for me, so I did not join it until mid of the second semester. To help me, one of my friends introduced me to the team.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twoashi">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twoashi" class="collapse" data-parent="#accordionashi" style="font-weight: normal; color: white;" align=justify>I have so many memories with the team, which are close to my heart. Morning walk to Vihar lake, that was one of the rarest times I broke a rule. Train journey for Inter-IIT Madras, chat with the team after long and tiring workouts. I love how team members try to keep everyone together, this time they organized online farewell.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeashi">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeashi" class="collapse" data-parent="#accordionashi" style="font-weight: normal; color: white;" align=justify>I realised my potentials which I never thought I would be good at. 
                  Long-distance taught me - If your mind is strong, you can do wonders.
                  Practice and technique both are equally important to achieve the goal.
                  I became conscious of fitness and health, all thanks to sports at IIT Bombay.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourashi">Any message to your new team and juniors?</a>
                <br><p id="fourashi" class="collapse" data-parent="#accordionashi" style="font-weight: normal; color: white;" align=justify>Improvement takes time, don’t give up early. If you are beginner gradually increase your workout intensities, otherwise you might not be able to improve due to injuries (due to sudden intense workout).</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalgaur">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title">Gaurav Saini</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordiongaur">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onegaur">How were you introduced to your sport in insti?</a>
                <br><p id="onegaur" class="collapse show" data-parent="#accordiongaur" style="font-weight: normal; color: white;" align=justify>Just visited the ground and talked with students practicing there.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twogaur">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twogaur" class="collapse" data-parent="#accordiongaur" style="font-weight: normal; color: white;" align=justify>Training in group. Weight training, running, and parties too.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threegaur">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threegaur" class="collapse" data-parent="#accordiongaur" style="font-weight: normal; color: white;" align=justify>Lots of memories with good health.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourgaur">Any message to your new team and juniors?</a>
                <br><p id="fourgaur" class="collapse" data-parent="#accordiongaur" style="font-weight: normal; color: white;" align=justify>Try to be regular in your practice sessions. At least 4 to 5 days a week. </p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalsaur">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title">Saurabh Rajguru</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionsaur">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onesaur">How were you introduced to your sport in insti?</a>
                <br><p id="onesaur" class="collapse show" data-parent="#accordionsaur" style="font-weight: normal; color: white;" align=justify>NSO practice. Anand and Swastik were instrumental in introducing me to the Inter-IIT team.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twosaur">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twosaur" class="collapse" data-parent="#accordionsaur" style="font-weight: normal; color: white;" align=justify>Playing mafia with my seniors and my teammates when we went a for a trip. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threesaur">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threesaur" class="collapse" data-parent="#accordionsaur" style="font-weight: normal; color: white;" align=justify>It requires commitment and a lot of will power to improve and earn a medal. Injuries are depressing. But be patient and consistent in your practice. You'll certainly improve. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#foursaur">Any message to your new team and juniors?</a>
                <br><p id="foursaur" class="collapse" data-parent="#accordionsaur" style="font-weight: normal; color: white;" align=justify>Enjoy the sport you are playing and learn to have fun with your teammates and seniors. It is not all about grinding. Play freely and have fun. The coaches are strict for a reason. Listen to them and respect them. There is always time for mischief when the strict training routine is over.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModaltush">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title">Tushar Uike</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordiontush">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onetush">How were you introduced to your sport in insti?</a>
                <br><p id="onetush" class="collapse show" data-parent="#accordiontush" style="font-weight: normal; color: white;" align=justify>"My first love being Cricket, having played in clubs during school days, it was a tough choice to choose between Cricket and Athletics. I gave trials in NSO for both Cricket and Athletics, and both went well but I got into cricket because you know, first love and everything ;P. 
                  After a few days of exploring Cricket under NSO, I somehow, just on a whim, decided to give Athletics a go and joined the team practices. On the first day of practice, I remember that I was totally exhausted and had never done such an intensive workout. I was genuinely amazed by the idea that such a level of professional practice is being held in an academic institution. And I just decided that this is where I wanna be, to grow among these people who seemed probably the fittest in the institute. And physically, I was nowhere near these people. All I knew was that I could run fast but that myth was soon busted when I came 8th in the Inter Hostel GC after being barely able to qualify for the finals ;P."</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twotush">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twotush" class="collapse" data-parent="#accordiontush" style="font-weight: normal; color: white;" align=justify>After a year when I could not make it into even pre inter IIT camp in 2016, and had a 100m timing of 12.5 sec and then to go on to winning a bronze medal in 100m with 11.1 sec was a moment which seemed surreal to me. The race was a real close one for 2nd, 3rd and 4th position and the result was announced after a while. As the result was announced, I didn't know how to react but seeing all my team members jumping around in joy and being so happy for me, and as it was just my first year of Inter IIT, I felt emotional and a sense of contentment. So this was the moment. Winning a medal is really satisfying but being able to celebrate it with your team members is actually what makes it worth it.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threetush">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threetush" class="collapse" data-parent="#accordiontush" style="font-weight: normal; color: white;" align=justify>Looking back, the thing that I think really worked in my favour was the amount of self belief and patience I had. There were many people faster than me in my first year in the institute, but I still chose to somehow believe that with practice, I can do it. The obsession of running fast just kept bringing me to the ground everyday. And I remember I used to listen to the song 'Bhaag milkha bhaag' many a times before coming to practice :p. 
                  I have vomited innumerable times during practice sessions and have endured great amounts of pain because of my flat feet, while pushing my limits every time. I can never forget the improvement I experienced in my 3rd sem in 2017, after 7-8 months of total dedication to practice, each race I was running was faster than my previous one. But track and field is a tricky sport, in 2018 I was at the peak of my performance, running 11s in a grass track in Udghosh, then beating my idol Pawan Dahiya(sir) to create a new GC record, but failing to win in Inter IIT 2018 owing to multiple factors. I was disappointed, but the defeats definitely make you humble and respect the sport more. 
                  Overall, with all wins and losses, with so many mistakes made, Athletics has been very influential in my life as it has transformed me from an introverted, moderately skinny guy to a somewhat confident fit guy and has given me a lot of mental strength and calmness to deal with failures. I have met some really amazing seniors and some lovely juniors in my journey who I am grateful for. More than any achievement, it's the memories that I have with the team, which I cherish the most.
                  </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourtush">Any message to your new team and juniors?</a>
                <br><p id="fourtush" class="collapse" data-parent="#accordiontush" style="font-weight: normal; color: white;" align=justify>It always gives me a sense of satisfaction when my teammates are working hard to improve. The message I want to give to the team is that your motivation for the sport will be a very big factor for your improvement, so keep pushing yourself consistently. Be honest to yourself of where you stand today but do not settle for that. Never doubt yourself before an event. Have faith in the process and your coach. Be there for your teammates, cheer them in races, push them in practice sessions. Have fun moments on and off the ground. All of you have great potential and the ability to put up some great performances. I will always keep a close eye on your journeys in the future. All the best and enjoy your journeys, celebrate the pains! </p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalnikh">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title">Nikhil Jaiswal</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionnikh">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onenikh">How were you introduced to your sport in insti?</a>
                <br><p id="onenikh" class="collapse show" data-parent="#accordionnikh" style="font-weight: normal; color: white;" align=justify>At the ending of my 1st year, I used to go for running daily on gymkhana ground and see the Athletics team practicing and performing drills. One day while I was running, the then Athletics Secy Anand contacted me and told me to join the practice. From there my Athletics journey started.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twonikh">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twonikh" class="collapse" data-parent="#accordionnikh" style="font-weight: normal; color: white;" align=justify>There are innumerable moments with the team, from doing drills together, celebrating each other's birthdays, to motivating one another, having small playing sessions to relax, going for movies together and so many of them which are equally memorable. The Fondest memory of Athletics as a Sport is getting the timing of 57 seconds in a 400m race and defeating two of my seniors. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threenikh">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threenikh" class="collapse" data-parent="#accordionnikh" style="font-weight: normal; color: white;" align=justify>It has been an amazing journey right from the Freshie year. IIT Bombay sports is the best platform which helped me showcase what I possess. Sports is an important aspect for mental well being and easiest way to de-stress. A sportsperson makes a distinct place for himself or herself in an educational institute. To all the players and students I would wish all the best. Keep the sporting spirit alive. Get engaged in sports at all levels and raise the bar every time you do that. In a healthy body resides a healthy mind. Having a sportsman mindset will stand you apart from others. All the best!</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fournikh">Any message to your new team and juniors?</a>
                <br><p id="fournikh" class="collapse" data-parent="#accordionnikh" style="font-weight: normal; color: white;" align=justify>I would say a few things - Do it for love, aim for excellence, not perfection, create the best possible conditions for success, then let go of the outcome, cultivate a learning mindset instead of a fixed mindset,use setbacks as motivation,keep your self-talk encouraging and keep your eyes on the prize.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalayus">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title">Ayushi Panghal</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionayus">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneayus">How were you introduced to your sport in insti?</a>
                <br><p id="oneayus" class="collapse show" data-parent="#accordionayus" style="font-weight: normal; color: white;" align=justify>I was introduced to Athletics through NSO trials in the first semester. It was also when I got to know about various sports teams practicing to participate in the Inter IIT championship. After getting into Athletics NSO, our coach shortlisted a few freshies from the NSO sessions to practice with the Inter IIT Athletics team in the evenings. This is how I started practicing with the team every day and Athletics became an integral part of my insti life.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twoayus">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twoayus" class="collapse" data-parent="#accordionayus" style="font-weight: normal; color: white;" align=justify>Looking back, every practice session with the team was filled with lots of sweat, giggles, and beautiful moments. Gymkhana grounds became a home and some of the teammates a family - memories with whom I’ll cherish for a lifetime.
                  The early morning practice sessions during Inter IIT camps, train journeys with the team, cheering for the contingent at IIT Kanpur, celebrating victories and being there for each other in the lows, trip to Nainital, participating in crossies and marathons together, team treats - the list is endless.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeayus">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeayus" class="collapse" data-parent="#accordionayus" style="font-weight: normal; color: white;" align=justify>This beautiful journey with athletics has given me lots of learnings, memories, and some of the closest friendships in my life. From being a newbie to participating in Inter IIT events and marathons - it has been the most challenging thing I have put myself through. There’s courage in stretching the limits and overcoming the internal demons that hold you back. I emerged out stronger - both physically and mentally. Through some of my best and worst moments,  I’ve developed resilience and grown to be a much kinder and empathetic person. I definitely wouldn’t be the same person I am today if not for this two-year journey and if I could go back, I would not have it any other way. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourayus">Any message to your new team and juniors?</a>
                <br><p id="fourayus" class="collapse" data-parent="#accordionayus" style="font-weight: normal; color: white;" align=justify>Hello people! Even though our paths didn’t cross in insti, athletics is a shared feeling that connects us. I hope our team remains a platform where people can push to become the best versions of themselves and dream together to bring glory to the institute. I hope all of you keep the team spirit alive, treat everyone with kindness and respect, and that the gymkhana grounds always remind you of the best times of insti life. All the best and feel free to reach out for any help. 
                  "Run when you can, walk if you have to, crawl if you must; just never give up."
                  Cheers! </p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalmansiath">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title">Mansi Khedekar</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionmansiath">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onemansiath">How were you introduced to your sport in insti?</a>
                <br><p id="onemansiath" class="coll showapse" data-parent="#accordionmansiath" style="font-weight: normal; color: white;" align=justify>Being involved in the sports community already, I was asked to replace someone for a relay at an Inter College event at the last minute. Already planning to visit to support I said why not? I had missed the Athletics team trials in my first year as I was exhausted after swimming camp, so I hadn’t bothered trying out. But an opportunity arised at the event to participate in Discus Throw which I had tried in School. A senior saw my potential & welcomed me to the team. Still feeling quite out of place, It was another senior who asked me to turn up to the team farewell & even asked me to host the farewell. I saw the bond through their shared memories, and I wanted to be part of that. When it came to the senti, a few of them having met me for the first time still had something to say to me and that won me over. Knowing that I was already in swimming, the team welcomed & encouraged me to pursue both the sports. That was officially how I found my way to the Athletics team. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twomansiath">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twomansiath" class="collapse" data-parent="#accordionmansiath" style="font-weight: normal; color: white;" align=justify>Unfortunately pointing out one moment is difficult. Being in the Athletics team gave me the opportunity to witness first hand out over all WIN. It gave me an opportunity to experience chanting BOMBAY at the top of my voice while taking the victory lap. I got to see Pawan make records. I also got to see a player break his over record twice over in multiple events. I got to march leading the contingent. One very important event was when a senior stood up for me to the coach when I was so stricken with grief that no words would fly out my mouth. It was because of that senior that I got to experience all of the above. I will forever be grateful and have always tried to be that person for my juniors.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threemansiath">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threemansiath" class="collapse" data-parent="#accordionmansiath" style="font-weight: normal; color: white;" align=justify>Sports gave me a sense of belonging. Almost all of my fond memories of my journey at IIT Bombay are associated with Sports. ‘Patience’- Athletics taught me patience because my progress was too gradual for my liking. I didn’t see improvement and it frustrated me. So at the end of the day, I learned to wait and keep working & eventually I did see improvement in myself, not just performance wise but in general in my overall fitness & well-being.
                  What came as a surprise is seeing my training for Athletics improve my swimming performance as well. It didn’t hurt that I had access to better messing facilities by means of 2 different inter-IIT camps.  All the highs and the lows I went through only made me gain experience and grow stronger as I came through. My journey through 4 years of sports taught me how to focus & not let nervousness ruin the event. 
                  Preparing for two sports, I had to keep training almost 9-10 months of a year; this enabled me to have a focussed approach towards it. In this process, I gained knowledge of fitness, injuries & rehab, Diet & nutrition which has given me a better outlook in life.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourmansiath">Any message to your new team and juniors?</a>
                <br><p id="fourmansiath" class="collapse" data-parent="#accordionmansiath" style="font-weight: normal; color: white;" align=justify>Ask. There will always be seniors who will help you. There are going to be plenty of days that you just don’t feel like working out. I had them too, quite a few, unfortunately, but they're always was a kickback. A feeling of missing something Crucial. As long as you kick back harder and keep on working hard towards your goal, you can achieve it. If you don’t, you still come out stronger and fitter than you were before! </p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalprat">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title">Pratik Patil</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionprat">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneprat">How were you introduced to your sport in insti?</a>
                <br><p id="oneprat" class="collapse show" data-parent="#accordionprat" style="font-weight: normal; color: white;" align=justify>Sports Orientation was a key moment I will have to say for introduction to overall sports & activities on campus; it was not until Freshmen Crossy where I managed to get a podium finish & thus got introduced to some team seniors.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twoprat">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twoprat" class="collapse" data-parent="#accordionprat" style="font-weight: normal; color: white;" align=justify>Successfully finishing Ironman 70.3 Triathlon & Podium at Devils Circuit are some of the best moments I had as an Endurance-sports Athlete till date; these accomplishments would not have been possible without the amount of support I got from various coaches & my teammates (especially team-seniors).
                  Inter-IIT camps: Those grueling camps days are where I have some great memories with the team both on & off-field; the camaraderie we share during this period makes Athletics more of a Team sport than an individual sport; also mess scenes are always lively with the whole contingent together!
                  Organising a half-Marathon: One of the fondest memories from my Athletics Secretary days; getting a first hand experience to organise such a huge sports event that too in our own backyard was an amazing experience!</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeprat">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeprat" class="collapse" data-parent="#accordionprat" style="font-weight: normal; color: white;" align=justify>Mostly every other thing you do in insti is short term. Assignments & projects are month-long, courses run for 3-4 months, PORs last for a year. Sports is something that helped me engage myself in some long-term goals which brought about some great lifestyle changes. With sports, I got a chance to get out of my comfort zone & lookout for new challenges. In this process, I have met so many interesting & amazing people who have inspired me & from whom I have learned a lot. It has been a great learning curve & I'm grateful for the opportunities & exposure I got here! </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourprat">Any message to your new team and juniors?</a>
                <br><p id="fourprat" class="collapse" data-parent="#accordionprat" style="font-weight: normal; color: white;" align=justify>Never go looking for hacks & quick fixes to see improvement in performance & fitness.
                  Also never expect to get quick results as well! I have seen people fall for fitness hacks, go overboard during weight-training & most important consume various nutrition supplements without consultation. Never resort to these practices!
                  And lastly it's all about enjoying & learning! </p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalkaml">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title">Kamlesh Kumar Meena</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionkaml">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onekaml">How were you introduced to your sport in insti?</a>
                <br><p id="onekaml" class="collapse show" data-parent="#accordionkaml" style="font-weight: normal; color: white;" align=justify>I was part of NSO athletics in my freshie year.  In my initial phase I was runner but after realizing my explosive power and good sprinting my coach suggested me to do long jump so I started my journey as a long jumper in team. After practice with team I realized that I can do good high jump and I did  more practice with team and became the best high jumper of institute after my second year.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twokaml">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twokaml" class="collapse" data-parent="#accordionkaml" style="font-weight: normal; color: white;" align=justify>It was summer of my first year and I was just joined the team. I used to do practice with team but not so familiar with the team. Then one night around 11:30pm in a june one of my teammate (Anand) called me to come hostel 5. I was not aware of anything  but a big surprise was waiting for me. Yes it was my b'day, the whole team given me this surprise to me. Honestly speaking I was never celebrated my b'day before, this was my first b'day celebration which was celebrated by team. After b'day celebration I had very good time with team, the whole team did night out that night . I can't forget this time in my life.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threekaml">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threekaml" class="collapse" data-parent="#accordionkaml" style="font-weight: normal; color: white;" align=justify>I can't forget the time I spent with Athletics team, night outs, camping, b'day celebration , practice and dinner with team. Athletics Team taught me very important lesson in my life that is we have to have confidence in ourselves . </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourkaml">Any message to your new team and juniors?</a>
                <br><p id="fourkaml" class="collapse" data-parent="#accordionkaml" style="font-weight: normal; color: white;" align=justify>"We have to balance our practice with our academics, so take just 1hr for practice from whole day and do not take any extra pressure of anything. Whenever you feel low just go to ground and talk to your teammates. This is a medicine and I used to take it.
                  I just want to say that compete with yourself do not demotivate whenever you lose you have to just see if you are regular in practice and you given your best. If you are regular in practice, I'm sure you will perform your best during competition."</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalsamb">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title">Sambit Parida</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionsamb">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onesamb">How were you introduced to your sport in insti?</a>
                <br><p id="onesamb" class="collapse show" data-parent="#accordionsamb" style="font-weight: normal; color: white;" align=justify>I was unaware of any athletics team and a coach for the same, when I joined IIT . When the main ground was ready for practice after the heavy rains of Aug n sep, I used to go for jogging there. One day, I was just checking my long jump in the pit, then I found a unknown person coming towards me. Fortunately, he was the coach of athletic team(, Kanan sir) . He was observing me jumping in the pit, n he was quite impressed by my jumps. So he introduced me with the team and asked me to join the team. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twosamb">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twosamb" class="collapse" data-parent="#accordionsamb" style="font-weight: normal; color: white;" align=justify>Seriously saying, I am an introvert. So, i was not that much attached with the team and also, I was not going regular for the practice. So, I have shared the moment, like a drop in a bucket. Still, the memories of inter iit sports meet 2018, Guwahati is still refreshed in me. I had spent most time with my teammates there. I had a lot of fun there. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threesamb">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threesamb" class="collapse" data-parent="#accordionsamb" style="font-weight: normal; color: white;" align=justify>I have learnt a lot of thing from this journey with the athletic team of iit Bombay. It has played an important role in moulding me into the best version of myself. I came across different type of people, made few close friends and learnt a lot of things from them. Most importantly I got back my self confidence in sports, which I had lost few years back, when I was unsuccessful in sports.  </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#foursamb">Any message to your new team and juniors?</a>
                <br><p id="foursamb" class="collapse" data-parent="#accordionsamb" style="font-weight: normal; color: white;" align=justify>One thing I would love to share about me. I didn't get opportunities after my 10th to participate in any athletic event. Although I got it in my Graduation Time, I was not so fit that time and was morally down. I didn't get any position in events,so I didn't participate in anything in next years. But in IIT B, I get back my confidence.  Just before 15 days of inter IIT sports meet, I had gone for a study tour to Gujarat. Even I was not in the inter IIT camp, and couldn't practice in such a time, my team had faith on me, and most importantly, I had . Hardly, I had practiced for two months with my team before that. Despite all these , I clinched bronze in long jump in inter IIT sports meet, coz I was morally up, I was confident and I believe in myself. Even through out my practice, time, my best in long jump was 6.1m, but I did my best in inter IIT, it was 6.3m and I got bronze medal for that. So I have came across a lot of, ppl who are good at something but don't do that, thinking, there might be a better player than me. They don't want to participate in something thinking about their loss. So, I would like to say such ppl, plz change you thinking, go to the field with a thought of,no one is better than me. And give your best in that. Do not let a stumble be the end of you journey.So, the most important thing, everyone should have is self believe . </p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalmohi">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title">Mohit Sambherwal</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionmohi">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onemohi">How were you introduced to your sport in insti?</a>
                <br><p id="onemohi" class="collapse show" data-parent="#accordionmohi" style="font-weight: normal; color: white;" align=justify>Through K K Sen Gupta Sir</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twomohi">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twomohi" class="collapse" data-parent="#accordionmohi" style="font-weight: normal; color: white;" align=justify>juhu beach practice was epic. I have never done that type of practice. Playing Football with team which  I never done before. Celebrating diwali, meeting someone from team in lecture hall. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threemohi">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threemohi" class="collapse" data-parent="#accordionmohi" style="font-weight: normal; color: white;" align=justify>Good environment at IIT Bombay and too much greenery.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourmohi">Any message to your new team and juniors?</a>
                <br><p id="fourmohi" class="collapse" data-parent="#accordionmohi" style="font-weight: normal; color: white;" align=justify>Don't leave practice and always make improvement in yourself. </p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div style="background: rgba(0,0,0,0.04);" class="container-fluid" id="badminton">
    <h1 class="mb-1 text-capitalize" id="aq"><b>badminton</b></h1>
<hr style="margin-top: 5px; border: 2px solid #FCC72C;">
    <div class="row">
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/aditya.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/aditya.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Aditya Kasture</h4>
              <p data-toggle="modal" data-target="#aquaticsModaladit" class="card-text stretched-link">Starting with NSO badminton, 5 years for me at IITB would not have been the same without ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/atharv.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/atharv.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Atharv Surange</h4>
              <p data-toggle="modal" data-target="#aquaticsModalatha" class="card-text stretched-link">Playing just for fun had been nurtured and taught me many things in the form ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModaladit">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title">Aditya Kasture</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionadit">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneadit">How were you introduced to your sport in insti?</a>
                <br><p id="oneadit" class="collapse show" data-parent="#accordionadit" style="font-weight: normal; color: white;" align=justify>NSO</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twoadit">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twoadit" class="collapse" data-parent="#accordionadit" style="font-weight: normal; color: white;" align=justify>Winning GC gold</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeadit">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeadit" class="collapse" data-parent="#accordionadit" style="font-weight: normal; color: white;" align=justify>Ups and downs. I can proudly say that my 5 yrs wouldn't nearly have been as amazing as they were if it weren't for IITB sports</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fouradit">Any message to your new team and juniors?</a>
                <br><p id="fouradit" class="collapse" data-parent="#accordionadit" style="font-weight: normal; color: white;" align=justify>Give a whole hearted attempt and be passionate about the sport. It will give you back.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalatha">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title">Atharv Surange</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionatha">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneatha">How were you introduced to your sport in insti?</a>
                <br><p id="oneatha" class="collapse show" data-parent="#accordionatha" style="font-weight: normal; color: white;" align=justify>I've been playing badminton right from my school days. When I joined IIT, the grandeur of the badminton hall at IIT left me spellbound, never in my life had I seen a badminton hall as huge. The eagerness to play on those courts was so high, that I dragged my floor-mate to the play with me on the 1st day itself! 
                  I soon joined the NSO, where I first met the then best badminton player of the institute-Viraf Patrawala. I spent my whole first year trying to get myself worthy enough to at least get a chance to play against him!</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twoatha">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twoatha" class="collapse" data-parent="#accordionatha" style="font-weight: normal; color: white;" align=justify>The fondest memory of badminton to me isn't just a memory but a lesson for life. It was my 3rd year summer, I had royally tanked my 6th semester and lost the general elections. My mind constantly felt unsettled, I wasn’t even able to self-validate that I’m capable. I desperately searched for ways to prove myself and gain back the lost self-confidence. At that time, having nothing in hands, improving my already stagnant game seemed to be the only ‘big challenge’ in front of me. I believed achieving it to be my only elixir. Luckily, just then a new badminton coach arrived to train the team, with stellar credentials to his name. And I got exactly what I wanted: a guiding hand in my pursuit to improve my game and become the best player.
                  For the next few months, I practiced very hard and followed my coach’s instructions religiously, but nothing helped! My stagnant game still seemed equally stagnant, add to that a nerve injury in my right leg which kept me away from the courts for a couple of weeks. The magical transformation that was anticipated from intense training hours wasn’t visible at all! My mind again seemed to be in the same distress it was at, a few months back! As the 2-week long hiatus due to injury was finally concluding, I met a senior of mine who had been through a similar phase but came out of it with a flawless game, but had quit playing due to some reason. His words were the only push my restless mind needed, making me realize that I was just banging my head against the wall in the hope it will surrender someday! He made me realize-how achieving perfection in a sport requires great attention to detail and a focused approach rather than just relentless efforts. His help and guidance pushed me into a gear I never knew existed within me! I practiced 7 hours every day since then, tried to work out ways to improve my game every second of the day, watched badminton videos of top players in an attempt to ingrain their footwork in my mind and replicate the same on the court. No matter how tired my body felt everyday my mind always pushed me to practice, becoming the best was all I wanted! Badminton used to be on my mind 24/7, so much that I used to practice footwork even in the middle of the night in my hostel corridor, paying attention to the movement and flex of each muscle just to get it perfect. My satisfaction knew no bounds when I went on to play a badminton match after 2 months of maddening training, and realized that the magic I desperately craved was finally taking shape! The final product of my game felt surreal, I was overwhelmed! Although the happiness didn't last long, and in the end I wasn’t able to beat the person I wanted to, in the final trials, a month later. But I sure put up a tough fight, which I couldn’t have even imagined some months back. I felt dejected and thought I would soon be surrounded with misery, but it didn't happen! I surprisingly, felt very satisfied! I had completely given up hopes of getting better after my injury but the huge improvement in the game in just a span of few months came as a pleasant surprise, and induced a sense of satisfaction within.
                  
                  Now, when I look back, I realize how instrumental those days have been in shaping me. It was the hardest I had ever worked, and though the outcome of the final trial match didn’t go into my favour, all the hard work I had put in gave me back my self-confidence and also something that I hadn’t expected: Discipline along with the ability to persevere. These 7 months hold a very special place in my heart and I really hope they will always inspire me to persevere no matter the challenges!</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeatha">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeatha" class="collapse" data-parent="#accordionatha" style="font-weight: normal; color: white;" align=justify>I could've never imagined in my wildest dreams, a sport I played for fun would have such a huge impact on my life! My most significant learnings at IIT Bombay came through sports, the opportunities and lessons that Badminton at IIT Bombay gave me, are something I will treasure and cherish forever. It was via sports, that I discovered, discipline is what makes you realize your true potential. If you're disciplined even in a single aspect of your life, all other things fall in place to bring out the best version of yourself. 
                  Also, I never really understood the quote ""Sometimes journey is more beautiful than the destination"", it was my journey with Badminton that made me appreciate its true meaning. The final destination (or the thing you're aiming for) just gives you a temporary sense of gratification and you soon move on to other goals in your life. But in case you don't succeed, remember, it is the journey that has moulded you, into a new and better person. It has hardened you mentally and shaped your character and personality in a positive way that makes it worth all your efforts!
                  My beloved sport 'Badminton' taught me discipline and perseverance and also gave me some of the best people I've ever met (my teammates and my council). 'Badminton' thank you for everything, I'll be forever grateful!</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fouratha">Any message to your new team and juniors?</a>
                <br><p id="fouratha" class="collapse" data-parent="#accordionatha" style="font-weight: normal; color: white;" align=justify>You guys are amongst the most amazing and hard-working folks I’ve met. It was always you, who motivated me to strive to give my best in practice sessions. I immensely respect you all because of the dedication that you have shown in the Inter-IIT semester, it was never easy, but the way you all managed everything sets an example for all to learn. I would really miss our training sessions and also the ‘abs and core workout’ I made you all guys go through everyday (sorry for that :P). I would never forget our post-practice dinners at Gullu and hostel canteens. And of course, our gossip conversations and parties! 
                  Keep working with the same diligence, I’m sure Inter-IIT medal isn’t far away (for boys) and for girls, you all have already proved your prowess this year, all that is needed is an upgrade to gold :) I’m saving the rest of the senti for my convo treat (:P), I hope it happens soon. Can’t imagine how life will be without seeing your faces everyday, I will miss you and also S. Rasaniya!</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

   <div style="background: rgba(0,0,0,0.04);" class="container-fluid" id="basketball">
    <h1 class="mb-1 text-capitalize" id="aq"><b>basketball</b></h1>
<hr style="margin-top: 5px; border: 2px solid #FCC72C;">
    <div class="row">
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Lakshya.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Lakshya.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Lakshya Bandhu</h4>
              <p data-toggle="modal" data-target="#aquaticsModallaks" class="card-text stretched-link">From NSO baskteball to playing for the GC, the journey has been special ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Adityabas.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Adityabas.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Aditya Raj</h4>
              <p data-toggle="modal" data-target="#aquaticsModaladitbas" class="card-text stretched-link">The very sight of the basketball courts in insti, pulled me towards the game ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Dileep.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Dileep.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Dileep Kumar</h4>
              <p data-toggle="modal" data-target="#aquaticsModaldile" class="card-text stretched-link">I've always played regularly and when I joined with people to play I hadn't  ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Virendra.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Virendra.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Virendra Ade</h4>
              <p data-toggle="modal" data-target="#aquaticsModalvire" class="card-text stretched-link">Being keen on continuing to play the game was how I got introduced to the ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Gali.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Gali.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Gali Meghana</h4>
              <p data-toggle="modal" data-target="#aquaticsModalgali" class="card-text stretched-link">With my brother serving as motivation, I took up basketball but ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Radhika.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Radhika.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Radhika Tibrewala</h4>
              <p data-toggle="modal" data-target="#aquaticsModalradh" class="card-text stretched-link">I was confused between swimming and basketball, and I thank stars that I ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Saurabh.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Saurabh.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Saurabh Rajguru</h4>
              <p data-toggle="modal" data-target="#aquaticsModalsaurbas" class="card-text stretched-link">I always loved the game and with Virendra as my wingie, we always went for ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Karan.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Karan.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Karan Kothadiya</h4>
              <p data-toggle="modal" data-target="#aquaticsModalkara" class="card-text stretched-link">I knew a few seniors beforehand and I used to play the sport since ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Dhroopad.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Dhroopad.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Dhroopad Verma</h4>
              <p data-toggle="modal" data-target="#aquaticsModaldhro" class="card-text stretched-link">NSO basketball is how I started. Honestly now it's tough to pick a ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModallaks">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Lakshya Bandhu</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionlaks">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onelaks">How were you introduced to your sport in insti?</a>
                <br><p id="onelaks" class="collapse show" data-parent="#accordionlaks" style="font-weight: normal; color: white;" align=justify>Through NSO</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twolaks">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twolaks" class="collapse" data-parent="#accordionlaks" style="font-weight: normal; color: white;" align=justify>Playing the hostel GC was a great experience</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threelaks">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threelaks" class="collapse" data-parent="#accordionlaks" style="font-weight: normal; color: white;" align=justify>I love playing basketball, and I tried to do so whenever I got a chance in the institute. All the team members are brilliant players and are very passionate about basketball so amidst of all the academic pressure basketball was a great escape for me to relax and have fun. I believe the feeling of happiness and relief I felt whenever I played is something I will always remember.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourlaks">Any message to your new team and juniors?</a>
                <br><p id="fourlaks" class="collapse" data-parent="#accordionlaks" style="font-weight: normal; color: white;" align=justify>IIT Bombay has very good facilities for not only basketball but every other sport so our successors must take full use of it, and keep the sport culture that has been developed by the seniors alive.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModaladitbas">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Aditya Raj</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionaditbas">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneaditbas">How were you introduced to your sport in insti?</a>
                <br><p id="oneaditbas" class="collapse show" data-parent="#accordionaditbas" style="font-weight: normal; color: white;" align=justify>First day at iit -> Saw the basketball court -> Went to play</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twoaditbas">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twoaditbas" class="collapse" data-parent="#accordionaditbas" style="font-weight: normal; color: white;" align=justify>Running crossies in the rain with the entire team</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeaditbas">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeaditbas" class="collapse" data-parent="#accordionaditbas" style="font-weight: normal; color: white;" align=justify>Sports at IIT-BOMBAY is a farce </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fouraditbas">Any message to your new team and juniors?</a>
                <br><p id="fouraditbas" class="collapse" data-parent="#accordionaditbas" style="font-weight: normal; color: white;" align=justify>Work hard on your game.... Work harder on your career</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModaldile">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Dileep Kumar</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordiondile">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onedile">How were you introduced to your sport in insti?</a>
                <br><p id="onedile" class="collapse show" data-parent="#accordiondile" style="font-weight: normal; color: white;" align=justify>I go to play basketball daily. So slowly I started playing with other players on the court. I didn't realize they are the IITB team members. Later I got to know and I continued playing with them. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twodile">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twodile" class="collapse" data-parent="#accordiondile" style="font-weight: normal; color: white;" align=justify>Endless basketball discussions with teammates especially Ajay, Thomas, Harit and Viru</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threedile">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threedile" class="collapse" data-parent="#accordiondile" style="font-weight: normal; color: white;" align=justify>I got my basketball family. I am taking back memories </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourdile">Any message to your new team and juniors?</a>
                <br><p id="fourdile" class="collapse" data-parent="#accordiondile" style="font-weight: normal; color: white;" align=justify>Do win gold</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalvire">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Virendra Ade</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionvire">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onevire">How were you introduced to your sport in insti?</a>
                <br><p id="onevire" class="collapse show" data-parent="#accordionvire" style="font-weight: normal; color: white;" align=justify>I had played basketball before coming to college so I was very keen on continuing the game here, hence I would visit the courts frequently and that's how I got introduced to the team.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twovire">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twovire" class="collapse" data-parent="#accordionvire" style="font-weight: normal; color: white;" align=justify>1. The last inter IIT was surely memorable, the spirit that the entire team displayed was exceptional. Many memories on and off the court, the train journey to Kharagpur all hold a special place.
                  2. Also when I had joined the team for my first inte IIT, winning the silver at Madras was extremely special.
                  3. We did go for many local tournaments, winning and celebrating was always fun. Wish we could have played more.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threevire">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threevire" class="collapse" data-parent="#accordionvire" style="font-weight: normal; color: white;" align=justify>The journey through these 4 years as a sportsperson has been exceptional. It was an extremely enjoyable experience and surely has helped me develope as a person. I recieved great support from people around me.There were many highs and lows throughout, but the love for the game and constant support from the teammate helped me to stay focused and motivated, getting better at managing the toughest of toughest times eventually getting better day by day, creating tonnes of memories and making great friends.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourvire">Any message to your new team and juniors?</a>
                <br><p id="fourvire" class="collapse" data-parent="#accordionvire" style="font-weight: normal; color: white;" align=justify> Set your goals and work hard to achieve them. There are gonna be hard times, but always remember people around will be there to help you. Stay motivated, give it your all on the court, compete among yourselves and enjoy the process. If there's anything you need, always remember me and the other guys are just one call away. </p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalgali">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Gali Meghana</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordiongali">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onegali">How were you introduced to your sport in insti?</a>
                <br><p id="onegali" class="collapse show" data-parent="#accordiongali" style="font-weight: normal; color: white;" align=justify>Honestly, I'd never played any sport before. But when I'd joined IIT Bombay, my brother was already a part of the basketball team and he really pushed me to give basketball a shot. And so I gave a shot at the NSO trials of basketball & badminton (both went equally horrible) but I guess the coach saw some potential in me and took me into the basketball NSO and that's how it all started.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twogali">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twogali" class="collapse" data-parent="#accordiongali" style="font-weight: normal; color: white;" align=justify>There isn't one specific memory frankly. Everytime we hung out as a team on or off the court was a different memory to remember in itself. IIT Bombay's Basketball team and it's legacy is one we're always proud of, be it the involvement of our alumni or just how we lift each other up through our wins and losses. And as far as the whole IIT Bombay sports is concerned, I absolutely love and cherish all the memories of us going to a match of any sport we can in our free time during Inter IIT and cheering for our contingent. It's where all the sports come together and really stand for eachother and the energy around is crazy.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threegali">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threegali" class="collapse" data-parent="#accordiongali" style="font-weight: normal; color: white;" align=justify>As cliche as it might sound, sports did bring a great extent of discipline in my life. It has been an integral part of my growth as an individual and now that I think of it, I don't know what I'd do in the Institute if it weren't for basketball. I'm definitely taking back a bag full of memories and amazing friends for a lifetime. I'm also very grateful to be coached by Edwin Sir, he has been nothing but a great teacher ( a tough one for sure if you know about his fitness drills) and had supported me a lot even through the period where I was physically not in a state to play.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourgali">Any message to your new team and juniors?</a>
                <br><p id="fourgali" class="collapse" data-parent="#accordiongali" style="font-weight: normal; color: white;" align=justify>I'd only like to say that, never ever think of the game as a task to complete. I felt that way for a brief period of time when things were getting tougher and I felt I couldn't go through it, but the moment you start enjoying the game it all changes. Let your passion for the sport drive you and always keep pushing yourself. AND your team and contingent are your biggest strength and support, never lose out on that. </p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalradh">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Radhika Tibrewala</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionradh">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneradh">How were you introduced to your sport in insti?</a>
                <br><p id="oneradh" class="collapse show" data-parent="#accordionradh" style="font-weight: normal; color: white;" align=justify>NSO. As we joined IIT, we had to chose a sport, I was confused between basketball and swimming because I had done both on a very basic level. In the Preference list, I dont even remember why basketball was above swimming, but if I look back, I thank my stars for the choice I made then. 

                  And it was just a lucky time that basketball girl had some vacancies and Edwin sir was doing mass recruiting, so I got to be a part of NSO! And it all began from there..</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#tworadh">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="tworadh" class="collapse" data-parent="#accordionradh" style="font-weight: normal; color: white;" align=justify>Has to be Inter-IITs! What a time it has been and every year, we waited for December to come in cz it was the best time of the year! 

                  What adrenaline rush to be on the court, represent your insti and face all the anti-cheering yet give your best performance! (Obv for the few seconds Edwin Sir let us be inside, one mistake and next was we were scene on the bench!)
                  
                  What super fun to cheer with our cracking throats for our boy's team and see them win! xD 
                  
                  And then comes the whole contingent! And all those slogans and everything we prepare to cheer (more to anti-cheer) ! Will miss this time specially.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeradh">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeradh" class="collapse" data-parent="#accordionradh" style="font-weight: normal; color: white;" align=justify>I take a big bunch of friends which includes seniors and juniors! I take the bonds which I know will be long-lasting cz the bonds we developed have been deep as we have been in this together! (Specially Edwin Sir's morning fitness sessions!) 

                  I do take a lot of values and learnings recieved from my coach and teammates, which I will keep with myself throughout!  
                  
                  And of course! Loads of memories!</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourradh">Any message to your new team and juniors?</a>
                <br><p id="fourradh" class="collapse" data-parent="#accordionradh" style="font-weight: normal; color: white;" align=justify>Just play with passion whichever sport interests you and always keep a sense of giving back to the IITB sports cz it will knowingly unknowingly give you alot in your journey!</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalsaurbas">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Saurabh Rajguru</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionsaurbas">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onesaurbas">How were you introduced to your sport in insti?</a>
                <br><p id="onesaurbas" class="collapse show" data-parent="#accordionsaurbas" style="font-weight: normal; color: white;" align=justify>I always liked playing basketball and I was lucky to have Virendra as my wingie so we just started playing and going for the camp trials</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twosaurbas">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twosaurbas" class="collapse" data-parent="#accordionsaurbas" style="font-weight: normal; color: white;" align=justify>The rigorous training sessions where we were pushed each other to bring out the best.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threesaurbas">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threesaurbas" class="collapse" data-parent="#accordionsaurbas" style="font-weight: normal; color: white;" align=justify>It requires commitment and a lot of will power to improve and earn a medal. Injuries are depressing. But be patient and consistent in your practice. You'll certainly improve.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#foursaurbas">Any message to your new team and juniors?</a>
                <br><p id="foursaurbas" class="collapse" data-parent="#accordionsaurbas" style="font-weight: normal; color: white;" align=justify>Enjoy the sport you are playing and learn to have fun with your teammates and seniors. It is not all about grinding. Play freely and have fun. The coaches are strict for a reason. Listen to them and respect them. There is always time for mischief when the strict training routine is over.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalkara">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Karan Kothadiya</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionkara">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onekara">How were you introduced to your sport in insti?</a>
                <br><p id="onekara" class="collapse show" data-parent="#accordionkara" style="font-weight: normal; color: white;" align=justify>Knew some of the seniors from before. Used to play from before.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twokara">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twokara" class="collapse" data-parent="#accordionkara" style="font-weight: normal; color: white;" align=justify>All those tournaments played</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threekara">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threekara" class="collapse" data-parent="#accordionkara" style="font-weight: normal; color: white;" align=justify>Great friendships, wonderful moments and a lot of love from every sportsperson in the institute</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourkara">Any message to your new team and juniors?</a>
                <br><p id="fourkara" class="collapse" data-parent="#accordionkara" style="font-weight: normal; color: white;" align=justify>Just play!</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModaldhro">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Dhroopad Verma</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordiondhro">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onedhro">How were you introduced to your sport in insti?</a>
                <br><p id="onedhro" class="collapse show" data-parent="#accordiondhro" style="font-weight: normal; color: white;" align=justify>I was part of the NSO Basketball in my freshie year, so through NSO I was introduced in basketball.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twodhro">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twodhro" class="collapse" data-parent="#accordiondhro" style="font-weight: normal; color: white;" align=justify>There are a lot of wonderful memories, and it is tough for me to pick one out of it. I think our match against IIT Guwahati in the previous Inter IIT was one of the best memories for me. Although our team was definitely better than Guwahati’s side since we were playing in Guwahati’s home court, there was a huge crowd and a lot of anti cheering for us which made that match very exciting and challenging. Since I had never played in such an environment the feeling was very different. And the match was also intense as the score was almost equal till the 3rd quarter but in the end, we won that match and it was a great experience for me.
                  </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threedhro">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threedhro" class="collapse" data-parent="#accordiondhro" style="font-weight: normal; color: white;" align=justify>Definitely a lot of amazing memories and a lot of lessons which I learned through this whole journey. I think basketball made my entire journey much more exciting and memorable, and I am very grateful for being the part of IIT Bombay basketball team and also thankful to my whole team for always supporting me and inspiring me. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourdhro">Any message to your new team and juniors?</a>
                <br><p id="fourdhro" class="collapse" data-parent="#accordiondhro" style="font-weight: normal; color: white;" align=justify>I just want to say best of luck. We have a great team, and I hope IIT Bombay will win gold this time.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div style="background: rgba(0,0,0,0.04);" class="container-fluid" id="boardgames">
    <h1 class="mb-1 text-capitalize" id="aq"><b>board games</b></h1>
<hr style="margin-top: 5px; border: 2px solid #FCC72C;">
    <div class="row">
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/darshil.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/darshil.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Darshil Desai</h4>
              <p data-toggle="modal" data-target="#aquaticsModaldars" class="card-text stretched-link">Surprisingly my wing had a strong chess culture. Winning Inter IIT in the freshie year ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModaldars">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title">Darshil Desai</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordiondars">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onedars">How were you introduced to your sport in insti?</a>
                <br><p id="onedars" class="collapse show" data-parent="#accordiondars" style="font-weight: normal; color: white;" align=justify>My wing had an amazing chess culture</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twodars">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twodars" class="collapse" data-parent="#accordiondars" style="font-weight: normal; color: white;" align=justify>I had 2 chess teams. My freshman year Inter-IIT team and my wing. Winning the Inter IIT in the freshman year is as sweet as it possibly gets. My wing is probably the only wing in the history of wings to have 100% chess literacy and we had these gladiator like events with 2 players playing on a chess board and the rest of us, the audience, surrounding them from all sides and cheering after the every move that was played.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threedars">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threedars" class="collapse" data-parent="#accordiondars" style="font-weight: normal; color: white;" align=justify>Sweet memories. Lots of boards and courts, friends and rivals.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourdars">Any message to your new team and juniors?</a>
                <br><p id="fourdars" class="collapse" data-parent="#accordiondars" style="font-weight: normal; color: white;" align=justify>Dhruv, Vineet, Samarth, Atharva, Shreyam ki suno, sab set hai.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div style="background: rgba(0,0,0,0.04);" class="container-fluid" id="cricket">
    <h1 class="mb-1 text-capitalize" id="aq"><b>cricket</b></h1>
<hr style="margin-top: 5px; border: 2px solid #FCC72C;">
    <div class="row">
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Anshu.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Anshu.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Anshu Ahirwar</h4>
              <p data-toggle="modal" data-target="#aquaticsModalansh" class="card-text stretched-link">My journey in cricket began with NSO and from there I made it into the team ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Nakul.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Nakul.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Nakul Ghate</h4>
              <p data-toggle="modal" data-target="#aquaticsModalnaku" class="card-text stretched-link">There was no stopping me from going to the nets once I set foot in insti ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Prateek.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Prateek.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Prateek Bhardwaj</h4>
              <p data-toggle="modal" data-target="#aquaticsModalprate" class="card-text stretched-link">Cricket GC was how I started off. I can never forget the ecstatic feeling ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Jagdeep.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Jagdeep.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Jagdeep Dular</h4>
              <p data-toggle="modal" data-target="#aquaticsModaljagd" class="card-text stretched-link">Through my 4 years I never stopped playing cricket. Dedicated as I was ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Harsh.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Harsh.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Patel Harsh</h4>
              <p data-toggle="modal" data-target="#aquaticsModalpate" class="card-text stretched-link">Cricket has been like my lifeline at insti. Starting with NSO and then to ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Raftar.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Raftar.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Raftar Ahmed</h4>
              <p data-toggle="modal" data-target="#aquaticsModalraft" class="card-text stretched-link">NSO cricket is how I set foot on this path. Udghosh and Inter IIT 2018 ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Adityacri.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Adityacri.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Aditya Biniwale</h4>
              <p data-toggle="modal" data-target="#aquaticsModaladitcri" class="card-text stretched-link">Cricket GC and Cricmania allowed me to step into this wonderful world ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalansh">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Anshu Ahirwar</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionansh">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneansh">How were you introduced to your sport in insti?</a>
                <br><p id="oneansh" class="collapse show" data-parent="#accordionansh" style="font-weight: normal; color: white;" align=justify>NSO</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twoansh">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twoansh" class="collapse" data-parent="#accordionansh" style="font-weight: normal; color: white;" align=justify>Aavhan 2018</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fouransh">Any message to your new team and juniors?</a>
                <br><p id="fouransh" class="collapse" data-parent="#accordionansh" style="font-weight: normal; color: white;" align=justify>Be hardworking</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalnaku">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Nakul Ghate</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionnaku">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onenaku">How were you introduced to your sport in insti?</a>
                <br><p id="onenaku" class="collapse show" data-parent="#accordionnaku" style="font-weight: normal; color: white;" align=justify>I went straight to the indoor nets after coming to insti</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twonaku">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twonaku" class="collapse" data-parent="#accordionnaku" style="font-weight: normal; color: white;" align=justify>Second year Inter IIT camp was the best</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threenaku">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threenaku" class="collapse" data-parent="#accordionnaku" style="font-weight: normal; color: white;" align=justify>My friendship with equally stupid mates, trophies, medals and a whole lot of injuries :p </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fournaku">Any message to your new team and juniors?</a>
                <br><p id="fournaku" class="collapse" data-parent="#accordionnaku" style="font-weight: normal; color: white;" align=justify>Wins and losses are just part of your life. If you love the game, do not ever quit or show signs of any weakness no matter what happens. Believe me you will eventually get through</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalprate">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Prateek Bhardwaj</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionprate">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneprate">How were you introduced to your sport in insti?</a>
                <br><p id="oneprate" class="collapse show" data-parent="#accordionprate" style="font-weight: normal; color: white;" align=justify>Cricket GC</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twoprate">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twoprate" class="collapse" data-parent="#accordionprate" style="font-weight: normal; color: white;" align=justify>1. Winning semi-final in Udghosh' 2017 at the very last ball against IIT Kanpur.
                  2. Winning Bronze medal against IIT Madras in 53rd Inter IIT at Guwahati again at the very last ball</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeprate">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeprate" class="collapse" data-parent="#accordionprate" style="font-weight: normal; color: white;" align=justify>1. Importance of Team bonding
                  2. Gelling up well with players of different age and different background
                  3. Enjoying the sport with your team is more important than winning or losing </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourprate">Any message to your new team and juniors?</a>
                <br><p id="fourprate" class="collapse" data-parent="#accordionprate" style="font-weight: normal; color: white;" align=justify>1. Work hard to be the better version of yourself instead of getting into the team
                  2. Physical and mental fitness is equally important alongwith skills</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModaljagd">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Jagdeep Dular</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionjagd">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onejagd">How were you introduced to your sport in insti?</a>
                <br><p id="onejagd" class="collapse show" data-parent="#accordionjagd" style="font-weight: normal; color: white;" align=justify>Through NSO Cricket</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twojagd">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twojagd" class="collapse" data-parent="#accordionjagd" style="font-weight: normal; color: white;" align=justify>Though we didn't win any medal in Inter-IIT 2k19, every single day of our stay there has a different mesmerizing memory. I would always cherish those memories for my lifetime.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threejagd">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threejagd" class="collapse" data-parent="#accordionjagd" style="font-weight: normal; color: white;" align=justify>Cricket was the only extra-curricular activity I was involved in since first year. I enjoyed every bit of it. People of IIT Bombay Sports have been so generous and helpful. Cricket helped me with sharpening some personality traits, which definitely helped me in growing as a better person. In simple words, cricket at IIT Bombay has made my stay memorable.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourjagd">Any message to your new team and juniors?</a>
                <br><p id="fourjagd" class="collapse" data-parent="#accordionjagd" style="font-weight: normal; color: white;" align=justify>Be sincere with your sports on the field and off the field it's upto you. I personally preferred being bakchod as much as I could have been.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalpate">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Patel Harsh</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionpate">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onepate">How were you introduced to your sport in insti?</a>
                <br><p id="onepate" class="collapse show" data-parent="#accordionpate" style="font-weight: normal; color: white;" align=justify>NSO and the sports orientation</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twopate">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twopate" class="collapse" data-parent="#accordionpate" style="font-weight: normal; color: white;" align=justify>Inter IIT in final year was really special. Though we did not got the result we wanted, but it is really one of the best experiences of my life. The time I shared with the great people of my team and our whole contingent, cheering, anti-cheering, fights and all other moments in inter IIT will always tell me ""Let's go back to that time!"". Big tournaments like inter IIT really brings the team closer and I saw that in the match against KGP and also after we were knocked out and when I was crying. My team has been supportive to me throughout the whole year and managing both placements and inter IIT practice felt like fun and much easier with such team-mates! 

                  There are lots of great memories. Secy tenure, hearing ball to ball commentary over the phone of the semifinal and 3rd place games (I could not get into the team that year unfortunately), Trek in the sophie year, treats, local tournaments, celebrations, some tough calls that had to be taken for the team during my tenure..... the list will keep going on!</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threepate">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threepate" class="collapse" data-parent="#accordionpate" style="font-weight: normal; color: white;" align=justify>I have got two amazing teams from IIT Bombay sports:  My cricket team and my council (in fact my bachcha council as well!). I have got some great friends, inspiring seniors and both lovely and inspiring juniors! I am sure that they will stay in touch with me and always will stand by me and support me whenever I may need them in the future. I have learned a lot and got support at one or the other point throughout my insti life from my team-mates, seniors and juniors. I have developed many great qualities like determination, sportsman spirit, handling pressure situation, time management, professionalism etc. through sports.

                  Institute Cricket and IIT Bombay sports has been one of my top-most priorities and has always been very close to my heart and it will be. My team is like my family and my team-mates have always been there in my ups and downs. I could not have asked for a better team and team-mates that I had during my final year. To be honest I dreamt of being a top scorer and win the last tournament I would play for IIT Bombay and get an award which will be in front of me in my showcase reminding me of the memories of IIT Bombay sports and Cricket. But the pandemic had some different plans.
                  
                  IIT Bombay Cricket and sports have given a lot to me and I have tried my best to give all I could towards the betterment of them and will keep doing so wherever required. I will always be thankful to them and keep handling the social media handles of cricket which too are close to me till I am allowed to. :p And I will always want the Institute Sports Council to reach out to me for any sort of help! (It's a request. May sound desperate though! :p)</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourpate">Any message to your new team and juniors?</a>
                <br><p id="fourpate" class="collapse" data-parent="#accordionpate" style="font-weight: normal; color: white;" align=justify>This can't be that formal but I will still give it a try! To the new team and juniors, It's really easy to manage both sports and acads. Just be focused wherever you are. Don't think about acads while playing and don't think about cricket while studying. Reach out to your seniors or me for any sort of help. Don't play for getting into the team. Rather, play to win. The track-suit, the IIT Bombay Tshirt and all have a great value and are earned after a lot efforts. Do respect them and never let them down. 

                  Over all this, play for fun, play because it interests you, play because you want to. Cricket is competitive but believe me there are lot of opportunities if you want to play in the institute and playing cricket is what gives you fun. Always support and stand by your team mates and fight for them when needed. Aur kabhi bhi jyada load nhi lene ka.. Be calm always on and off the field. Baaki to live hi bataunga yaar, kitna hi likh lunga! :p You can always reach out to me for any any sort of help. Be it related to cricket, personal life, rejection (3 saal kata tha inter IIT me!), managing acads (since I have seen SPIs from 5.2 to 8.5  I may be able to understand and answer! :p) or whatever it can be. Also normal Hi, Hello ya bakchodi ke liye bhi call kr lena!</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalraft">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Raftar Ahmed</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionraft">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneraft">How were you introduced to your sport in insti?</a>
                <br><p id="oneraft" class="collapse show" data-parent="#accordionraft" style="font-weight: normal; color: white;" align=justify>From NSO</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#tworaft">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="tworaft" class="collapse" data-parent="#accordionraft" style="font-weight: normal; color: white;" align=justify>Udhghosh match with IIT Roorkee and the match against IIT Madras in Inter IIT '18</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeraft">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeraft" class="collapse" data-parent="#accordionraft" style="font-weight: normal; color: white;" align=justify>A lot of memories and true friends</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourraft">Any message to your new team and juniors?</a>
                <br><p id="fourraft" class="collapse" data-parent="#accordionraft" style="font-weight: normal; color: white;" align=justify>Don't think much about the result just enjoy the process and form a great team </p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModaladitcri">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Aditya Biniwale</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionaditcri">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneaditcri">How were you introduced to your sport in insti?</a>
                <br><p id="oneaditcri" class="collapse show" data-parent="#accordionaditcri" style="font-weight: normal; color: white;" align=justify>GC, Cricmania </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twoaditcri">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twoaditcri" class="collapse" data-parent="#accordionaditcri" style="font-weight: normal; color: white;" align=justify>In my freshmen year while I was batting (I am not a regular batsman, I am a bowler) during a match in Cricmania, I was quite nervous which the opposition keeper figured out pretty quickly (a senior Inter IIT player), and instead of any form of anti-cheering that I was expecting I heard few words of encouragement from him "acche se khel dhyan laga ke toh decent score ban jayega team ka " and I was amazed by the culture of strong support and encouragement for each and every player </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeaditcri">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeaditcri" class="collapse" data-parent="#accordionaditcri" style="font-weight: normal; color: white;" align=justify>Great friends and a bunch of amazing memories </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fouraditcri">Any message to your new team and juniors?</a>
                <br><p id="fouraditcri" class="collapse" data-parent="#accordionaditcri" style="font-weight: normal; color: white;" align=justify>Have fun, you won't get better facilities elsewhere </p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div style="background: rgba(0,0,0,0.04);" class="container-fluid" id="football">
    <h1 class="mb-1 text-capitalize" id="aq"><b>football</b></h1>
<hr style="margin-top: 5px; border: 2px solid #FCC72C;">
    <div class="row">
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Balwant.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Balwant.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Balwant Kr Singh</h4>
              <p data-toggle="modal" data-target="#aquaticsModalbalw" class="card-text stretched-link">Starting with PGGC to winning silver at Inter IIT 2016 at Kanpur, the ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Toshan.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Toshan.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Toshan Kharumnuid</h4>
              <p data-toggle="modal" data-target="#aquaticsModaltosh" class="card-text stretched-link">It was my seniors who inspired me to come for team practices and ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Aikansh.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Aikansh.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Aikansh Ghusinga</h4>
              <p data-toggle="modal" data-target="#aquaticsModalaika" class="card-text stretched-link">Staring enthusiastically in my freshie year and then going on to put ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Yash.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Yash.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Yash Bhaskar</h4>
              <p data-toggle="modal" data-target="#aquaticsModalyash" class="card-text stretched-link">From NSO to Aavhan 2019, it has been a journey full of friends, memories ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalbalw">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Balwant Kr Singh</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionbalw">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onebalw">How were you introduced to your sport in insti?</a>
                <br><p id="onebalw" class="collapse show" data-parent="#accordionbalw" style="font-weight: normal; color: white;" align=justify>My journey of football began in institute through PG football GC. 
                  </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twobalw">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twobalw" class="collapse" data-parent="#accordionbalw" style="font-weight: normal; color: white;" align=justify>My fondest memory -won silver in inter iit sports meet at Kanpur in 2016.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threebalw">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threebalw" class="collapse" data-parent="#accordionbalw" style="font-weight: normal; color: white;" align=justify>I learnt a lot from football. Life is a football ground. We come to play and compete each other, learn from each other. We build friends,share emotions and help each other.We share victory and learn from our mistakes and always prepare our self for next victory.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourbalw">Any message to your new team and juniors?</a>
                <br><p id="fourbalw" class="collapse" data-parent="#accordionbalw" style="font-weight: normal; color: white;" align=justify>As you know football is a team game. So play as a team and talk to each other, know each other's strengths and utilize it for benefit of team.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModaltosh">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Toshan Kharumnuid</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordiontosh">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onetosh">How were you introduced to your sport in insti?</a>
                <br><p id="onetosh" class="collapse show" data-parent="#accordiontosh" style="font-weight: normal; color: white;" align=justify>Got introduced to a few seniors during NSO trials after which they invited me for the institute team practices</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twotosh">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twotosh" class="collapse" data-parent="#accordiontosh" style="font-weight: normal; color: white;" align=justify>A lot of fond memories shared with the team but I'd say one of the most memorable was the friendly match we got to play against the Reliance Youth team in 2018 thanks to Coach Ruxton. Getting the opportunity to play on a world class pitch with the facilities to match was quite the experience, individually as well as with the team</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threetosh">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threetosh" class="collapse" data-parent="#accordiontosh" style="font-weight: normal; color: white;" align=justify>Only the most dearest of memories shared with some of the best people, be it on the pitch as a player or off the pitch as a council member too. 
                  Can't even begin to express how dearly I'll miss the world class facilities, the plethora of events and the camaraderie of all the sportspersons in campus</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourtosh">Any message to your new team and juniors?</a>
                <br><p id="fourtosh" class="collapse" data-parent="#accordiontosh" style="font-weight: normal; color: white;" align=justify>Enjoy it as much as you can, while you can.
                  Consider yourselves very fortunate to have such amazing facilities available to you, so try to make the best of it.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalaika">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Aikansh Ghusinga</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionaika">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneaika">How were you introduced to your sport in insti?</a>
                <br><p id="oneaika" class="collapse show" data-parent="#accordionaika" style="font-weight: normal; color: white;" align=justify>I was part of NSO football during my first year. Having not played much football in the past 2 years I was always excited to play and therefore I started going to the team practices.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twoaika">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twoaika" class="collapse" data-parent="#accordionaika" style="font-weight: normal; color: white;" align=justify>Of all the fond memories I've made in the institute over the past 4 years, the ones with our team are really close to my heart. Still going to my first Inter IIT after a lot of hard work and putting on the institute colours for the first time really gave me the chills. Even though we didn't win anything but spending those weeks with the team, meeting some familiar faces in their hometown and the Shillong trip we went on are some of the memories which I will cherish for the rest of my life.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeaika">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeaika" class="collapse" data-parent="#accordionaika" style="font-weight: normal; color: white;" align=justify>Sports teaches us a lot in life and I have been lucky enough to be in an institute with such tremendous sports culture. Competing for the GC added a whole new dimension to our sports experiences here at IIT Bombay. I have met some amazing people and also got to learn a variety of new sports which I never thought I'll even play. I can't even begin to express how dearly I'll miss these things.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fouraika">Any message to your new team and juniors?</a>
                <br><p id="fouraika" class="collapse" data-parent="#accordionaika" style="font-weight: normal; color: white;" align=justify>This is one of the best teams I've ever played with. Football is a team game so always play like a team, also better the team bonding the more fun you'll have on the field. Try to hangout a little more outside the field and also go out drinking a little more. You are fortunate enough to have a few years left to avail those amazing facilities so try to play like its your last day so you won't have any regrets.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalyash">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Yash Bhaskar</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionyash">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneyash">How were you introduced to your sport in insti?</a>
                <br><p id="oneyash" class="collapse show" data-parent="#accordionyash" style="font-weight: normal; color: white;" align=justify>Nso</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twoyash">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twoyash" class="collapse" data-parent="#accordionyash" style="font-weight: normal; color: white;" align=justify>Aavhan 2019 is by far the most matured and improved performance given by our team and I really enjoyed playing the tournament with such a good side</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeyash">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeyash" class="collapse" data-parent="#accordionyash" style="font-weight: normal; color: white;" align=justify>Lots of memories, good friends and a remarkable growth as a sportsperson.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fouryash">Any message to your new team and juniors?</a>
                <br><p id="fouryash" class="collapse" data-parent="#accordionyash" style="font-weight: normal; color: white;" align=justify>In the end it comes down to improvement outside and inside the pitch, they have to improve and get better everyday as team and also need that hunger and determination to win.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div style="background: rgba(0,0,0,0.04);" class="container-fluid" id="hockey">
    <h1 class="mb-1 text-capitalize" id="aq"><b>hockey</b></h1>
<hr style="margin-top: 5px; border: 2px solid #FCC72C;">
    <div class="row">
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Prabhu.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Prabhu.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">V Siddhartha Prabhu</h4>
              <p data-toggle="modal" data-target="#aquaticsModalsidd" class="card-text stretched-link">From being the sports secy of my hostel and then finally beating ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/MANISH.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/MANISH.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">MANISH MEENA</h4>
              <p data-toggle="modal" data-target="#aquaticsModalmani" class="card-text stretched-link">Hockey was like love at first sight for me. Starting as a goal keeper ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Aiyappa.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Aiyappa.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Aiyappa KS</h4>
              <p data-toggle="modal" data-target="#aquaticsModalaiya" class="card-text stretched-link">Hockey was like therapy to me. I started out of sheer curiosity ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Hasan.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Hasan.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Hasan Rassiwala</h4>
              <p data-toggle="modal" data-target="#aquaticsModalhasa" class="card-text stretched-link">Teamspirit and energy are key to my entire journey with IITB Sports ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Viraj.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Viraj.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Viraj Singh</h4>
              <p data-toggle="modal" data-target="#aquaticsModalvirahoc" class="card-text stretched-link">Getting rejected from NSO cricket to badminton to table tennis, hockey ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Tinesh.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Tinesh.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Tinesh Pathania</h4>
              <p data-toggle="modal" data-target="#aquaticsModaltine" class="card-text stretched-link">Being familiar with the game, on coming to insti I directly met ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalsidd">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">V Siddhartha Prabhu</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionsidd">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onesidd">How were you introduced to your sport in insti?</a>
                <br><p id="onesidd" class="collapse show" data-parent="#accordionsidd" style="font-weight: normal; color: white;" align=justify>When I was the sports secretary of my hostel I had to play in the hockey GC as there were not enough people to make a team.. After that I got a chance to practice with the team and with the help of Apoorv Sahare, our coach Gaurav sir and players from the team, I made it to the team</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twosidd">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twosidd" class="collapse" data-parent="#accordionsidd" style="font-weight: normal; color: white;" align=justify>The semifinal win against our own alumni team in Aavhan is the best memory of our team. We were ecstatic after the match as we worked as a team to beat the experienced team.. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threesidd">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threesidd" class="collapse" data-parent="#accordiontosh" style="font-weight: normal; color: white;" align=justify>The friends I made and truckloads of memories with them.... Will surely miss playing in institute.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#foursidd">Any message to your new team and juniors?</a>
                <br><p id="foursidd" class="collapse" data-parent="#accordionsidd" style="font-weight: normal; color: white;" align=justify>Work as a team, that's all that matters. Work hard and don't forget to have fun. Sports is always fun... and also when you are on the field give your one hundred percent.. </p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalmani">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">MANISH MEENA</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionmani">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onemani">How were you introduced to your sport in insti?</a>
                <br><p id="onemani" class="collapse show" data-parent="#accordionmani" style="font-weight: normal; color: white;" align=justify>It's Interesting to tell you this as lots of people say 'Love at first sight'. But in my scenario it's not for a girl, it's for hockey. When I first watched a GC match, I got very engaged with that match and I felt as if I belonged here as a goalkeeper. I realised a goalkeeper plays a very important role in hockey. It is a responsible position. I then spoke to my friend Harsh Ranjan who was already in the hockey team and then I met Pramod sir and told him that I wanted to be a goalkeeper and this way my journey started.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twomani">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twomani" class="collapse" data-parent="#accordionmani" style="font-weight: normal; color: white;" align=justify>The first fondest memory of hockey was when Sir told me that I got selected for the Inter IIT team  
                  Life gives me lots of ups and downs and hockey gives me the balance.
                  What's the meaning of unity?- For me it's my team. A junior in the team colouring his hair is not such a big deal but when the whole team colours their hairs, then that's a big deal because some teammates want to colour their hair for the Inter IIT. It's called unity and the love for the team
                  When my Hostel team won bronze medal, that match was memorable for me because Hostel 8 won a medal after almost 5 years and the 8 second journey was amazing for me  i stopped four 8 sec goals out of five.There are lots of memories that I have but I should stop here otherwise I may end up filling the whole book</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threemani">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threemani" class="collapse" data-parent="#accordionmani" style="font-weight: normal; color: white;" align=justify>Good friends and confidence. Through Hockey I got to know myself. This journey made me confident and strong & has given me a NEVER GIVE UP attitude. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourmani">Any message to your new team and juniors?</a>
                <br><p id="fourmani" class="collapse" data-parent="#accordionmani" style="font-weight: normal; color: white;" align=justify>I want to say only one thing  It's a team game, not an individual game. Always be united. Each and every member of the Hockey Team is important and lastly
                  NEVER GIVE UP BECAUSE IT'S ONLY YOU WHO MAKES YOURSELF WEAK AND STRONG 
                  ALL THE BEST GUYS</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalaiya">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Aiyappa KS</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionaiya">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneaiya">How were you introduced to your sport in insti?</a>
                <br><p id="oneaiya" class="collapse show" data-parent="#accordionaiya" style="font-weight: normal; color: white;" align=justify>Out of interest, searching for the hockey ground 😄</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twoaiya">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twoaiya" class="collapse" data-parent="#accordionaiya" style="font-weight: normal; color: white;" align=justify>Inter IIT, Aavhan, trainings, camps, wins and losses, most importantly the  teammates.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeaiya">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeaiya" class="collapse" data-parent="#accordionaiya" style="font-weight: normal; color: white;" align=justify>It's a team sport and until and unless you play it as a team it makes no sense ,, bond well with your teammates and never cheat 😉 like they did in hostel GC ... At the end it's a respectful game.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fouraiya">Any message to your new team and juniors?</a>
                <br><p id="fouraiya" class="collapse" data-parent="#accordionaiya" style="font-weight: normal; color: white;" align=justify>It's a great place with immense resources, trust me you'll never get such resources anywhere else ...so utilise them well, train hard if you want to make a difference and believe in the sport no matter what others say, just be there on the ground. It's the best form of therapy. It's a sport like no other. If you don't train you can't play well unlike cricket or football. Not many people have the courage to hold a hockey stick and face those dangerous balls, so be proud of yourself.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalhasa">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Hasan Rassiwala</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionhasa">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onehasa">How were you introduced to your sport in insti?</a>
                <br><p id="onehasa" class="collapse show" data-parent="#accordionhasa" style="font-weight: normal; color: white;" align=justify>Introductory session on sports</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twohasa">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twohasa" class="collapse" data-parent="#accordionhasa" style="font-weight: normal; color: white;" align=justify>I would like to address this with two words- energy and team spirit</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threehasa">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threehasa" class="collapse" data-parent="#accordionhasa" style="font-weight: normal; color: white;" align=justify>How to train yourself to be fit and healthy and of course lots of memories</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourhasa">Any message to your new team and juniors?</a>
                <br><p id="fourhasa" class="collapse" data-parent="#accordionhasa" style="font-weight: normal; color: white;" align=justify>I suggest everyone to keep practicing the sports in which you are interested, You will surely gain something and will achieve a better place in future</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    
    <div class="modal fade" id="aquaticsModalvirahoc">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Viraj Singh</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionvirahoc">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onevirahoc">How were you introduced to your sport in insti?</a>
                <br><p id="onevirahoc" class="collapse show" data-parent="#accordionvirahoc" style="font-weight: normal; color: white;" align=justify>Well, like most of the freshers my first priority was NSO Cricket but I didn't get through it. Then I tried my luck at Badminton, Table Tennis but got rejected again :P. I got to know from somewhere that in NSO Hockey, freshers were selected without any playing experience or prior knowledge of the game. My mother had played hockey at her university level so hockey was a common name in my house, so I decided to give a shot in NSO Hockey. From that day, the beautiful journey of my hockey started.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twovirahoc">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twovirahoc" class="collapse" data-parent="#accordionvirahoc" style="font-weight: normal; color: white;" align=justify>The win against IIT Ropar in this Inter IIT has to be the best as I finally made it to the goal-scoring list :P</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threevirahoc">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threevirahoc" class="collapse" data-parent="#accordionvirahoc" style="font-weight: normal; color: white;" align=justify>Lots of good memories to take back, but the best of all are with the people associated with IIT Bombay Sports :)</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourvirahoc">Any message to your new team and juniors?</a>
                <br><p id="fourvirahoc" class="collapse" data-parent="#accordionvirahoc" style="font-weight: normal; color: white;" align=justify>Guys, we have had a rough patch in Inter IIT recently, but do remember that once IITB's Hockey team won the gold medal without conceding a goal in the entire Inter IIT tournament, not too many years ago. So keep believing in yourselves and I am sure we are not far away from bringing a medal soon and bringing our glory back</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    
    <div class="modal fade" id="aquaticsModaltine">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Tinesh Pathania</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordiontine">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onetine">How were you introduced to your sport in insti?</a>
                <br><p id="onetine" class="collapse show" data-parent="#accordiontine" style="font-weight: normal; color: white;" align=justify>I had played hockey earlier in IIT Guwahati during my M.Tech so here in IIT Bombay, I directly went to field and met coach.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twotine">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twotine" class="collapse" data-parent="#accordiontine" style="font-weight: normal; color: white;" align=justify>Inter IIT Hockey Team of 2016 was the best team. I enjoyed most of the practice sessions and matches with this team.  I would like to thank our former coach Pramod Shingade for improving my game sense and skills. Other than this,  leading the Hostel 13 Hockey Team for three times in GC and reaching the GC final this year was one of the satisfying moment for me.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threetine">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threetine" class="collapse" data-parent="#accordiontine" style="font-weight: normal; color: white;" align=justify>All players in the field should have same level of energy and dedication to enjoy the game of hockey.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourtine">Any message to your new team and juniors?</a>
                <br><p id="fourtine" class="collapse" data-parent="#accordiontine" style="font-weight: normal; color: white;" align=justify>Be disciplined and give your best for the team. Always keep a balance in academics and sports.  Every year, there are players who give their best for the Inter IIT sports meet.  So, it is important to attend most of the practice sessions and value the efforts of your team mates.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div style="background: rgba(0,0,0,0.04);" class="container-fluid" id="kabaddi">
    <h1 class="mb-1 text-capitalize" id="aq"><b>kabaddi</b></h1>
<hr style="margin-top: 5px; border: 2px solid #FCC72C;">
    <div class="row">
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/profile.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/profile.png" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Kuldeep Singh</h4>
              <p data-toggle="modal" data-target="#aquaticsModalkuld" class="card-text stretched-link">From being introduced to the game on the day of trials to getting ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Gudavalli.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Gudavalli.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Gudavalli Lokesh</h4>
              <p data-toggle="modal" data-target="#aquaticsModalguda" class="card-text stretched-link">From fighting for the introduction of Kabaddi to leading the team for Gold ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Rohan.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Rohan.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Rohan Chavan</h4>
              <p data-toggle="modal" data-target="#aquaticsModalroha" class="card-text stretched-link">The journey with Kabaddi in insti has been incredible. I cannot forget ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalroha">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Rohan Chavan</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionroha">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneroha">How were you introduced to your sport in insti?</a>
                <br><p id="oneroha" class="collapse show" data-parent="#accordionroha" style="font-weight: normal; color: white;" align=justify>Through mutual friends in Khokho</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#tworoha">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="tworoha" class="collapse" data-parent="#accordionroha" style="font-weight: normal; color: white;" align=justify>Winning Udghosh 2019, at IIT Kanpur</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeroha">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeroha" class="collapse" data-parent="#accordionroha" style="font-weight: normal; color: white;" align=justify>To never give up!
                  It doesn't matter if its your first GC or your last, if you put in enough hard work, the Gold is yours.
                  As one of my friends said, ""Gold medals aren’t really made of gold. They’re made of sweat, determination and a hard to find alloy called guts!""</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourroha">Any message to your new team and juniors?</a>
                <br><p id="fourroha" class="collapse" data-parent="#accordionroha" style="font-weight: normal; color: white;" align=justify>If corona permits and second semester begins as usual then AAVHAN to jitna hi hai.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalkuld">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Kuldeep Singh</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionkuld">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onekuld">How were you introduced to your sport in insti?</a>
                <br><p id="onekuld" class="collapse show" data-parent="#accordionkuld" style="font-weight: normal; color: white;" align=justify>One day my department's sports secretary told me about the Kabbadi trial. The next day I went for the trial and I was selected.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twokuld">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twokuld" class="collapse" data-parent="#accordionkuld" style="font-weight: normal; color: white;" align=justify>Fondest memory with my team is Semifinal match with opposite team (Lingya) in Udghosh. Party with friends in train journey.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threekuld">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threekuld" class="collapse" data-parent="#accordionkuld" style="font-weight: normal; color: white;" align=justify>I do take back many things from my journey here with sports at IIT Bombay. A fit lifestyle, memories of happy life with friends, experience and courage in sports</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourkuld">Any message to your new team and juniors?</a>
                <br><p id="fourkuld" class="collapse" data-parent="#accordionkuld" style="font-weight: normal; color: white;" align=justify>The most important problem is "time" in the institute and also in life. So not do waste your time and also of the others. Some people may not come on time so the others couldn't practice much. It is essential that all people are on time. Just that will improve us a lot</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalguda">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Gudavalli Lokesh</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionguda">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneguda">How were you introduced to your sport in insti?</a>
                <br><p id="oneguda" class="collapse show" data-parent="#accordionguda" style="font-weight: normal; color: white;" align=justify>I fought for introducing Kabaddi in the institute. I introduced Kabaddi in the institute and was the first captain and coach for kabaddi team</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twoguda">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twoguda" class="collapse" data-parent="#accordionguda" style="font-weight: normal; color: white;" align=justify>I am very proud to say that in my captaincy, we won gold in Udghosh after losing the first match from IIT BHU, we won against them in finals was the bestest memory</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeguda">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeguda" class="collapse" data-parent="#accordionguda" style="font-weight: normal; color: white;" align=justify>Memories, medals, respect and friends</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourguda">Any message to your new team and juniors?</a>
                <br><p id="fourguda" class="collapse" data-parent="#accordionguda" style="font-weight: normal; color: white;" align=justify>Keep practising. Practice makes a man perfect</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div style="background: rgba(0,0,0,0.04);" class="container-fluid" id="kho kho">
    <h1 class="mb-1 text-capitalize" id="aq"><b>kho kho</b></h1>
<hr style="margin-top: 5px; border: 2px solid #FCC72C;">
    <div class="row">
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Vishal.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Vishal.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Vishal Mahale</h4>
              <p data-toggle="modal" data-target="#aquaticsModalmaha" class="card-text stretched-link">I started with PG GC and since then, the evening practice sessions with ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Padavala.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Padavala.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Padavala Jayanth</h4>
              <p data-toggle="modal" data-target="#aquaticsModalpada" class="card-text stretched-link">I started playing kho kho in school itself, but the crazy bonding here that ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Dharamsingh.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Dharamsingh.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Dharamsingh Nenavath</h4>
              <p data-toggle="modal" data-target="#aquaticsModaldhar" class="card-text stretched-link">Winning means you're willing to go longer, work harder, and give in more ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Rushikesh.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Rushikesh.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Rushikesh Wankhade</h4>
              <p data-toggle="modal" data-target="#aquaticsModalrush" class="card-text stretched-link">Being introduced to the sport here in the freshmen orientation to becoming ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Sayali.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Sayali.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Sayali Kshirsagar</h4>
              <p data-toggle="modal" data-target="#aquaticsModalsaya" class="card-text stretched-link">From playing kho-kho just to get into a sport to eventually getting into the ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Shrikant.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Shrikant.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Shrikant Sharma</h4>
              <p data-toggle="modal" data-target="#aquaticsModalshri" class="card-text stretched-link">I started with NSO and then to Udghosh, my journey has been an interesting one ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Chandni.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Chandni.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Chandni</h4>
              <p data-toggle="modal" data-target="#aquaticsModalchan" class="card-text stretched-link">The nostalgia that Aavhan gave me and the love I've received from the team has ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Jatin.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Jatin.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Jatin Chandawat</h4>
              <p data-toggle="modal" data-target="#aquaticsModaljati" class="card-text stretched-link">NSO was the first step and ever since I've enjoyed every moment on the court ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Gudavalli.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Gudavalli.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Gudavalli Lokesh</h4>
              <p data-toggle="modal" data-target="#aquaticsModalgudakho" class="card-text stretched-link">I've always been passionate about sports. The opportunities at insti were ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Vinay.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Vinay.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Vinay Dadi</h4>
              <p data-toggle="modal" data-target="#aquaticsModaldadi" class="card-text stretched-link">At the very first sight of the Kho Kho court during the traditional insti tour  ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Harshit.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Harshit.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Harshit Handa</h4>
              <p data-toggle="modal" data-target="#aquaticsModalhand" class="card-text stretched-link">From normally playing Kho Kho in school to joining NSO and finally, in the team ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Gautam.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Gautam.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Raj Gautam Kumar</h4>
              <p data-toggle="modal" data-target="#aquaticsModalgaut" class="card-text stretched-link">The sports orientation itself proved me wrong about the sporting culture of IITB ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Aayushi.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Aayushi.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Aayushi Baheti</h4>
              <p data-toggle="modal" data-target="#aquaticsModalaayu" class="card-text stretched-link">Coming to know about the sport through a senior, it feels great to have a family ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Priyanka.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Priyanka.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Priyanka Lakku</h4>
              <p data-toggle="modal" data-target="#aquaticsModalpriy" class="card-text stretched-link">Having played badminton, it became my first choice for NSO, but I came across ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalmaha">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Vishal Mahale</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionmaha">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onemaha">How were you introduced to your sport in insti?</a>
                <br><p id="onemaha" class="collapse show" data-parent="#accordionmaha" style="font-weight: normal; color: white;" align=justify>Through PG GC</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twomaha">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twomaha" class="collapse" data-parent="#accordionmaha" style="font-weight: normal; color: white;" align=justify>Evening practice session with teammates and PG GC 2019</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threemaha">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threemaha" class="collapse" data-parent="#accordionmaha" style="font-weight: normal; color: white;" align=justify>Dedication towards your goal</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourmaha">Any message to your new team and juniors?</a>
                <br><p id="fourmaha" class="collapse" data-parent="#accordionmaha" style="font-weight: normal; color: white;" align=justify>Work hard guys! Enjoy your game and make lots of memories. You will cherish these moments all your life.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalpada">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Padavala Jayanth</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionpada">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onepada">How were you introduced to your sport in insti?</a>
                <br><p id="onepada" class="collapse show" data-parent="#accordionpada" style="font-weight: normal; color: white;" align=justify>I used to play in school but after seeing the team bonding here, both on and off the court, I was strongly motivated to join the team.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twopada">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twopada" class="collapse" data-parent="#accordionpada" style="font-weight: normal; color: white;" align=justify>Even though I spent less time on the Kho-Kho court I never felt like I was missing something. For a team with bonding like this every player will always be motivated to give their 110% of their game. My fondest memory will be the one where we won in the semi finals of Aavhan'19 as I regret not playing for the team in Aavhan'18.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threepada">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threepada" class="collapse" data-parent="#accordionpada" style="font-weight: normal; color: white;" align=justify>I often see my juniors and new guys in the team come up with new techniques which always makes me think that there's so much to learn.From the Kho-Kho team I learnt that there's a "way to success" which is not performing well in the game but 
                  "To think like you're the Top seed and Practice hard like you're the least favorites for a tournament"</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourpada">Any message to your new team and juniors?</a>
                <br><p id="fourpada" class="collapse" data-parent="#accordionpada" style="font-weight: normal; color: white;" align=justify>Always evolve your game otherwise someone will take your position :-))
                  As long as you're playing for the team always think for the benefit of the team.
                  Khub masti ye sab bolne ki jaroorat nhi h wo to tum log karte ho.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModaldhar">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Dharamsingh Nenavath</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordiondhar">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onedhar">How were you introduced to your sport in insti?</a>
                <br><p id="onedhar" class="collapse show" data-parent="#accordiondhar" style="font-weight: normal; color: white;" align=justify>I did my schooling from a government school, I have spent more time playing sports than studying. Starting from my school days I was very interested in playing kho-kho. I have also played in state-level school tournaments, Later on, when JEE preparation started I have not seen ground for 2 years. when I came to IIT as a freshie, we had to take part in NSO, NCC OR NSS so as a sport enthusiastic person I chose NSO and kho kho was not my preference in NSO because I thought that kho kho won't be played here, I had selected NSO volleyball. After the first NSO session of volleyball when I first saw our kho kho indoor court, I absolutely fell in love with it! Seniors were playing on the court, I met one of my favorite senior on that evening and talked to him about my interest in kho kho. He asked me to come for regular practice in the evening and that's when my journey started with the team. Since then, I have been a part of this beautiful kho kho family. I used to attend the practice sessions of kho kho after NSO volleyball. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twodhar">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twodhar" class="collapse" data-parent="#accordiondhar" style="font-weight: normal; color: white;" align=justify>There were many memories that I shall always be fond of; starting from the Juhu beach trip with our machavu seniors to the last Aavhan practice sessions, had an infinite fun time, always helpful seniors both on and off the ground, fundae from seniors, Udghosh trip, zest coep tournament, cheering out at the top of our voice for others during hostel GC’s, Udghosh & Aavhan tournament, passing out treats and Diwali celebrations with the kho kho family were amazing. 

                  We were the champions of Udghosh for three consecutive years but our dream of winning in Aavhan IIT Bombay is not yet fulfilled I'm hoping that the upcoming team will full fill this !! 
                  
                  The one thing that I’ll always remember is when we had defeated our strongest competitor in semifinals of Aavhan 2019, after losing 2 times in Aavhan with them, audience and the whole team members were jumping, dancing and screaming like a hell, that was the happiest and special moment for every one of us.
                  
                  In my second year Udghosh camp, despite of regular practice I was not on the list of 11 players when the team was announced. I went to the restroom and cried for hours. I realised that I had the techniques and I knew the game well but the speed was where I was lacking. I took the situation as motivation. Later on, I used to work out in the Gym & Gymkhana grounds for almost 2 hours before the regular kho-kho practice sessions to work on my speed and agility. I have improved because of regular practice and dedication towards the game. Always remember, no one can can motivate you, work hard everyday for yourself. Real improvement starts when you feel like giving up but still push youself to practice for some more time.
                  </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threedhar">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threedhar" class="collapse" data-parent="#accordiondhar" style="font-weight: normal; color: white;" align=justify>Being on the ground is like attaining absolute happiness for me. No matter how much stress you are in due to the assignments, projects, and the daily hectic class & lab sessions you will forget everything after seeing the smiley faces of teammates and spending quality time with them.

                  Playing sports for a long time made me disciplined human and a good leader, if I had focused only on academics I would not have developed as a person. I believe a balance between academics and extra-curricular activities is very essential.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourdhar">Any message to your new team and juniors?</a>
                <br><p id="fourdhar" class="collapse" data-parent="#accordiondhar" style="font-weight: normal; color: white;" align=justify>“Winning means you’re willing to go longer, work harder, and give more than anyone else”, Hard work and grit makes a champion.  

                  My message to the upcoming team is to be regular on the court. Give your best each time and also don't just limit yourself to the game, interact with teammates, make new friends, take part in team meetings, family trips, and treats which make you united because, in the end, it's the beautiful memories that will be remembered forever.  
                  
                  Together you can achieve anything, you can defeat every other team in Aavhan too. elp your teammates both on and off ground. I wish you all the very best!! Thank you kho kho family for being with me throughout my institute life!!</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalrush">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Rushikesh Wankhade</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionrush">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onerush">How were you introduced to your sport in insti?</a>
                <br><p id="onerush" class="collapse show" data-parent="#accordionrush" style="font-weight: normal; color: white;" align=justify>Through the freshmen sports orientation</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#tworush">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="tworush" class="collapse" data-parent="#accordionrush" style="font-weight: normal; color: white;" align=justify>Udghosh 2018 and Zest 2019 are the most remarkable memories of my sports journey at IIT Bombay. And how can I forget those relaxing outings with the team. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threerush">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threerush" class="collapse" data-parent="#accordionrush" style="font-weight: normal; color: white;" align=justify>The support and love is what makes the kho kho team a family away from home. The lifelong friendships is what I would take back from this family. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourrush">Any message to your new team and juniors?</a>
                <br><p id="fourrush" class="collapse" data-parent="#accordionrush" style="font-weight: normal; color: white;" align=justify>Be regular on the court. Take part in the meetings, family & team trips and you will make some of the best memories here. Get to know your teammates, interact with them and enjoy the kho-kho journey.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalsaya">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Sayali Kshirsagar</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionsaya">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onesaya">How were you introduced to your sport in insti?</a>
                <br><p id="onesaya" class="collapse show" data-parent="#accordionsaya" style="font-weight: normal; color: white;" align=justify>Since school, I always wanted to learn and excel at a sport. Due to the lack of facilities and opportunities available to me, the only sport I ever played was Kho-Kho. After getting into the institute, I got introduced to NSO through my mentor and the IITB sports orientation. I met a senior, Shalu at H15 mess and we discussed diverse opportunities and events offered in sports by insti. I was thrilled to join Kho-Kho NSO and fortunately, I got selected in it. Hence, I embarked on a journey to explore and hone my Kho-Kho skills.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twosaya">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twosaya" class="collapse" data-parent="#accordionsaya" style="font-weight: normal; color: white;" align=justify>During my freshman year, I used to practice daily for Spardha, a sports festival of IIT BHU and eventually got selected in the Institute Kho-Kho team. I was the only freshie in the girls team and this added extra pressure to perform well. Additionally, due to unavailability of gum sole shoes, I suffered from shin splints before 15 days of the tournament. Struggling a lot to practice daily, I focused on improving my techniques and game. During this tough time, I received enormous support from the team and coach. Invaluable inputs from them and the fun we had outside the field during the tournament immensely helped me sail through this arduous journey. This was my first time where I was representing IITB, and despite challenging circumstances, I made a significant contribution to the team's success and we ended up at second position. The jolly faces of everyone left a mark on my heart.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threesaya">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threesaya" class="collapse" data-parent="#accordionsaya" style="font-weight: normal; color: white;" align=justify>Sports have been an integral part of my insti life. The people I met on the field played a major role in my beautiful and memorable journey. The bond I share with them is priceless. I believe the relentless pursuit of perfection and discipline is the key to excel in any sport. Kho-Kho being a team sport, taught me how to coordinate, plan strategies, and support teammates. I also developed the ability to perform under pressure, make quick decisions and value every second of the game time. Being an active member of Institute Kho-Kho and Athletics team has inculcated a fighting spirit in me. You never lose in sports, you either win or learn. The journey matters more than the final results. I believe these learnings could be very well applied to every walk of life.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#foursaya">Any message to your new team and juniors?</a>
                <br><p id="foursaya" class="collapse" data-parent="#accordionsaya" style="font-weight: normal; color: white;" align=justify>I would suggest each and everyone to never hesitate in trying a new sport. The institute facilities are very conducive to learning new sports. Anyone can learn any sport. You don't have to be great to start but you have to start somewhere to be great one day. During these times, you should take out some time to exercise at home to stay fit and healthy. Create stronger bonds in the team and interact with as many people as you can. Regular practice, teamwork and discipline are the factors which will determine your performance at the end. Stay dedicated and determined. One does not become a champion overnight, it takes time. Never give up, keep pushing your limits and your efforts will pay off. All the best!</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalshri">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Shrikant Sharma</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionshri">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneshri">How were you introduced to your sport in insti?</a>
                <br><p id="oneshri" class="collapse show" data-parent="#accordionshri" style="font-weight: normal; color: white;" align=justify>NSO</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twoshri">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twoshri" class="collapse" data-parent="#accordionshri" style="font-weight: normal; color: white;" align=justify>Udghosh Journey</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeshri">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeshri" class="collapse" data-parent="#accordionshri" style="font-weight: normal; color: white;" align=justify>Be a better person everyday and have faith in yourself</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourshri">Any message to your new team and juniors?</a>
                <br><p id="fourshri" class="collapse" data-parent="#accordionshri" style="font-weight: normal; color: white;" align=justify>With an excellent infrastructure in terms of sports and academics, go out and explore if have haven't yet; never go for a rat race, do whatever you feel is best for you, work smart and hard, and you'll do wonders.  
                  Cheers</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalchan">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Chandni</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionchan">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onechan">How were you introduced to your sport in insti?</a>
                <br><p id="onechan" class="coll showapse" data-parent="#accordionchan" style="font-weight: normal; color: white;" align=justify>Through department sports GSec Saransh Lohiya</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twochan">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twochan" class="collapse" data-parent="#accordionchan" style="font-weight: normal; color: white;" align=justify>Aahvan (it reminded me my school sports days :) )</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threechan">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threechan" class="collapse" data-parent="#accordionchan" style="font-weight: normal; color: white;" align=justify>A lot of love and unforgettable memories.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourchan">Any message to your new team and juniors?</a>
                <br><p id="fourchan" class="collapse" data-parent="#accordionchan" style="font-weight: normal; color: white;" align=justify>Always be a TEAM </p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModaljati">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Jatin Chandawat</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionjati">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onejati">How were you introduced to your sport in insti?</a>
                <br><p id="onejati" class="collapse show" data-parent="#accordionjati" style="font-weight: normal; color: white;" align=justify>NSO</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twojati">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twojati" class="collapse" data-parent="#accordionjati" style="font-weight: normal; color: white;" align=justify>Team trips</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threejati">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threejati" class="collapse" data-parent="#accordionjati" style="font-weight: normal; color: white;" align=justify>Lots of sweets memories to cherish for lifetime.
                  May be some friends also</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourjati">Any message to your new team and juniors?</a>
                <br><p id="fourjati" class="collapse" data-parent="#accordionjati" style="font-weight: normal; color: white;" align=justify>Kindly be regular and fully devoted towards your sport. Prioritise the game to enjoy it to the fullest. Also interact with as many people as you can. You will find amazing people here.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalgudakho">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Gudavalli Lokesh</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordiongudakho">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onegudakho">How were you introduced to your sport in insti?</a>
                <br><p id="onegudakho" class="collapse show" data-parent="#accordiongudakho" style="font-weight: normal; color: white;" align=justify>Sports is a passion from my childhood, so i dreamed of becoming more passionate towards it and when I joined in IIT i have seen a lot of scope in academics as well as in sports and there by I thought of exploring myself in sports so I have selected NSO(KhoKho) in my 1st year. While NSO sessions are going on, few seniors inspired me to join in regular practice for the selection of KhoKho team that's how I have been selected as a team member.... this is how my journey has started </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twogudakho">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twogudakho" class="collapse" data-parent="#accordiongudakho" style="font-weight: normal; color: white;" align=justify>There are infinite memories with my teammates as we won Gold medals and it was my 1st memory in insti as a fresher (Spardha) and 3 gold medals (Udghosh) in the following years. After every winning we used to celebrate as a big festival with lot of sportiveness and enthusiasm. One of the best memory was winning in the last moment in semifinals (Aavhan 2k19) after losing twice with the same team (2 are national players from that team and rest of all are club players). After winning whole audience were full of joy, happy tears, jumping, dancing and screaming... it was a very proud moment for all of us.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threegudakho">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threegudakho" class="collapse" data-parent="#accordiongudakho" style="font-weight: normal; color: white;" align=justify>In sports we gain a lot of enthusiasm n sportiveness, so that we can achieve anything with lot of hardwork and dedication and we experience a real struggle to win and we get an immense support from the coaches and i have learnt a lot from them how to achieve in life and how to handle the situations n challenges.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourgudakho">Any message to your new team and juniors?</a>
                <br><p id="fourgudakho" class="collapse" data-parent="#accordiongudakho" style="font-weight: normal; color: white;" align=justify>We have to grow and learn in different aspects from all the situations we face in our life, it applies to both sports as well as professional career. Take every opportunity as a choice as if u don't have any other options to choose. Always have a positive attitude, hardworking nature, dedication, self confidence, persistent goal to achieve something and always believe in yourself and never give up no matter what. Sports itself teaches u how to struggle n put an effort to win, a sense of euphoria, feeling of being winning, self confidence and also our inner self pushes us and encourages us to look forward and go ahead. Every failure inspires us and gives more courage to succeed, so accept both failures and success n explore yourselves. Always support your teammates, when we all work as a whole we can achieve even more. </p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModaldadi">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Vinay Dadi</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordiondadi">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onedadi">How were you introduced to your sport in insti?</a>
                <br><p id="onedadi" class="collapse show" data-parent="#accordiondadi" style="font-weight: normal; color: white;" align=justify>Got a sight at Kho Kho court during Insti tour. Decided to join at that very moment</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twodadi">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twodadi" class="collapse" data-parent="#accordiondadi" style="font-weight: normal; color: white;" align=justify>Avenging the 2 years defeat in Aavhan</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threedadi">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threedadi" class="collapse" data-parent="#accordiondadi" style="font-weight: normal; color: white;" align=justify>Memories</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourdadi">Any message to your new team and juniors?</a>
                <br><p id="fourdadi" class="collapse" data-parent="#accordiondadi" style="font-weight: normal; color: white;" align=justify>Keep bonding</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalhand">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Harshit Handa</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionhand">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onehand">How were you introduced to your sport in insti?</a>
                <br><p id="onehand" class="collapse show" data-parent="#accordionhand" style="font-weight: normal; color: white;" align=justify>Used to play Kho-Kho in school. NSO me select ho gya then team me 😛</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twohand">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twohand" class="collapse" data-parent="#accordionhand" style="font-weight: normal; color: white;" align=justify>Winning Udghosh one-sided, losing Aavhan final by one point. Trips, treats.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threehand">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threehand" class="collapse" data-parent="#accordionhand" style="font-weight: normal; color: white;" align=justify>Memories, experience, Kho-Kho court bakchodis, Caring Seniors, loving juniors and nalayak batchies 😛 </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourhand">Any message to your new team and juniors?</a>
                <br><p id="fourhand" class="collapse" data-parent="#accordionhand" style="font-weight: normal; color: white;" align=justify>Insti life is best life. Enjoy each and every moment. You gonna miss this.
                  Make memories, as many as possible, because after college you won't remember concepts but memories</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalgaut">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Raj Gautam Kumar</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordiongaut">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onegaut">How were you introduced to your sport in insti?</a>
                <br><p id="onegaut" class="collapse show" data-parent="#accordiongaut" style="font-weight: normal; color: white;" align=justify>Before entering the IITB I had the same perceptions as most of the people have for IIT as students only study in IIT. In the beginning seniors were conducting orientations for different clubs and IBs. During the sports orientations was astonished knowing the sports culture in Institute.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twogaut">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twogaut" class="collapse" data-parent="#accordiongaut" style="font-weight: normal; color: white;" align=justify>Though we as a kho-kho team were very good in Udghosh and Spardha. But in Aavhan sadly we had bad luck. In my 2nd year KGCE was the winner of Kho-kho in Aavhan. KGCE was a very good team as thay had players who practices regularly with different clubs in Maharashtra. In my 3rd we won against KGCE, that was the moment for our team when we enjoyed on the court. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threegaut">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threegaut" class="collapse" data-parent="#accordiongaut" style="font-weight: normal; color: white;" align=justify>During the stay at IITB not only i learnt the sportsmanship on the court but also off the court we were always remained as a team. I will miss those night outs and trips with the team members. Memories we made together during the stay will bind us together lifelong.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourgaut">Any message to your new team and juniors?</a>
                <br><p id="fourgaut" class="collapse" data-parent="#accordiongaut" style="font-weight: normal; color: white;" align=justify>It doesn't matter how good were you during the beginning of your sports journey in IITB. How you dedicated you were for your game will define the end of your sports journey. 
                  Make memories with your team mate. These things will not let you get away with your mates life long.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalaayu">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Aayushi Baheti</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionaayu">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneaayu">How were you introduced to your sport in insti?</a>
                <br><p id="oneaayu" class="collapse show" data-parent="#accordionaayu" style="font-weight: normal; color: white;" align=justify>Through a senior</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twoaayu">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twoaayu" class="collapse" data-parent="#accordionaayu" style="font-weight: normal; color: white;" align=justify>Udghosh </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeaayu">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeaayu" class="collapse" data-parent="#accordionaayu" style="font-weight: normal; color: white;" align=justify>A family </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fouraayu">Any message to your new team and juniors?</a>
                <br><p id="fouraayu" class="collapse" data-parent="#accordionaayu" style="font-weight: normal; color: white;" align=justify>Go and explore the various opportunities available out there. You never know what you might learn from even your failures. </p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalpriy">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Priyanka Lakku</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionpriy">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onepriy">How were you introduced to your sport in insti?</a>
                <br><p id="onepriy" class="collapse show" data-parent="#accordionpriy" style="font-weight: normal; color: white;" align=justify>Sports Orientation. Having played badminton in my school days on a basic level, I chose Badminton for my NSO. After a few days, I just decided to give Kho-Kho a try because of wingies and went to the court and practices and finally got into the team. It turned out to be one of the best decisions I've made.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twopriy">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twopriy" class="collapse" data-parent="#accordionpriy" style="font-weight: normal; color: white;" align=justify>Looking back, I thoroughly enjoyed all the practice sessions, matches and just being present on the court watching others play was fun. The tournaments we played representing the institute, cheering and the anti-cheering and the enthusiasm in the air there to give the best of the performances are some of the memories I would cherish forever. All the fun during the journeys and little celebrations we had on and off the court were amazing. I had a chance to go to Inter IIT as a part of Athletics and that time has a special place in my heart. That time of the year was special ❤️</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threepriy">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threepriy" class="collapse" data-parent="#accordionpriy" style="font-weight: normal; color: white;" align=justify>Apart from making some best of the bonds and innumerable memories, the journey with IIT Bombay Sports taught me some life lessons. Playing taught me persistence, discipline and how being fit and healthy helps in your overall development. Being in a team sport, I understood how wonders can be made if the whole team comes together supporting and lifting up each other at every point. Through some good and bad times, I've emerged out stronger both mentally and physically." You never lose. You either win or learn" made a lot of sense to me after this journey. I am grateful for all the opportunities and bonds that I was fortunate enough to make.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourpriy">Any message to your new team and juniors?</a>
                <br><p id="fourpriy" class="collapse" data-parent="#accordionpriy" style="font-weight: normal; color: white;" align=justify>Firstly, I would say you are the best juniors one could ask for. I have learnt a lot from you guys and I am going to miss each one of you. This phase of life is all about you, the freedom and myriad of opportunities you get. So, try to figure out what you like. Or not. Just give it a shot, fail miserably but keep trying. I assure IIT Bombay Sports will give you a lot as it did to me. Practice regularly with the same diligence, that makes a difference. Also, make sure this leads to enjoyment, satisfaction and lots of fun. Finally, All the best to all of you, make us proud and feel free to reach out to seniors for any sort of help.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div style="background: rgba(0,0,0,0.04);" class="container-fluid" id="lawn tennis">
    <h1 class="mb-1 text-capitalize" id="aq"><b>lawn tennis</b></h1>
<hr style="margin-top: 5px; border: 2px solid #FCC72C;">
    <div class="row">
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/KSaurav.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/KSaurav.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Kumar Saurav</h4>
              <p data-toggle="modal" data-target="#aquaticsModalksau" class="card-text stretched-link">I played tennis since school and I'm grateful I continued playing after ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Saunack.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Saunack.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Kumar Saunack</h4>
              <p data-toggle="modal" data-target="#aquaticsModalsaun" class="card-text stretched-link">I played tennis since school days so there was no stopping after ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Akanksha.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Akanksha.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Akanksha Choudhary</h4>
              <p data-toggle="modal" data-target="#aquaticsModalakan" class="card-text stretched-link">My friends motivated me to go to the court and I am glad I did give into ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Aayushman.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Aayushman.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Aayushman Mishra</h4>
              <p data-toggle="modal" data-target="#aquaticsModalmish" class="card-text stretched-link">I have been playing tennis for a while but JEE does a thing to us all and ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Sandeep.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Sandeep.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Sandip Lashkare</h4>
              <p data-toggle="modal" data-target="#aquaticsModalsandlt" class="card-text stretched-link">Summer school of sports is where I started my journey. I can never forget ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalksau">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Kumar Saurav</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionksau">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneksau">How were you introduced to your sport in insti?</a>
                <br><p id="oneksau" class="collapse show" data-parent="#accordionksau" style="font-weight: normal; color: white;" align=justify>I already played tennis back in school</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twoksau">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twoksau" class="collapse" data-parent="#accordionksau" style="font-weight: normal; color: white;" align=justify>All the outings in Spring 2018-19 semester</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeksau">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeksau" class="collapse" data-parent="#accordionksau" style="font-weight: normal; color: white;" align=justify>There are invaluable friends to be made in the sports community who support you and help you even long after they're gone. The community itself is diverse and worth spending time with.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourksau">Any message to your new team and juniors?</a>
                <br><p id="fourksau" class="collapse" data-parent="#accordionksau" style="font-weight: normal; color: white;" align=justify>Don't be afraid to interact with people in sports. There is no age barrier at all in sports and all differences of seniority are forgotten in those relationships.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalsaun">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Kumar Saunack</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionsaun">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onesaun">How were you introduced to your sport in insti?</a>
                <br><p id="onesaun" class="collapse show" data-parent="#accordionsaun" style="font-weight: normal; color: white;" align=justify>Played it since school</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twosaun">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twosaun" class="collapse" data-parent="#accordionsaun" style="font-weight: normal; color: white;" align=justify>Last two years of my B.Tech. degree</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threesaun">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threesaun" class="collapse" data-parent="#accordionsaun" style="font-weight: normal; color: white;" align=justify>New friends and new memories</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#foursaun">Any message to your new team and juniors?</a>
                <br><p id="foursaun" class="collapse" data-parent="#accordionsaun" style="font-weight: normal; color: white;" align=justify>Play hard, work hard</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalakan">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Akanksha Choudhary</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionakan">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneakan">How were you introduced to your sport in insti?</a>
                <br><p id="oneakan" class="collapse show" data-parent="#accordionakan" style="font-weight: normal; color: white;" align=justify>Friends</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twoakan">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twoakan" class="collapse" data-parent="#accordionakan" style="font-weight: normal; color: white;" align=justify>Inter IIT camp</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeakan">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeakan" class="collapse" data-parent="#accordionakan" style="font-weight: normal; color: white;" align=justify>The wonderful game I learnt</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourakan">Any message to your new team and juniors?</a>
                <br><p id="fourakan" class="collapse" data-parent="#accordionakan" style="font-weight: normal; color: white;" align=justify>Don’t let go of your sport under any circumstance because when you will graduate this will be the best memory of the student life you will have.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalmish">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Aayushman Mishra</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionmish">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onemish">How were you introduced to your sport in insti?</a>
                <br><p id="onemish" class="collapse show" data-parent="#accordionmish" style="font-weight: normal; color: white;" align=justify>I have been playing tennis for a long time and as soon as we got our rooms, I went to knock with Kshiteej Prasad. On the courts we found the then secretary Deepak Kinra and the boys' captain Devang. We got to know about the culture in the institute and that's how it became easy to interact with all the seniors of the sport.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twomish">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twomish" class="collapse" data-parent="#accordionmish" style="font-weight: normal; color: white;" align=justify>I think the best memory has to be the inter IIT camp of 2018 and the Inter IIT at Guwhati 2018. All the team members were amazing and we did a lot of fun stuff apart from the daily practices. I got the opportunity to be with my team during the Inter IIT and that was one of the best moments of my life. The moments we shared during the intense competition can never be forgotten and even after most of us have graduated, we are still inseperable.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threemish">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threemish" class="collapse" data-parent="#accordionmish" style="font-weight: normal; color: white;" align=justify>I devoted the most of my insti life to sports, be it tennis, squash or badminton, random nights playing table tennis and foosball with wingies. I am so happy that I explored this area as much as I could and to have such encouraging seniors is truly a boon. I had been disconnected from sports before coming here to the insti for atleast 4-5 years as I'm sure anyone who is preparing for JEE must be. I'm just happy that I could play tennis as long as I wished to with the best team.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourmish">Any message to your new team and juniors?</a>
                <br><p id="fourmish" class="collapse" data-parent="#accordionmish" style="font-weight: normal; color: white;" align=justify>The bunch of people coming in are so talented that it became tough for us to bully them in tennis XD. My advice to the juniors is to make use of the incredible facilities of our college to the best extent possible. Also the team I was a part of would do anything and everything to have each others' back. I expect you all to maintain the culture and get the Gold back.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalsandlt">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Sandip Lashkare</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionsandlt">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onesandlt">How were you introduced to your sport in insti?</a>
                <br><p id="onesandlt" class="collapse show" data-parent="#accordionsandlt" style="font-weight: normal; color: white;" align=justify>Summer School of sports</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twosandlt">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twosandlt" class="collapse" data-parent="#accordionsandlt" style="font-weight: normal; color: white;" align=justify>Night Camp Lonawala</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threesandlt">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threesandlt" class="collapse" data-parent="#accordionsandlt" style="font-weight: normal; color: white;" align=justify>All those exhaustive practice sessions, wild adventures, movie sessions.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#foursandlt">Any message to your new team and juniors?</a>
                <br><p id="foursandlt" class="collapse" data-parent="#accordionsandlt" style="font-weight: normal; color: white;" align=justify>Go Bombay. Go for Gold.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div style="background: rgba(0,0,0,0.04);" class="container-fluid" id="squash">
    <h1 class="mb-1 text-capitalize" id="aq"><b>squash</b></h1>
<hr style="margin-top: 5px; border: 2px solid #FCC72C;">
    <div class="row">
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Prakash.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Prakash.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Prakash Singh</h4>
              <p data-toggle="modal" data-target="#aquaticsModalprak" class="card-text stretched-link">I never found space in the baddy courts so squash it was! The accidental ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Ritik.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Ritik.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Ritik Madan</h4>
              <p data-toggle="modal" data-target="#aquaticsModalriti" class="card-text stretched-link">The moments I spent playing on the court made sure that I was only ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Kshiteej.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Kshiteej.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Kshiteej Prasad</h4>
              <p data-toggle="modal" data-target="#aquaticsModalkshi" class="card-text stretched-link">I had NSO tennis. On non-NSO days I went to the squash courts and ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalprak">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Prakash Singh</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionprak">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneprak">How were you introduced to your sport in insti?</a>
                <br><p id="oneprak" class="collapse show" data-parent="#accordionprak" style="font-weight: normal; color: white;" align=justify>Well, funny story is that I started playing Squash because the badminton courts were always full.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twoprak">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twoprak" class="collapse" data-parent="#accordionprak" style="font-weight: normal; color: white;" align=justify>The day after winning Gold at Guwahati, I was the first one to leave. The five of us; Karan, Hrishi, Kshiteej, Ritik and I, hugged in the middle of the road for several minutes. It was the friendship built through Squash that brought us together. It was indeed a very emotional. moment. That one team hug marked the end of a phase of our life. We undertook endeavors that surprised us with the limitlessness of our own capabilities.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeprak">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeprak" class="collapse" data-parent="#accordionprak" style="font-weight: normal; color: white;" align=justify>Grit! You are better than you think you are. You are stronger than you think are.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourprak">Any message to your new team and juniors?</a>
                <br><p id="fourprak" class="collapse" data-parent="#accordionprak" style="font-weight: normal; color: white;" align=justify>Most Squash players in the Insti are made here. Every four out of five good players hadn't touched the racquet before coming here. That's supposed to encourage you because that puts everyone on the same footing. That also means it's a test of your regularity on the courts, your own analysis of your game, and a continuous feedback from the team. Form a bond! Game sense and game quality both flourish exponentially in a group.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalriti">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Ritik Madan</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionriti">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneriti">How were you introduced to your sport in insti?</a>
                <br><p id="oneriti" class="collapse show" data-parent="#accordionriti" style="font-weight: normal; color: white;" align=justify>NSO along with a sprinkle of luck</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#tworiti">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="tworiti" class="collapse" data-parent="#accordionriti" style="font-weight: normal; color: white;" align=justify>Inter IIT 2017, Madras - We won our first ever gold medal since the introduction of Squash in the sports meet. Though I couldn't make it to the team, which I believe was perhaps the best team IIT Bombay has ever produced, but I was fortunate enough to have served as the secretary during that time. We subsequently won the Overall Championship as well, and the memories associated with that time always bring a smile on my face. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeriti">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeriti" class="collapse" data-parent="#accordionriti" style="font-weight: normal; color: white;" align=justify>What started as a curiosity for an intriguing sport called Squash eventually became arguably the most significant part of my Insti life. Along with a treasure trove of life learnings, the journey has made me a part of an endearing community, and I'm glad to take along some wonderful friendships along with me as I leave. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourriti">Any message to your new team and juniors?</a>
                <br><p id="fourriti" class="collapse" data-parent="#accordionriti" style="font-weight: normal; color: white;" align=justify>While the institute's atmosphere makes us obsessed about caring and working for the future, you'll find it refreshingly charming to slow down at times and appreciate the present, absorbing life as it is. The moments I spent playing on the court made sure that I was only thinking about the present, and it let me breathe even as I gasped for breath. Having said that, I would love to see the Championship trophy back in the institute soon, and I hope the future teams understand the stakes and glory associated with Inter IIT. </p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalkshi">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Kshiteej Prasad</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionkshi">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onekshi">How were you introduced to your sport in insti?</a>
                <br><p id="onekshi" class="collapse show" data-parent="#accordionkshi" style="font-weight: normal; color: white;" align=justify>I had chosen Lawn Tennis as my sport in NSO. However, I also liked playing squash, so I used to play squash on non-NSO days. A couple of seniors who were part of the team saw me play and asked me if I would like to practice with them. I became more interested in squash and decided to practice seriously.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twokshi">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twokshi" class="collapse" data-parent="#accordionkshi" style="font-weight: normal; color: white;" align=justify>"Every practice session with the team is a fond memory. Practice sessions used to get really intense whenever we used to play practice matches and everyone supported each other to get through tough fitness sessions.
                  There have been a lot of victories over 4 years, but some of my fondest memories are actually losses which brought the team closer together and motivated us to perform better. One particular memory is coming 4th in Udghosh'18 after 2 realy close losses. Post Udghosh, we practised really hard and ended up winning gold in Inter-IIT that year. "</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threekshi">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threekshi" class="collapse" data-parent="#accordionkshi" style="font-weight: normal; color: white;" align=justify>My life at IIT Bombay has revolved around sports from Day 1. I came here having played squash as an individual sport but I realized how awesome it feels being part of a team. What I take back from my journey is amazing memories with my teammates and all the lessons numerous wins and losses have taught me. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourkshi">Any message to your new team and juniors?</a>
                <br><p id="fourkshi" class="collapse" data-parent="#accordionkshi" style="font-weight: normal; color: white;" align=justify>"For juniors - Pick up a sport and work hard at it. You will be surprised by how much it shapes you as a person.
                  For my team - Enjoy the time you spend on court. Having fun is most important."</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div style="background: rgba(0,0,0,0.04);" class="container-fluid" id="table tennis">
    <h1 class="mb-1 text-capitalize" id="aq"><b>table tennis</b></h1>
<hr style="margin-top: 5px; border: 2px solid #FCC72C;">
    <div class="row">
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Rishika.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Rishika.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Rishika Gupta</h4>
              <p data-toggle="modal" data-target="#aquaticsModalgupt" class="card-text stretched-link">Freshman orientation was the door that opened the opportunity for ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/profile.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/profile.png" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Anush Ranka</h4>
              <p data-toggle="modal" data-target="#aquaticsModalrank" class="card-text stretched-link">Being a hobby, I naturally played tabletennis from time to time ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Sachit.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Sachit.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Sachit Mehrotra</h4>
              <p data-toggle="modal" data-target="#aquaticsModalsach" class="card-text stretched-link">NSO served as the stepping stone for me. Since then, there was no ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Lokesh.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Lokesh.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Lokesh Agrawal</h4>
              <p data-toggle="modal" data-target="#aquaticsModalloke" class="card-text stretched-link">I was already a TT guy before coming here, but the facilities in insti ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalrank">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Anush Ranka</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionrank">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onerank">How were you introduced to your sport in insti?</a>
                <br><p id="onerank" class="collapse show" data-parent="#accordionrank" style="font-weight: normal; color: white;" align=justify>I played TT as a hobby so I naturally played in the institute from time to time</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#tworank">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="tworank" class="collapse" data-parent="#accordionrank" style="font-weight: normal; color: white;" align=justify>2nd year Summer camp</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threerank">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threerank" class="collapse" data-parent="#accordionrank" style="font-weight: normal; color: white;" align=justify>Got to play with some very nice players and also met some amazing people. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourrank">Any message to your new team and juniors?</a>
                <br><p id="fourrank" class="collapse" data-parent="#accordionrank" style="font-weight: normal; color: white;" align=justify>Use the amazing facility that the institute provides us to the maximum.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalsach">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Sachit Mehrotra</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionsach">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onesach">How were you introduced to your sport in insti?</a>
                <br><p id="onesach" class="collapse show" data-parent="#accordionsach" style="font-weight: normal; color: white;" align=justify>NSO</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twosach">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twosach" class="collapse" data-parent="#accordionsach" style="font-weight: normal; color: white;" align=justify>Second year GC - Almost beat Mohit (one of the inter IIT players at the time), and the whole hostel was behind cheering for me, the energy was special. I lost the match but it was a great feeling!</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threesach">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threesach" class="collapse" data-parent="#accordionsach" style="font-weight: normal; color: white;" align=justify>I mostly only knew the table tennis team, which always came up with overachievers! Having peers who are always much better than you, be it sports or any other activity, pushes you to levels you couldn't know you could achieve. Having an environment like that was important as well as great fun for me.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#foursach">Any message to your new team and juniors?</a>
                <br><p id="foursach" class="collapse" data-parent="#accordionsach" style="font-weight: normal; color: white;" align=justify>Be competitive and always play to win. Fun comes second</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalloke">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Lokesh Agrawal</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionloke">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneloke">How were you introduced to your sport in insti?</a>
                <br><p id="oneloke" class="collapse show" data-parent="#accordionloke" style="font-weight: normal; color: white;" align=justify>I was introduced to my sport in the sports orientation. I have been playing TT before coming to insti so I was on a lookout for my sport. I was amazed by the facilities that IITB provides. And it was really fun to play in that TT hall. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twoloke">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twoloke" class="collapse" data-parent="#accordionloke" style="font-weight: normal; color: white;" align=justify>There are countless memories I have with the team over years right from the freshie year. But my fondest memory has to be of the Inter IIT. It was an extraordinary experience for me to see the team perform so well and the Men's team winning gold in the end. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeloke">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeloke" class="collapse" data-parent="#accordionloke" style="font-weight: normal; color: white;" align=justify>My journey at IIT Bombay Sports had been awesome. Right from NSO to being a convener and then becoming the TT secretary. I take back a lot from my tenure. It has been an enriching and a great learning experience for me. I felt myself evolving throughout my tenure and it was one of my best experience in my institute life. IIT Bombay sports has taught me a lot of things and given me great friends whom I will miss a lot. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourloke">Any message to your new team and juniors?</a>
                <br><p id="fourloke" class="collapse" data-parent="#accordionloke" style="font-weight: normal; color: white;" align=justify>I feel the junior team has great potential and can take TT team to even greater heights. Just keep working hard and dedicatedly like you always have. All the best! </p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalgupt">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Rishika Gupta</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordiongupt">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onegupt">How were you introduced to your sport in insti?</a>
                <br><p id="onegupt" class="collapse show" data-parent="#accordiongupt" style="font-weight: normal; color: white;" align=justify>Freshmen Orientation</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twogupt">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twogupt" class="collapse" data-parent="#accordiongupt" style="font-weight: normal; color: white;" align=justify>I have had a roller coaster experience throughout my journey here. The grueling camp sessions before Inter IIT and then running for breakfast to reach mess first is unforgettable. All those times, when the entire team encourages and cheers each other during a match irrespective of whether it is Men or Women, celebrating the wins or analyzing the losses together are my fondest memories I have had with the team.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threegupt">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threegupt" class="collapse" data-parent="#accordiongupt" style="font-weight: normal; color: white;" align=justify>Firstly, I am delighted I have had the opportunity to meet some lovely people here, gems that I will cherish for a lifetime. Moreover, I learned many lessons along the way. But the biggest lesson I have learned is that it's only in failure that we learn to win. There will be circumstances when things do not go our way. It is how we react in those situations, which will play an essential role in building our character. Overall, I am taking away a bag of sweet as well as some bitter memories but an even more massive bag of experiences and lessons.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourgupt">Any message to your new team and juniors?</a>
                <br><p id="fourgupt" class="collapse" data-parent="#accordiongupt" style="font-weight: normal; color: white;" align=justify>No matter what happens, IIT Bombay's TT Team will be cherished by the entire sports community at the college for ages. I appreciate the sweat everyone has shed to keep the team together and make it what it is today.  Every player is crucial and has a vital role to play in the team's success. Some play it by winning the matches while some do it by encouraging and inspiring others to do better. I hope we get not only one but two Gold medals every year. Keep hustling like always and continue to make Sen Gupta proud.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div style="background: rgba(0,0,0,0.04);" class="container-fluid" id="volleyball">
    <h1 class="mb-1 text-capitalize" id="aq"><b>volleyball</b></h1>
<hr style="margin-top: 5px; border: 2px solid #FCC72C;">
    <div class="row">
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Padavala.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Padavala.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Padavala Jayanth</h4>
              <p data-toggle="modal" data-target="#aquaticsModalpadavol" class="card-text stretched-link">From just watching the team like an outsider to joining the practices ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Priya.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Priya.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Priya Agarkar</h4>
              <p data-toggle="modal" data-target="#aquaticsModalagar" class="card-text stretched-link">Enjoying each and every emotion faced on the court and working as ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Rakesh.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Rakesh.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Rakesh Dhillon</h4>
              <p data-toggle="modal" data-target="#aquaticsModaldhil" class="card-text stretched-link">From getting to know about the camp trials via an email to showing up ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Rashmi.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Rashmi.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Rashmi Kumari</h4>
              <p data-toggle="modal" data-target="#aquaticsModalkuma" class="card-text stretched-link">I played volley since my bachelor's days. From here I am taking with ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Satish.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Satish.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Satish Dulla</h4>
              <p data-toggle="modal" data-target="#aquaticsModalsati" class="card-text stretched-link">Being my favorite hobby, I took the first chance I got to play. With other ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Sujeet.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Sujeet.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Sujeet Yadav</h4>
              <p data-toggle="modal" data-target="#aquaticsModalsuje" class="card-text stretched-link">The only reason to enter the volleyball court for the very first time ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/profile.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/profile.png" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Naidu</h4>
              <p data-toggle="modal" data-target="#aquaticsModalnaid" class="card-text stretched-link">I was introduced to the sport out of sheer interest, and the number of ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalsati">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Satish Dulla</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionsati">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onesati">How were you introduced to your sport in insti?</a>
                <br><p id="onesati" class="collapse show" data-parent="#accordionsati" style="font-weight: normal; color: white;" align=justify>It is my favorite hobby and had experience in it. So, I approached directly.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twosati">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twosati" class="collapse" data-parent="#accordionsati" style="font-weight: normal; color: white;" align=justify>The train journey from Mumbai to Bhubaneswar via Visakhapatnam. It was unique in many ways. We got to spend a lot of time together during the trip in the form of interaction sessions, chit chats, cards, etc... Since Visakhapatnam is my home town, its a known route for Naidu and me. So, we took it as an opportunity and showed our team what Gultie tastes are. We got almost all the famous foods like Dum Biriyani, Kakinada Kaja, Pootha Rekulu, etc in our areas. Scenic beauty in our way (Chilika Lake, Rivers, etc.) adds much more pleasure to the journey. It's memorable as I got to know more about my teammates in this journey.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threesati">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threesati" class="collapse" data-parent="#accordionsati" style="font-weight: normal; color: white;" align=justify>The sports spirit, love, and passion for sports, is the thing that I want to take back. In a college like IITB, everyone will have their priorities and own stuff to do. But maintaining sports activities along with them is difficult, and I can proudly say that we are good at that maintenance. It is all due to that spirit in us.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#foursati">Any message to your new team and juniors?</a>
                <br><p id="foursati" class="collapse" data-parent="#accordionsati" style="font-weight: normal; color: white;" align=justify>Enjoy the game, and give time to it. It will pay you back whenever times come and make you stand unique.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalagar">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Priya Agarkar</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionagar">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneagar">How were you introduced to your sport in insti?</a>
                <br><p id="oneagar" class="collapse show" data-parent="#accordionagar" style="font-weight: normal; color: white;" align=justify>I used a play from school days and also knew about the IIT Bombay volleyball team. Then one day, I came to indoor court, I saw people playing and met the coach, and this is how it has started in the insti.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twoagar">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twoagar" class="collapse" data-parent="#accordionagar" style="font-weight: normal; color: white;" align=justify>Days of training before inter IIT and days of inter IIT were my best days spent with the team</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeagar">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeagar" class="collapse" data-parent="#accordionagar" style="font-weight: normal; color: white;" align=justify>I have spent very few days with my team and on the court, but still, I have learned to bond with people and work as a team. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fouragar">Any message to your new team and juniors?</a>
                <br><p id="fouragar" class="collapse" data-parent="#accordionagar" style="font-weight: normal; color: white;" align=justify>Live and enjoy each and every emotion that you face when you are on the court ❤️</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalkuma">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Rashmi Kumari</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionkuma">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onekuma">How were you introduced to your sport in insti?</a>
                <br><p id="onekuma" class="collapse show" data-parent="#accordionkuma" style="font-weight: normal; color: white;" align=justify>I have played volleyball since my bachelor's days, so I just turned up on the court one evening in my first semester.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twokuma">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twokuma" class="collapse" data-parent="#accordionkuma" style="font-weight: normal; color: white;" align=justify>On the court, when all of us are trying so hard to make our win happen and the lazy moments off-court, early morning sessions where we're all half asleep, post-practice dinner in night canteens and bets on our practice matches. I have a lot of memories because of volleyball and a family of sorts too.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threekuma">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threekuma" class="collapse" data-parent="#accordionkuma" style="font-weight: normal; color: white;" align=justify>Bucket loads of memories, some very amazing people, and more reasons to love volleyball.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourkuma">Any message to your new team and juniors?</a>
                <br><p id="fourkuma" class="collapse" data-parent="#accordionkuma" style="font-weight: normal; color: white;" align=justify>Practice hard and win. Have fun as well; this is going to be one of the best parts of your college life.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalsuje">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Sujeet Yadav</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionsuje">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onesuje">How were you introduced to your sport in insti?</a>
                <br><p id="onesuje" class="collapse show" data-parent="#accordionsuje" style="font-weight: normal; color: white;" align=justify>I had already decided that I'll be playing some sport at the institute. So on the first day itself, I went out to see the playgrounds. After 2-3 days, I started going to the volleyball court regularly as we can go there barefoot while in the badminton court, one could not go without shoes, and open ground was affected by rain.  I used to sit there in the corner and watch. At that time, InterIIT practice had not started.  One day, I guess in the second week, Manoj came to play who was in the interiit team. They asked me, and I happily nodded for yes, and we started the match. It was my first time where I was witnessing a volleyball match where proper pass, set, and the spike was there. It just hit me, and I started coming daily, but for a week, I could not play. Then the Inter IIT team started the practice, and I started watching them from the corner of the court entrance.
                  One day  I decided that I’ll ask sir and I went to court and sat at the corner. Then suddenly I went to coach sir and said “Mujhe bhi seekhna hai but muze kuch nahi aata”. He asked, “Pehle khela hai”? I replied, “Nahi.” Then looking at me (a decently tall and with decent build boy), he said, “Roj aana padega.” I replied, “theek hai (and thinking in my mind - even if you won’t ask I’ll come).” So I started practicing with the Inter IIT team from this day.  Later sir, also put me in NSO volleyball.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twosuje">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twosuje" class="collapse" data-parent="#accordionsuje" style="font-weight: normal; color: white;" align=justify>All those 7-8 days of four InterIITs is always close to my heart. It always felt like we were going to some professional tournament with similar spirit. Going with a team, supporting our IIT, practices, matches and those feelings of fire within to defeat the other teams. And then after matches talking with friends in other teams. All these memories are cherishable.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threesuje">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threesuje" class="collapse" data-parent="#accordionsuje" style="font-weight: normal; color: white;" align=justify>A lot of memories as a fresher to volleyball, then being part of the team to leading the team. Of course not all the memories are pleasant but surely all are cherishable. All the way from losing matches to winning or from  being a learner to a teacher. The difficulty we face in dealing with new players , convincing them , motivating them all these memories are just great in it.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#foursuje">Any message to your new team and juniors?</a>
                <br><p id="foursuje" class="collapse" data-parent="#accordionsuje" style="font-weight: normal; color: white;" align=justify>The first things i will say, Love the game and Love your teammates. Being a part of the team is a great feeling. Be honest to your game and your teammates. Enjoy the time you spent on the court and learn something for you and for your team. Work hard for those happy moments you want to live either in  InterIIT or any outside tournament. Don't be afraid of a good team rather make them enjoy the challenge while playing with you. Learn the spirit of the game and cherish it.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModaldhil">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Rakesh Dhillon</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordiondhil">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onedhil">How were you introduced to your sport in insti?</a>
                <br><p id="onedhil" class="collapse show" data-parent="#accordiondhil" style="font-weight: normal; color: white;" align=justify>I received a mail on 27th August 2018, which stated "Volleyball Pre-Camp Trials" so, I went for the trials and became a part of the team. This is how I was introduced to volleyball in the Institute. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twodhil">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twodhil" class="collapse" data-parent="#accordiondhil" style="font-weight: normal; color: white;" align=justify>During 53rd inter IIT before every match, our team had a fixed routine. All of us team members used to gather around the hostel first, and then after that, we used to play songs (fixed songs) on the speakers and go towards the ground for the match. During this time, we used to joke with each other, and after reaching on the court, we turned off the songs, and we used to focus on warm-up and match with complete seriousness. This is my fondest memory with my team and sport over these years. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threedhil">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threedhil" class="collapse" data-parent="#accordiondhil" style="font-weight: normal; color: white;" align=justify>Lots of friends, discipline, punctuality, teamwork, confidence are the few things. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourdhil">Any message to your new team and juniors?</a>
                <br><p id="fourdhil" class="collapse" data-parent="#accordiondhil" style="font-weight: normal; color: white;" align=justify>All the Best to my new team and for juniors - Even in practice try to play at the same position which you are going to play in match, focus on basics and try to do practice daily. </p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalpadavol">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Padavala Jayanth</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionpadavol">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onepadavol">How were you introduced to your sport in insti?</a>
                <br><p id="onepadavol" class="collapse show" data-parent="#accordionpadavol" style="font-weight: normal; color: white;" align=justify>I used to come to court every day and play outside and just sit there and watch Inter IIT practice, and I was so motivated to play then one day one of my seniors Sohan bhai came to me and said " kitne din bahar baitega khelna nhi h kya, aajao roj sharp 7 baje." That's how it all started.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twopadavol">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twopadavol" class="collapse" data-parent="#accordionpadavol" style="font-weight: normal; color: white;" align=justify>For any player being part of the inter IIT team for the first time always gives you immense joy, When they announce your name at the end of winter camp, After being part of the team, I experienced every emotion with them maybe this journey will be my fondest memory and of course the nights in H3 (iykyk).</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threepadavol">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threepadavol" class="collapse" data-parent="#accordionpadavol" style="font-weight: normal; color: white;" align=justify>Though it's after watching an anime (the team with strong six is the strongest), we should trust our teammates at the end of the day it is not I who wins the game it is we, and what's the point of playing a game if you don't trust someone to watch your back and you to watch someone's back.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourpadavol">Any message to your new team and juniors?</a>
                <br><p id="fourpadavol" class="collapse" data-parent="#accordionpadavol" style="font-weight: normal; color: white;" align=justify>Every year when seniors who teach us will graduate. Just believe that in all the hard work you did will going to be memorable and always play or practice something which team requires (team comes first).
                  Always evolve your game otherwise someone will take your position :-))</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalnaid">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Naidu</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionnaid">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onenaid">How were you introduced to your sport in insti?</a>
                <br><p id="onenaid" class="collapse show" data-parent="#accordionnaid" style="font-weight: normal; color: white;" align=justify>Actually, I was interested. Team Players allowed me to practice. Sohan encouraged me to volleyball in insti. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twonaid">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twonaid" class="collapse" data-parent="#accordionnaid" style="font-weight: normal; color: white;" align=justify>Inter IIT 2019</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threenaid">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threenaid" class="collapse" data-parent="#accordionnaid" style="font-weight: normal; color: white;" align=justify>Discipline</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fournaid">Any message to your new team and juniors?</a>
                <br><p id="fournaid" class="collapse" data-parent="#accordionnaid" style="font-weight: normal; color: white;" align=justify>Give your best </p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div style="background: rgba(0,0,0,0.04);" class="container-fluid" id="weightlifting">
    <h1 class="mb-1 text-capitalize" id="aq"><b>weightlifting</b></h1>
<hr style="margin-top: 5px; border: 2px solid #FCC72C;">
    <div class="row">
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Kaushik.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Kaushik.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Kaushik Konwar</h4>
              <p data-toggle="modal" data-target="#aquaticsModalkaus" class="card-text stretched-link">Every memory is fondest when you are with your family. It is ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Ajay.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Ajay.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Ajay Dangi</h4>
              <p data-toggle="modal" data-target="#aquaticsModalajay" class="card-text stretched-link">A senior introduced me to weightlifting at insti. I till date recall ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img class="card-img-top" src="images/farewell2020/Ravi.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <div class="proimage">
              <img src="images/farewell2020/Ravi.jpg" alt="Card image" style="width:100%">
            </div>
            <div class="text">
              <h4 class="card-title">Ravi Goyal</h4>
              <p data-toggle="modal" data-target="#aquaticsModalravi" class="card-text stretched-link">My classmates had introduced me to weightlifting ...<a style="color: blue;">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalkaus">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Kaushik Konwar</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionkaus">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#onekaus">How were you introduced to your sport in insti?</a>
                <br><p id="onekaus" class="collapse show" data-parent="#accordionkaus" style="font-weight: normal; color: white;" align=justify>It's very difficult to stay away from your passion.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twokaus">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twokaus" class="collapse" data-parent="#accordionkaus" style="font-weight: normal; color: white;" align=justify>Every memory is fondest when you are with your family. </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threekaus">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threekaus" class="collapse" data-parent="#accordionkaus" style="font-weight: normal; color: white;" align=justify>Family, love and a hell lot of beautiful memories.</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourkaus">Any message to your new team and juniors?</a>
                <br><p id="fourkaus" class="collapse" data-parent="#accordionkaus" style="font-weight: normal; color: white;" align=justify>Pull the bar like you are ripping the head of a goddamn lion.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalajay">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Ajay Dangi</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionajay">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneajay">How were you introduced to your sport in insti?</a>
                <br><p id="oneajay" class="collapse show" data-parent="#accordionajay" style="font-weight: normal; color: white;" align=justify>By a senior</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#twoajay">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="twoajay" class="collapse" data-parent="#accordionajay" style="font-weight: normal; color: white;" align=justify>Holi celebrations</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeajay">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeajay" class="collapse" data-parent="#accordionajay" style="font-weight: normal; color: white;" align=justify>Consistency is the key</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourajay">Any message to your new team and juniors?</a>
                <br><p id="fourajay" class="collapse" data-parent="#accordionajay" style="font-weight: normal; color: white;" align=justify>Be consistent and lift to enjoy.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="modal fade" id="aquaticsModalravi">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title">Ravi Goyal</h1>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>

          <div class="modal-body">
            <div class="container">
              <div class="main_content" id="accordionravi">
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#oneravi">How were you introduced to your sport in insti?</a>
                <br><p id="oneravi" class="collapse show" data-parent="#accordionravi" style="font-weight: normal; color: white;" align=justify>Classmates introduced me to weight lifting</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#tworavi">What is your fondest memory with your team and sport over these years?</a>
                <br><p id="tworavi" class="collapse" data-parent="#accordionravi" style="font-weight: normal; color: white;" align=justify>110 jerk of Mangi Lal Godara</p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#threeravi">What do you take back from your journey here with sports at IIT Bombay? </a>
                <br><p id="threeravi" class="collapse" data-parent="#accordionravi" style="font-weight: normal; color: white;" align=justify>Dedication towards the work(lift) </p>
                <br>
                <a style="cursor: pointer; color: #FCC72C;" data-toggle="collapse" href="#fourravi">Any message to your new team and juniors?</a>
                <br><p id="fourravi" class="collapse" data-parent="#accordionravi" style="font-weight: normal; color: white;" align=justify>Keep working hard and be punctual. Learn from your mistakes and get them corrected them with help of coach sir and teammates.</p>
                <br>
            </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  
</body>

</html>