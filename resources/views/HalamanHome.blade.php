<!DOCTYPE html>
<html lang="en">
<head>
  <title>Halaman Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="https://cdn2.tstatic.net/jateng/foto/bank/images/extraordinary-you.jpg" style="width:100%" alt="Image">
        <div class="carousel-caption">
          <h3>Extraordinary You</h3>
          <p>Extraordinary You mengisahkan seorang gadis SMA berusia 17 tahun bernama Eun Dan Oh (Kim Hye Yoon) yang berasal dari keluarga kaya. 
          Meskipun kaya tapi ia menderita penyakit jantung yang akan membuatnya tidak akan hidup melewati masa remajanya.</p>
        </div>      
      </div>

      <div class="item">
        <img src="https://cdn02.indozone.id/re/content/2019/09/07/jzsb99/t_5d732f17281b7.jpg?w=700&q=85" style="width:100%" alt="Image">
        <div class="carousel-caption">
          <h3>Vagabond</h3>
          <p>Vagabond bercerita tentang Cha Dal-Gun (Lee Seung-Gi), seorang stuntman yang memiliki kepercayaan diri yang tinggi dan tidak tahu malu.
          Dibalik itu semua, ia adalah seorang yang memiliki berbagai macam sabuk hitam dari segala jenis bela diri.</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>What We Do</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="http://asianwiki.com/images/2/28/SKY_Castle-GP.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Drama Recommended</p>
    </div>
    <div class="col-sm-4"> 
      <img src="http://www.globaltimes.cn/Portals/0/attachment/2019/2019-08-14/90885886-862e-4aed-b433-3404a02459ae.jpeg" class="img-responsive" style="width:100%" alt="Image">
      <p>Film Terlaris</p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Search</p>
      </div>
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>Selamat Menonton</p>
</footer>

</body>
</html>
