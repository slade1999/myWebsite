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
        margin-left: 15%;
        margin-right: 15%;
        margin-top: 2%;
        background: #4d94ff;
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
                                                is, the more exciting it gets! Playing video games and hanging out with friends is what I like to do
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
        <div class="col-md-4">
            <div class="form-group">
                <!-- Text fields for buried individuals names. -->
                <p class="required" for="fName" class="required">First Name:</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <p for="middleName">Middle Name:</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <p class="required" for="lName" class="required">Last Name:</p>
            </div>
        </div>
    </div>
    <div class ="row">
        <div class="col-md-4">
            <div class="form-group">
                <!-- Text fields for buried individuals names. -->
                <p class="required" for="fName" class="required">First Name:</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <p for="middleName">Middle Name:</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <p class="required" for="lName" class="required">Last Name:</p>
            </div>
        </div>
    </div>
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

