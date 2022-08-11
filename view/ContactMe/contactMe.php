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
</style>

<div class="row" id="row1">
    <div class="col-md-6" id="column1">
        <div class="form-group">
            <h5 style="margin-top: 15%;">Lets Talk!</h5><br>
            <a>Use this form to send me an email. You can also check out my social pages.</a>
                
        </div>
    </div>
    <div class="col-md-6 text-center">
        <div class="form-group">
            <div class="row" style="margin-top: 5%;"> <!-- create row's for email form -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="required" for="fName" class="required">First Name:</label>
                        <input v-model="firstName" type="text" class="form-control" id="fName" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="required" for="lName" class="required">Last Name:</label>
                        <input v-model="lastName" type="text" class="form-control" id="lName" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="required" for="email" class="required">Email:</label>
                        <input v-model="email" type="text" class="form-control" id="email" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="required" for="message" class="required">Your message:</label>
                        <textarea rows="6" v-model="message" type="text" class="form-control" id="message" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <button>Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br><br>


