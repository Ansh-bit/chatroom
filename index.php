<!DOCTYPE html>
<!--ansh-->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="crime,investigation,prediction">
  <meta name="robots" content="INDEX,FOLLOW">
  <title>Website</title>
  <!-- css link -->
  <link rel="stylesheet" href="wb.css">
  <!-- java script link -->
  <script src="wb.js"></script>
  <!-- <script src="practice.js"></script> -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@500&display=swap" rel="stylesheet">
</head>

<body>
<section class="bg">
  <header class="header">
    
    <div class="left">
    <a href="http://youtube.com">
      <img src="logo.png" alt="Error">
    </a>
      <div class="ansh">
        Ansh
      </div>
    </div>

    </div>
    <div class="right">
      <button class="btn">
        Search
      </button>
      <button class="btn">
        Call Us
      </button>
    </div>

    <div class="ced">
      <img src="title2.PNG" alt="Error" class="image">
    </div>

  </header>

  <div class="center">
    <ul class="navbar">
      <li class="har"><a class="boysImage" href='#'>Harish</a></li>
      <li class="ashish"><a class="boysImage" href='#'>Ashish</a></li>
      <li class="kamat"><a class="boysImage" href='#'>Abhishek</a></li>
      <li class="shivang"> <a class="boysImage" href='#'>Shivang</a></li>
      <li class="ansh"> <a class="boysImage" href='#'>Ansh</a></li>
    </ul>

  </div>

  <!-- Slideshow container -->
  <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <!-- <div class="mySlides fade">
      <div class="numbertext">1 / 4</div>
      <img src="group1.2.png" class="group" style="width:100%">
      <div class="text">Group</div>
    </div> -->

    <div class="mySlides fade">
      <div class="numbertext">2 / 4</div>
      <img src="group2.2.png" class="group" style="width:100%">
      <div class="text">fun</div>
    </div>

    <!-- <div class="mySlides fade">
      <div class="numbertext">3 / 4</div>
      <img src="group3.1.png" class="group" style="width:100%">
      <div class="text">Pool</div>
    </div> -->
    <div class="mySlides fade">
      <div class="numbertext">4 / 4</div>
      <img src="group4.1.png" class="group" style="width:100%">
      <div class="text">Dinner</div>
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>

  <!-- The dots/circles -->
  <div style="text-align:center">
    <!-- <span class="dot" onclick="currentSlide(1)"></span> -->
    <span class="dot" onclick="currentSlide(2)"></span>
    <!-- <span class="dot" onclick="currentSlide(3)"></span> -->
    <span class="dot" onclick="currentSlide(4)"></span>
  </div>


  <!-- <p id="para" onclick="timer()">ansh</p>
  <p>Button Clicked <span id="display">0</span> Times
  </p> -->
</section>
<section id=chatsection>
 
  <div class="chatdiv">
    
    <h1>Chatroom</h1>


   <form action="create.php" method="post">
    <input type="text" name="room"placeholder="Enter your Chat room name">
    <button id="createbtn" href="#" >Create ChatRoom</button>
    <h3>let's go and chat with us</h3> 
  </form>
    

    <div id="chatright">
      Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    </div>
  
  </div>
</section>


</body>

</html>