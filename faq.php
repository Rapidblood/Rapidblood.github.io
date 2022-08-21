<?php
include('navbar.php');
?>
<html>
<head>
<style>
      body
      {
          font: 20px/1.5 Arial, Helvetica,sans-serif;
          padding: 0;
          margin: 5;
          background-color: inherit;
      }
      *
      {
          margin: 0px;
          padding: 0px;
      }
      .accordion {
  background-color:  #FAA0A0;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: #FAA0A0;
  overflow: hidden;
}
    </style>
  </head>
  <body>
  <br> <br>     
<button class="accordion">--> Is it safe to give blood?</button>
<div class="panel">
  <p>Yes. Donating blood is safe. The supplies used to collect blood are sterile and only used once.</p>
</div>
<br> <br>
<button class="accordion">--> How long will it take to replenish the pint of blood I donate?</button>
<div class="panel">
  <p>The plasma from your donation is replaced within about 24 hours. Red cells need about four to six weeks for complete replacement. That’s why at least eight weeks are required between whole blood donations.</p>
</div>
<br> <br>
<button class="accordion">--> Will it hurt when you insert the needle?</button>
<div class="panel">
  <p>Only for a moment. Pinch the fleshy, soft underside of your arm. That pinch is similar to what you will feel when the needle is inserted.</p>
</div>
<br> <br>
<button class="accordion">--> How long does a blood donation take?</button>
<div class="panel">
  <p>The entire process takes about one hour and 15 minutes; the actual donation of a pint of whole blood unit takes eight to 10 minutes. However, the time varies slightly with each person depending on several factors including the donor’s health history and attendance at the blood drive.</p>
</div>
<br> <br>
<button class="accordion">--> How often can I donate blood?</button>
<div class="panel">
  <p>You must wait at least eight weeks (56 days) between donations of whole blood and 16 weeks (112 days) between Power Red donations. Whole blood donors can donate up to 6 times a year. Platelet apheresis donors may give every 7 days up to 24 times per year. Regulations are different for those giving blood for themselves (autologous donors).</p>
</div>
<br> <br>
<button class="accordion">--> What if I have tested positive for COVID-19 in the last 10 days?</button>
<div class="panel">
  <p>You must be fully recovered from COVID-19 and symptom-free for a least 10 days before donating blood.
            <br>If you have had a positive diagnostic test in the past 10 days for COVID-19 but didn’t have symptoms, you will need to wait 10 days after the COVID-19 test. 
            <br>If you have a pending COVID-19 diagnostic test for COVID-19, you are not able to donate during this time. Once you have tested negative or been symptom-free for 10 days you will be eligible to donate blood.</p>
</div>
<br> <br>
<button class="accordion">--> Will recent vaccinations make me ineligible to donate blood?</button>
<div class="panel">
  <p>Recent vaccinations may prevent you from donating blood. Flu vaccines do no make you ineligible. Contact your blood center to request further information.</p>
</div>
<br> <br>
<button class="accordion">--> What is a double red cell donation?</button>
<div class="panel">
  <p>Double red cell donations are performed using an apheresis machine, where the actual donation takes about 30-35 minutes, and allow you to donate two pints of red cells.</p>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
    </body>
    </html>