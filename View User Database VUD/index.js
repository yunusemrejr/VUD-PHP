
var serverInput;
var userInput;
var passInput;
var dbInput;
var tablename;
var columnname1;
var columnname2;
var columnname3;
var columnname4;

      function connect() {


        serverInput = document.getElementById('serverInput').value ;
 userInput = document.getElementById('userInput').value;
 passInput = document.getElementById('passInput').value;
 dbInput =   document.getElementById('dbInput').value;


      }


      function connectandview() {
 
 tablename =    document.getElementById('tablename').value ;
 columnname1 =    document.getElementById('columnname1').value ;
  columnname2 =    document.getElementById('columnname2').value ;
  columnname3 =   document.getElementById('columnname3').value ;
 columnname4 =    document.getElementById('columnname4').value ;
 
 window.location.href="http://localhost/php/pg2.php?serverInput="+serverInput+"&userInput="+userInput+"&passInput="+
 passInput +"&dbname="+dbInput+"&tablename="+tablename+"&columnname1="+columnname1+"&columnname2="+ columnname2+
 "&columnname3="+ columnname3+"&columnname4="+columnname4 ;

}
 
 

 