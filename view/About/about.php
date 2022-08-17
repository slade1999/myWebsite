<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>

<style>
    p
    {
        font-family: Andale Mono, monospace;
        font-size: 20px;
        color: #004080;
    }
    span
    {
        font-family: Andale Mono, monospace;
        font-size: 20px;
        color: #f2f2f2;
        
    }
    #blueBox
    {
        margin-top: 2%;
        background: #e6f3ff;
    }
    #expandableText
    {
        font-family: Andale Mono, monospace;
        font-size: 20px;
        color: #004080;
    }
    #jobBox
    {
        margin-top: 2%;
        background: #4da6ff;
        max-width: 1000px;
    }

    #jobHead
    {
        font-family: Andale Mono, monospace;
        font-size: 25px;
        color: #f2f2f2;
        margin-bottom: 4%;
    }
    img
    {
        border-radius: 50%;
        width: 200px;
        margin-top: 4%;
    }
    .col-md-4
    {
        text-align: center;
    }
</style>
<!-- create container with collapsible option -->
<div class="container text-center">
    <div id="aboutApp" class="container-fluid text-center">
            <h5 class="text-center">About Me</h5>
            <!-- my bio -->
            <div class="text-center" id="expandableText">I graduated from Clarion University of Pennsylvania in may 2022 (It is now called 
                                    'Pennsylvania Western University Clarion' due to a merging of colleges). Working 40 hours a week while
                                    taking 15 credits worth of courses each semester was tough, but it made me in to the workaholic I am today.
                                    <div class="panel-group"> <!--collapsible panel -->
                                        <div class="panel panel-default" id="accordion1">
                                            <h4 class="panel-title">
                                            <a 
                                                data-toggle="collapse" 
                                                data-parent="#accordion1" 
                                                href="#collapse1" 
                                                class="fa fa-caret-down inactive-link"
                                                onclick="changeIcon(this)"
                                                > Expand Bio
                                            </a>
                                            </h4>
                                            <div id="collapse1" class="panel-collapse collapse in show">
                                                Now that I am graduated, I have more time to pursue
                                                my personal hobbies, such as making this website! I really enjoy programming, and web development is 
                                                what I have become the most comfortable with. I also like to build personal computers, the more powerful
                                                it is, the more exciting it gets! Playing video games and hanging out with friends is what I like to do
                                                when I am not working on something. As a friend and colleague, I most enjoy making people happy and laugh.
                                            </div>
                                        </div>
                                    </div>
            </div>
    </div>
</div> <!-- end of first block and collapsible panel -->
<div class="container" id="blueBox">
    <h5 class="text-center">Work Experience</h5>
    <p class="text-center">Being a professional employee for 7 years, I have worked in several industries, and
        while not directly related to programming or web development, each experience has shaped me in
        to the dedicated hard worker and problem solver that I am today.</p>
</div>

<!-- container for jobs and job descriptions -->
<div class="container" id="jobBox">
    <div class ="row">
        <div class="col-md-12 text-center">
            <div class="form-group">
                <!-- Text fields for buried individuals names. -->
                <img id="myImg" src="../Assets/me.jpg" alt="slade"/>   
            </div>
        </div>
    </div>
            <div id="jobHead" class="text-center">Professional History</div>
    <div class ="row">
        <div class="col-md-4">
            <div class="form-group">
                <!-- Text fields for buried individuals names. -->
                <span style="font-weight: bold;">Swing Manager</span><br>
                <span>McDonald's</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <span>August 2019 - Present</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <span>In this position I gained valuable leadership skills. It helped me become good at taking on large responsibilities,
                        such as leading a team through stressful situations while staying calm and collected. </span>
            </div>
        </div>
    </div><br>
    <div class ="row">
        <div class="col-md-4">
            <div class="form-group">
                <!-- Text fields for buried individuals names. -->
                <span style="font-weight: bold;">PAT Freight Handler</span><br>
                <span>Walmart D.C.</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <span>September 2017 - May 2018</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <span>Working in a warehouse, I was expected to be scanning and carrying light to heavy boxes, 12 hours a day.
                        Overtime, I had pushed my physical and mental limits to new boundaries. I'm the type of person who always remains
                        calm and motivated, this job is a part of the reason why.</span>
            </div>
        </div>
    </div><br>
        <div class ="row">
            <div class="col-md-4">
                <div class="form-group">
                    <!-- Text fields for buried individuals names. -->
                    <span style="font-weight: bold;">Overnight Stocker</span><br>
                    <span>Walmart</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <span>April 2021 - August 2021</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <span>At this job I was tasked with stocking the shelves of a Walmart Super Center. In this position I gained experience
                            with having a quota. I learned how to manage my time effectively to meet the high requirements for each day, while also
                            providing great customer service.</span>
                </div>
            </div>
        </div><br>
</div><br><br>

<script>
    <!-- script for changing arrow icon indicating collapsible panel -->
    function changeIcon(x){
        if(x.classList.contains("fa-caret-down")){
            x.classList.add("fa-caret-right");
            x.classList.remove("fa-caret-down");
        }
        else if(x.classList.contains("fa-caret-right")){
            x.classList.add("fa-caret-down");
            x.classList.remove("fa-caret-right");
        }
    }
    <!-- blank Vue script. Unused in current state -->
    new Vue({
        el: "#aboutApp",
        data: {
        },
        methods: {
        }
    });

</script>

