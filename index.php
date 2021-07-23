<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Resume</title>
    <?php include 'data.php'; ?>
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    
</head>
<body>
    <div id="header">
      <div class="profile"> 
        <img id="profilepic" src="./images/nopic.png" alt="Profile picture will display here">
      </div>

      <div class="name">
        <h1>PRETHIVEE K G</h1>
        <h2>new budding developer in town</h2> 
      </div>
      
      <div class="yearchanger">
        <p>Please drag the slider to year</p>
        <div class="slidercontent">
          <p><b><span class="year">2019</span>  <span class="year">2020</span>  <span class="year">2021</span>  <span class="year">2022</span></b></p>
          <input type="range" class="slider" onchange="sliding()" id="myRange" min="2019" max="2022" value="2019" step="1">
        </div>
      </div>
      
    </div>
    
    <div class="experience">
      <h2>Experience</h2>
      <dl id="experienceList">
         <p class="dummy">
          My <br> experience will appear, <br> only if you select an year :)
         </p>
      </dl>
    </div>
    <div class="skills">
    <h2>Skills</h2>
    <ul id="skillList">
        <p class="dummy">
          skills will appear according to the <br> selected year.
        </p>
    </ul>
    </div>
    <div class="interest">
    <h2>Area of interest</h2>
    <ul id="areaOfinterestList">
         <p class="dummy">
          interests will appear according to the <br> selected year.
         </p>
    </ul>
    </div>
    <div class="hobbies">
        <h2>Hobbies</h2>
    <ul id="hobbiesList">
    <p class="dummy">
          hobbies will appear according to the <br> selected year.
         </p>
    </ul>
    </div>
    <div class="address">
        <h2>Address</h2>
        <address>
        1600 Pennsylvania Avenue NW <br>
        Washington, D.C. 20500 <br>
        United States of America.
        </address>
    </div>
      <div class="download">
        <h2>Click <a id="resumedoc" href="#" target="_blank">Here</a> to download resume</h2>
        
      </div>
    <div class="connect">
          <h2>Connect with me</h2>
          <p class="no-bullets">
            <span class="connects"><a href="mailto:kgprethivee@gmail.com" target="_blank">E-mail </a></span>
            <span class="connects"><a href="https://www.facebook.com/prithevee.g" target="_blank">Facebook</a></span>
            <span class="connects"><a href="https://www.linkedin.com/in/prethivee-kg-249635157/" target="_blank">linkedIn</a></span>
            <span class="connects"><a href="https://www.youtube.com/channel/UCUftqXG3afet-VXo05gxkXA" target="_blank">YouTube</a></span>
          </p>
            
          
      </div>
    <script>
     
      //this function executes as per the Range slider movement
          function sliding(){
            let v = document.getElementById("myRange").value;
            console.log(v);
            if (v == 2019) {
              myFunction2019();
            } else if(v == 2020){
              myFunction2020();
            } else if(v == 2021){
              myFunction2021();
            } else {
              myFunction2022();
            }
          }
       
        // the below function calls the content function in that years
function myFunction2019() {
  skills2019();
  areaOfInterest2019();
  hobbies2019();
  experience2019();
  document.getElementById("profilepic").src = "./images/mypic2019.jpg";
  document.getElementById("resumedoc").href = "./documents/2019 resume.pdf";
}
function myFunction2020() {
  skills2020();
  areaOfInterest2020();
  hobbies2020();
  experience2020();
  document.getElementById("profilepic").src = "./images/mypic2020.jpg";
  document.getElementById("resumedoc").href = "./documents/2020 resume.pdf";
}
function myFunction2021() {
  skills2021();
  areaOfInterest2021();
  hobbies2021();
  experience2021();
  document.getElementById("profilepic").src = "./images/mypic2021-2022.jpg";
  document.getElementById("resumedoc").href = "./documents/2021 resume.pdf";
}
function myFunction2022() {
  skills2022();
  areaOfInterest2022();
  hobbies2022();
  experience2022();
  document.getElementById("profilepic").src = "./images/mypic2021-2022.jpg";
  document.getElementById("resumedoc").href = "./documents/2022 resume.pdf";
}
// calling skills in that respected year
function skills2019() {
  let a = "<?php echo myphpskill2019()?>";
  document.getElementById("skillList").innerHTML = a;
}
function skills2020() {
  let a = "<?php echo myphpskill2020()?>";
  document.getElementById("skillList").innerHTML = a;
}
function skills2021() {
  let a = "<?php echo myphpskill2021()?>";
  document.getElementById("skillList").innerHTML = a;
}
function skills2022() {
  let a = "<?php echo myphpskill2022()?>";
  document.getElementById("skillList").innerHTML = a;
}
// calling Area of interest in respected year
function areaOfInterest2019() {
  let b = "<?php echo myphpareaofinterest2019()?>";
  document.getElementById("areaOfinterestList").innerHTML = b;
}
function areaOfInterest2020() {
  let b = "<?php echo myphpareaofinterest2020()?>";
  document.getElementById("areaOfinterestList").innerHTML = b;
}
function areaOfInterest2021() {
  let b = "<?php echo myphpareaofinterest2021()?>";
  document.getElementById("areaOfinterestList").innerHTML = b;
}
function areaOfInterest2022() {
  let b = "<?php echo myphpareaofinterest2022()?>";
  document.getElementById("areaOfinterestList").innerHTML = b;
}
// calling hobbies in respected year
function hobbies2019() {
  let c = "<?php echo myphphobbies2019()?>";
  document.getElementById("hobbiesList").innerHTML = c;
}
function hobbies2020() {
  let c = "<?php echo myphphobbies2020()?>";
  document.getElementById("hobbiesList").innerHTML = c;
}
function hobbies2021() {
  let c = "<?php echo myphphobbies2021()?>";
  document.getElementById("hobbiesList").innerHTML = c;
}
function hobbies2022() {
  let c = "<?php echo myphphobbies2022()?>";
  document.getElementById("hobbiesList").innerHTML = c;
}
// calling experience in respected year
function experience2019() {
  let d19 = "<?php echo myphpexperience2019()?>";
  document.getElementById("experienceList").innerHTML = d19;
}
function experience2020() {
  let d19 = "<?php echo myphpexperience2019()?>";
  let d20 = "<?php echo myphpexperience2020()?>";
  document.getElementById("experienceList").innerHTML = d20 + d19;
}
function experience2021() {
  let d19 = "<?php echo myphpexperience2019()?>";
  let d20 = "<?php echo myphpexperience2020()?>";
  let d21 = "<?php echo myphpexperience2021()?>";
  document.getElementById("experienceList").innerHTML = d21 + d20 + d19;
}
function experience2022() {
  let d19 = "<?php echo myphpexperience2019()?>";
  let d20 = "<?php echo myphpexperience2020()?>";
  let d21 = "<?php echo myphpexperience2021()?>";
  let d22 = "<?php echo myphpexperience2022()?>";
  document.getElementById("experienceList").innerHTML = d22 + d21 + d20 + d19;
}

    </script>
    
</body>
</html>