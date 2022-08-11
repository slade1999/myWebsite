<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>

<style>
#foot1 {
   position:absolute;
   bottom:0;
   width:100%;
   height:40px;
   font-size: 14px;
}
#foot2 {
    background:#6cf;
    font-size: 12px;
}
#divBtn{ /*style the div like a button*/
    color: #0073e6; 
    cursor: pointer; 
    padding: 15px; 
    border-radius: 10px; 
    font-size: 18px;
}

#divBtn:hover {
  color: #555; /* Add a dark-grey background on hover */
}
   
</style>
<script>
function toTop() { //takes it back to the top of the page
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>
<div class="text-center" id="foot1">
    <div onClick="toTop()" id="divBtn">To top of page</div>
    <div class="text-center" id="foot2">
        <a href = "mailto: sladerknepp@gmail.com">Email: sladerknepp@gmail.com</a><br>
        <a href="tel:8142909713">Phone: (814)290-9713</a>
    </div>
</div>


