
<div id="title">Slade Knepp</div>
<nav class="navbar navbar-expand-lg navbar-toggleable-md navbar-light">
        <!link webpages by going through controller>
        <div class="navbar-nav mx-auto">
            <a class="nav-item nav-link <?php if(isset($homeActive) && $homeActive){echo 'active';} ?>" href="controller.php?action=directToHomePage">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link <?php if(isset($aboutActive) && $aboutActive){echo 'active';} ?>" href="controller.php?action=directToAboutPage">About</a>
            <a class="nav-item nav-link <?php if(isset($contactMeActive) && $contactMeActive){echo 'active';} ?>" href="controller.php?action=directToContactMePage">Contact Me</a>
            <a class="nav-item nav-link <?php if(isset($projectsActive) && $projectsActive){echo 'active';} ?>" href="controller.php?action=directToProjectsPage">Projects</a>
        </div>
</nav>

<style>
    #title 
    {
        font-family: Andale Mono, monospace;
        text-align: center;
        padding: 20px;
        color: #004080;
        font-size: 35px;
        font-weight: bold;
        border-bottom: 1px solid #004080;
        margin-left: 25%;
        margin-right: 25%;
    }
</style>

