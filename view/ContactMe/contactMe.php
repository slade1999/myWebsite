<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>
<style>
    #row1
    {
        border: ridge;
        border-width: 1px;
        border-color: #004080;
        min-height: 500px;
        margin-top: 5%;
        margin-left: 10%;
        margin-right: 10%;
        margin-bottom: 4.75%;
    }
    #column1
    {
        background: #e6f3ff;
    }
    img{
        margin-right: 20px;
    }
</style>

<div class="row" id="row1">
    <div class="col-md-6" id="column1">
        <div class="form-group">
            <h5 style="margin-top: 15%;">Lets Talk!</h5><br>
            <!-- Link icons to respective websites. -->
            <a>Use this form to send me an email. You can also check out my social pages.</a><br><br>
            <a href = "https://www.linkedin.com/in/slade-knepp-9a198b184/" target="_blank"><img src="../Assets/LinkedIn.png" alt="linkedIn" width="50px" /></a>
            <a href = "https://github.com/slade1999" target="_blank"><img src="../Assets/github.png" alt="gitHub" width="50px"/></a>
            <a href = "https://www.facebook.com/SladeKnepp7/" target="_blank"><img src="../Assets/facebook.png" alt="facebook" width="50px"/></a>
                
        </div>
    </div>
    <div id="contactApp" class="col-md-6 text-center">
            <div class="form-group">
                <div class="row" style="margin-top: 5%;"> <!-- create row's for email form -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="required">Full Name:</label>
                            <input id="name" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Email:</label>
                            <input id="email" type="email" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Your message:</label>
                            <textarea rows="6" id="message" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form id="contact-form" class="form-group"> <!--needs id for function to work-->
                            <input type="submit" value="Send" class="btn btn-info">
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>
<br><br>

<script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
</script>
<script type="text/javascript">
   (function(){
      emailjs.init("FzxC55aUcYMpFabSY");
   })();
</script>
<script>
    window.onload = function() {
        //when button is pressed
        document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault();
            //get each user input
             let name = document.getElementById("name").value;
             let email = document.getElementById("email").value;
             let message = document.getElementById("message").value;
            var templateParams = { //variable holds all inputted data
                from_name: name,
                reply_to: email,
                message: message
            };
            //set requirements for form
            if (name === "" || email === "" || message === "")
            {
                alert("Please fill out all fields!");
            }
            else
            {
                emailjs.send('service_nr16mdp', 'template_sjv9jpw', templateParams)//send parameters to emailjs
                    .then(function(response) {
                       console.log('SUCCESS!', response.status, response.text);
                       alert("Message sent successfully!");
                       //clear input fields
                       document.getElementById("name").value = "";
                       document.getElementById("email").value = "";
                       document.getElementById("message").value = "";
                    }, function(error) {
                       console.log('FAILED...', error);
                       alert("Message was not sent!");
                    });
            }
        });
    };
</script>


