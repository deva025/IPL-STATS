<html>  
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style> 

body {
  background-image: url("https://resources.pulse.icc-cricket.com/ICC/photo/2017/01/30/44780aa2-2b6d-4048-897c-6606762b3d38/GettyImages-463485384_Cropped.jpg");
 background-size: cover;
}
select {
  width: 25%;
  padding: 16px 20px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
 opacity: 0.7;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color:white; 
  color: black; 
  border: 2px solid #4CAF50;
}
.button1:hover {
  background-color: #4CAF50;
  color: white;
}

input[type=text] {
  width: 130px;
 
  border: 2px solid #0000;
  border-radius: 4px;
  font-size: 16px;
  background-color:#ccc;
  
  opacity: 0.7;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  transition: width 0.4s ease-in-out;
}


input[type=text]:focus {
  width: 100%;
}
</style>
</head>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<body>
<br>
<br>
<h1 style="color:azure">orange cap holder of  required year .</h1>
<form action="2017.php" method="post">
  <select id="country" name="country">
 <option value="we">2016</option>
 <option value="nn">2017</option>
 <option value="mm">2018</option>
 <option value="bb">2019</option>
 <option value="u">2020</option>
<option value="uh">ALL</option>
  </select>
<button class="button button1">submit</button>
</form>
<div  style="text-align:right;">
<form action="sort.php" method="post">
   <h1 style="color:azure"> click here to  know each teams leading run getter </h1> <button class="button button1">click here</button>
</div>
</form>
<h1 style="color:azure">purple cap holder of  required year .</h1>
<form action="2016.php" method="post">
  <select id="country" name="country">
 <option value="we">2016</option>
 <option value="nn">2017</option>
 <option value="mm">2018</option>
 <option value="bb">2019</option>
 <option value="u">2020</option>
<option value="uh">ALL</option>
  </select>
<button class="button button1">submit</button>
</form>
<div style="text-align:center;text-shadow: 2px 2px 5px azure;font-size:200%;">
<form action="dddd.php" method="post">

<h4 style="color:azure">enter your team: </h4>
 
<input type="text" name="name" placeholder="Search.... ex : srh, csk, kkr, rr, dc, mi, rcb, kxip"><br>
<button class="button button1">submit</button>
</form>
<br>
</div>
</body>
</html>