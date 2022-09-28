<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>

<div class ="row" id="mColor">
        <div class="text-center">
            <!-- introduction -->
            <h5>My Projects</h5>
            <p>Here you can check out previous projects that I have worked on. Click on each project for more
               information. You can also take a look at the code for each one over on my GitHub account.</p>
        </div>
</div>
<!-- container containing projects. Each function opens a different form. -->
<div class="container text-center">
    <div class ="row">
        <div id="col01" class="col-md-6">
            <div class="form-group">
                <input type="image" onclick="openTennis()" id="myImg" src="../Assets/tennis1.jpg" alt="Epic Tennis"/>
            </div>
        </div>
        <div id="col02" class="col-md-6">
            <div class="form-group">
                <input type="image" id="myImg" onclick="openKuc()" src="../Assets/kuc.jpg" alt="KUC"/>
            </div>
        </div>
    </div>
    <div class ="row">
        <div id="col01" class="col-md-6">
            <div class="form-group">
                <input type="image" id="myImg" onclick="openMonster()" src="../Assets/pokemon1.jpg" alt="meme battle"/>
            </div>
        </div>
        <div id="col02" class="col-md-6">
            <div class="form-group">
                <input type="image" id="myImg" onclick="openMisc()" src="../Assets/assembly.jpg" alt="assembly"/>
            </div>
        </div>
    </div>
</div>
<!-- forms for each project popup -->
<div class="form-popup text-center" id="openForm">
    <form action="/action_page.php" class="form-container">
        <h5 id="pHeader">Epic Tennis</h5>        
            <div class="form-group">
                <!-- slide show for project images -->
                <div class="carousel-container">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="img d-block w-100" id="myImg1" src="../assets/tennis1.jpg" alt="tennis1">
                        </div>
                        <div class="carousel-item">
                          <img class="img d-block w-100" id="myImg2" src="../assets/tennis2.jpg" alt="tennis2">
                        </div>
                        <div class="carousel-item">
                          <img class="img d-block w-100" id="myImg3" src="../assets/tennis3.jpg" alt="tennis3">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div id="smallText">This game was created using Java. The goal of the game is to score points against your opponent
                                        by hitting the ball in to the wall behind them. The player, the opponent, the ball, and the net
                                        are all different objects within different classes. When the ball object touches the player or the
                                        opponent, it will move towards the opposite direction, with a random chance to go left at the same time,
                                        or go right at the same time. Each level of the game has slightly increased stats for the opponent object 
                                        to increase difficulty.</div>
            </div>
    </form>
</div><br><br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    //replace images and text depending on project selection
    function openTennis() {
      document.getElementById("openForm").style.display = "block";
      $("#myImg1").attr("src","../assets/tennis1.jpg");
      $("#myImg2").attr("src","../assets/tennis2.jpg");
      $("#myImg3").attr("src","../assets/tennis3.jpg"); 
      $("#pHeader").text("Epic Tennis"); 
      $("#smallText").html("This game was created using Java. The goal of the game is to score points against your opponent by hitting the ball in to the wall behind them. The player, the opponent, the ball, and the net are all different objects within different classes. When the ball object touches the player or the opponent, it will move towards the opposite direction, with a random chance to go left at the same time, or go right at the same time. Each level of the game has slightly increased stats for the opponent object to increase difficulty.");
      document.body.scrollTop = 5000; // For Safari
      document.documentElement.scrollTop = 5000; // For Chrome, Firefox, IE and Opera
    }
    
    function openKuc() {
      document.getElementById("openForm").style.display = "block";
      $("#myImg1").attr("src","../assets/kuc.jpg");
      $("#myImg2").attr("src","../assets/kuc2.jpg");
      $("#myImg3").attr("src","../assets/kuc3.jpg"); 
      $("#pHeader").text("Knox Union Cemetery Website");
      $("#smallText").html("While working in an agile environment, me and 3 other classmates were able to create a great website for our client. In this website, the user is able to locate any specific individuals grave, on a map that is at the Knox Union Cemetery. I worked very hard along side my team members to bring this website to life, and it came out really well. You can check out the repository for it here, as it is not connected to my current GitHub account. https://github.com/kareemfelfel/KUCRebuild. Here is the link to the website. https://vcisprod.clarion.edu/~s_kaahmed/KUCRebuild/controller/controller.php?action=directToHomePage");
      document.body.scrollTop = 5000; // For Safari
      document.documentElement.scrollTop = 5000; // For Chrome, Firefox, IE and Opera
    }
    
    function openMonster() {
      document.getElementById("openForm").style.display = "block";
      $("#myImg1").attr("src","../assets/pokemon1.jpg");
      $("#myImg2").attr("src","../assets/pokemon2.jpg");
      $("#myImg3").attr("src","../assets/pokemon3.jpg");
      $("#pHeader").text("Monster Battle");
      $("#smallText").html("This is another Java project. The goal of this game is to simulate a pokemon battle. The pokemon are objects of the same class, but they have different stats. The player can choose 2 pokemon, and 2 items to bring in to battle. The battle is turn-based and ends when both of the players, or the opponents pokemon are defeated.");
      document.body.scrollTop = 5000; // For Safari
      document.documentElement.scrollTop = 5000; // For Chrome, Firefox, IE and Opera
    }
    
    function openMisc() {
      document.getElementById("openForm").style.display = "block";
      $("#myImg1").attr("src","../assets/assembly.jpg");
      $("#myImg2").attr("src","../assets/csharp2.jpg");
      $("#myImg3").attr("src","../assets/python1.jpg"); 
      $("#pHeader").text("Other Programs");
      $("#smallText").html("I have been programming in many different languages, here are a few projects I have made using ones that I have not shown. I found assembly coding to be pretty interesting, which is displayed in the first image here. It creates a maze that the user can navigate through with the arrow keys. The second project displayed was made using C#, and the third project displayed was made using python.");
      document.body.scrollTop = 5000; // For Safari
      document.documentElement.scrollTop = 5000; // For Chrome, Firefox, IE and Opera
    }
</script>

<style>
    #col01
    {
        margin-top: 1.25%;
    }
    #col02
    {
        margin-top: 1.25%;
    }
    p
    {
        font-family: Andale Mono, monospace;
        font-size: 30px;
        color: #004080;
    }
    #mColor
    {
        background: #e6f3ff;
        margin-left: 15%;
        margin-right: 15%;
        margin-top: 5%;
    }
    #smallText
    {
        font-family: Andale Mono, monospace;
        font-size: 20px;
        color: #004080;
    }
    .container
    {

        margin-top: 5%;
    }
    #myImg
    {
        max-width: 400px;
        max-height: 400px;
        border-style: solid;
        border-color: #004080;
        border-width: 2px;
        border-radius: 10px;
    }
    /* The popup form - hidden by default */
    .form-popup {
        display: none;
        border: 3px solid #f1f1f1;
        z-index: 9;
        background: #e6f3ff; 
        transition: 2s ease;
        margin-left: 15%;
        margin-right: 15%;

    }
    .carousel-container{
        margin: auto;
        width: 90%;
        height: 60%;
        border-radius: 10px;
    }
    .img{
        width: 90%;
        height: 60%;
        border-radius: 10px;
    }
    .carousel-control-next, .carousel-control-prev {
        background-color: #ccefff !important;
    }
    
    
</style>


