<html>
  <head>
    <script src="pg2.js">



</script>
    <title>View User Database - YEV</title>
    <link rel="icon" type="image/x-icon" href="vud.ico" />
     <style>
      #logo {

        width:60%;
        text-align:center;
        margin:auto;
        display:flex;
        border-radius:11px;
        border-width: 4px;
        border-style: solid;
        border: color grey;
        animation: animation2 4s infinite;
    
      
     
      }
      body {
      animation: animation1 14s infinite;
      text-align:center;
      min-width:1400px;
      font-family:arial;
      color:black;
      background:  no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
     
      }

      #databaseinfo {

    border: 5px solid black;
    border-radius:6px;
    width:20%;
    float:left;
    background: linear-gradient( to left, purple, blue);

      }
    
      #connectbtn , #viewbtn {

         border:2px solid orange;
         border-radius:10px;
         color:white;
         background-color:brown;
      }

      #connectbtn:hover , #viewbtn:hover{
     
        opacity:0.5;

      }
      </style>
      <style>
              @keyframes animation1{
      
                0% { background-color: red; background-image: url('bg.png');}
    20% {  background-color: blue; background-image: url('bg.png');}
    40% {background-color: purple; background-image: url('bg.png');}
    60% {background-color: orange; background-image: url('bg.png');}
    80% {background-color: green; background-image: url('bg.png');}
    100% {background-color: black; background-image: url('bg.png');}
      }


      @keyframes animation2{
      
      0% { transform:rotate(0deg) }
      24% {filter: blur(2px);}
      25%  { transform:rotate(1deg);  filter: grayscale(36%);  }
      50% { transform:rotate(0deg) ;filter: grayscale(86%); }
      75% { transform:rotate(-1deg);filter: grayscale(46%);  }
      100% { transform:rotate(0deg) }
}

      #databaseTable {

        border: 5px solid black;    border-radius:6px;
        background: linear-gradient( to left, purple, orange);

    width:20%;
float:right;
padding-right:20px;
      }

      #viewBox {
        padding-left:250px;
        padding-right:250px;
        background: linear-gradient( to left, white, lightblue);


border:3px solid grey;    border-radius:6px;

width:20%;
float:right;
background-color:white;

      }
      </style>
      <script>
        var width1= window.innerWidth;
        if(width1<=1185) {
        document.getElementById('databaseTable').innerHTML='xxxxxxx'

        }
        </script>
  </head>
  <body>
<img id="logo" src="mudd.png"><br /><hr>
<div id="databaseinfo">
  <h3 style="color:white;">mySQL Details</h3>
  <hr>
<p style="color:white;">Server:</p><form action="index.php" method="get"><input type="text" name="serverInput" id="serverInput"  value="localhost" /></form> 
<p style="color:white;">Database:</p><form action="index.php" method="get"><input type="text" name="dbInput" id="dbInput" value="mud"/></form>
<p style="color:white;">User:</p><form action="index.php" method="get"><input type="text" name="userInput" id="userInput" value="root"/></form>
<p style="color:white;">Password:</p><form action="index.php" method="get"><input type="text" name="passInput" id="passInput"  value=""/></form><br />
<input id="connectbtn" onclick="connect()" type="submit" name="Connect" value="Save">  
<br /><br />

    </div><div id="databaseTable">
  <h3 style="color:white;">Table Details</h3>
  <p style="font-size:10px;color:white;"> *4 column tables only</p>
  <hr>
<p style="color:white;">Table Name:</p><form action="index.php" method="get"><input type="text" name="tablename" id="tablename" value="mud"/></form>
<br />
<p style="color:white;">Column 1 Name:</p><form action="index.php" method="get"><input type="text" name="columnname1" id="columnname1" value="Name"/></form>
<br />
<p style="color:white;">Column 2 Name:</p><form action="index.php" method="get"><input type="text" name="columnname2" id="columnname2" value="Surname"/></form>
<br />
<p style="color:white;">Column 3 Name:</p><form action="index.php" method="get"><input type="text" name="columnname3" id="columnname3" value="ID"/></form>
<br />
<p style="color:white;">Column 4 Name:</p><form action="index.php" method="get"><input type="text" name="columnname4" id="columnname4" value="Email"/></form>
<br /><br />
<input id="viewbtn" onclick="connectandview()" type="submit" name="View" value="Connect and View">  
<br /><br />


    </div>
    <div id='viewBox'>
<b>mySQL View  </b> <hr><br>

<div id="phpDivinViewBox" >
      <?php
 $host=$_GET["serverInput"];
$user=$_GET["userInput"];
$pass=$_GET["passInput"];
$db=$_GET["dbname"];
$tablename=$_GET["tablename"];
$columnname1=$_GET["columnname1"];
$columnname2=$_GET["columnname2"];
$columnname3=$_GET["columnname3"];
$columnname4=$_GET["columnname4"];
     

$conn = mysqli_connect($host, $user, $pass, $db);
$sql = "SELECT * FROM ".$tablename;
$result = $conn->query($sql);

if ($result->num_rows >0 && $result->num_rows< 21) {

  while ($row = $result-> fetch_assoc()) {

    echo "<p><b>Column 1 says:</b></p>".$row[$columnname1]. "<br><p><b>Column 2 says:</b></p>".$row[$columnname2].  "<br><p><b>Column 3 says:</b></p>".$row[$columnname3]. "<br><p><b>Column 4 says:</b></p>". $row[$columnname4];

  }


}

else {

echo "no results to show or value count is bigger than allowed number (20 rows)";
  
}

$conn->close();

?>

</div>
    </div>
    



 





 
  </body>
</html>