

<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  
<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

<link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />


  <title>CodePen - 2080-1</title>
  
  
  
  
<style>
#message {
  background-color:rgb(0,0,255)
}

#timeRemaining{
  background-color:red;
  border-style:solid;
}

body {
  text-align:center;
  font-size:150%;
}
</style>

  
  
  
  

</head>

<body translate="no" >
  <h1>Count Down Timer</h1>
<div id="message">...</div>
<div id="timeRemaining">...</div>
  
  
      <script id="rendered-js" >
console.clear();
console.log("hello log");

function compute() {
 const dateNow = new Date ();
 const dateThen = new Date(<?php echo $_GET["Year"]; ?>,<?php echo $_GET["Month"]; ?> -1,<?php echo $_GET["Day"]; ?>;
 const dateDiff = dateThen - dateNow;
 const dateCount = Math.floor(dateDiff/1000/60/60/24);
 const hourOffset = Math.floor(dateDiff/1000/60/60);
  const hours = hourOffset - dateCount*24;
  const minutes = new Date(dateDiff).getMinutes();
  let dateString = "Time to new year: "
  dateString = dateString + dateCount + " Days, " + hours + " Hours, " + minutes + " minutes"
document.getElementById("timeRemaining").innerHTML=dateString;




if(dateDiff < 0){
  document.getElementById("message").innerHTML="Time's up";
  clearInterval(theTimer);
  
}

}
let theTimer = setInterval(compute,1000);
    </script>

  

</body>

</html>
 
