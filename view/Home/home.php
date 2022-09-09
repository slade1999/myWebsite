<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>

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
    .row
    {
        background: #e6f3ff;
        margin-left: 15%;
        margin-right: 15%;
        margin-top: 5%;
    }
    
</style>
<!-- split divs in to columns -->
<div class ="row">
    <div id="col01" class="col-md-6">
        <div class="form-group">
            <!-- introduction -->
            <h5>Slade</h5>
            <p>An aspiring recent college graduate with a track record for being a dedicated hard worker, while also having a passion
                for web development and programming.</p>
            <a href="controller.php?action=directToAboutPage" class="btn btn-info">About Me</a>
        </div>
    </div>
    <div id="col02" class="col-md-6">
        <div class="form-group">
            <img id="myImg" src="../Assets/me.jpg" alt="slade"/>
        </div>
    </div>
</div> <!-- end of first block -->
<div class ="row">
    <div id="col01" class="col-md-6">
        <div class="form-group">
            <img id="myImg" src="../Assets/me.jpg" alt="slade"/>
        </div>
    </div>
    <div id="col02" class="col-md-6">
        <div class="form-group">
            <h5>Projects</h5>
            <p>I've worked on several big projects and many small projects. You can check out the programs I've created, including this website,
                and how they were made here.</p>
            <a href="controller.php?action=directToProjectsPage" class="btn btn-info">Projects</a>
        </div>
    </div>
</div> 
<div id="bottomC" class ="row">
    <div id="col01" class="col-md-6">
        <div class="form-group">
            <h5>Get in Touch</h5>
            <p>If you want to contact me, you can send me an email through the form here, or give me a text or call at my phone number. I look forward
                to speaking with you.</p>
            <a href="controller.php?action=directToContactMePage" class="btn btn-info">Contact Me</a>
        </div>
    </div>
    <div id="col02" class="col-md-6">
        <div class="form-group">
            <img id="myImg" src="../Assets/me.jpg" alt="slade"/>
        </div>
    </div>
</div><br><br>