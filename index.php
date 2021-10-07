<?php
$mysqli = new mysqli('127.0.0.1:3307', 'root', '', 'kabu_cas');  

if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}

$sql1 = "SELECT * FROM y1s1 ORDER BY id ASC ";
$result1 = $mysqli->query($sql1);

$sql2 = "SELECT COUNT(ssetrooms) FROM sset ";
$result2 = $mysqli->query($sql2);

$sql3 = "SELECT COUNT(class) FROM y1s1 ";
$result3 = $mysqli->query($sql3);

$mysqli->close(); 
?><!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      body{
        position: relative;
        min-height: 100%;
        margin: 0px;         
      }
      .header{
        background-color: maroon;
          padding: 10px;    
      }
      h1{
        background-color: maroon;
        padding: 10px; 
        text-align: center;
        color: rgba(255, 123, 0, 0.842);
      }
      .logo{
        float: right;
      }
      .menu {
        background-color: whitesmoke;
        display:block;
        margin: 0;
        padding: 0;
        padding-top: 10px;    
      }
      .menu li {
        display: inline-block;
        align-items: right ;
      }
      .menu li a{
        text-decoration: none;
        padding: 15px;
        color:black;
        display: inline-block;
        font-weight:bold;
      }
      .menu li a:hover {
        color:rgb(168, 131, 131);;
      }
      .menu li .submenu {
        position: absolute;
        background-color: whitesmoke;
        display: none;
      }
      .menu li .submenu li { 
        background-color: whitesmoke; 
        display: inline-block; 
        padding-right: 20px;
      }
      .menu li .submenu li:hover {
        color: rgb(168, 131, 131);
      }
      .menu li .submenu li a {
        display:inline-block ;
        padding: 5px;
        font-weight:bolder;
      } 
      .menu li:hover .submenu {
        display:block;
      }
      .menu li .submenu li .subschools {
        padding: 2px;   
        display: block;
      }
      .menu li .submenu li .subschools li { 
        font-weight: 300;
        display: block;
        padding-left:5px ;
      }
      .menu li .submenu li >.subschools li a {
        display:block ;
        padding: 4px;
      }
      .menu li .submenu li:hover .subschools {
        display: block
       }  
      table{
        margin: 20px;
        
      }
      tr{
        font-size: larger;
        padding: 20px;
      }
      td{
        padding: 20px;
      }
      .text{
        position: absolute;
        margin-left: 120px;
        padding-top: 15px;
      }
      a{
        text-decoration: none;
        padding: 15px;
        color:black;
        display: inline-block;
        font-weight:bold
      }
      .footer{    
        position: absolute;
        right: 0;
        left: 0;
        bottom: 0;
        padding: 10px;
        background-color: maroon;
        text-align: center;
        color: rgba(255, 123, 0, 0.842); 
        position: fixed;   
      }
      @media screen and (max-width:767px){
        .header{
          padding: 1px;
        }
        h1{
          padding: 0;
        }
        .menu{
          display: inline-block;
          background-color: white;
        }            
      }
    </style>
  <title>KABU_CAS</title>
</head>
<body>
  <div class="header">
    <h1>KABU_CAS</h1>
  </div>
  <div class="logo">
    <img src="https://kabarak.ac.ke/wp-content/uploads/2020/01/logo.png" alt="KABU_LOGO">
  </div>
    <ul class="menu">
      <li><a href="index.html">HOME</a> </li>
      <li><a href="timetables">TIMETABLE</a>   
          <ul class="submenu">
              <li><a href="#">School of Business</a>
                  <ul class="subschools">
                  <li><a href="#">BBIT</a> </li>
                  <li><a href="#">Economics and Statistics</a></li>
                  <li><a href="#">Finance</a></li>
                  </ul>
              </li>
              <li><a href="#">School of Law</a>
                  <ul class="subschools">
                      <li><a href="#">Criminology</a> </li>
                      <li><a href="#">Legal Studies</a></li>
                      <li><a href="#">Justice and Peace</a></li>
                  </ul>
              </li>
              <li><a href="#">School of Music</a>
                  <ul class="subschools">
                      <li><a href="#">Musicology</a> </li>
                      <li><a href="#">Music Education</a></li>
                      <li><a href="#">Church Music</a></li>
                  </ul>
              </li>
              <li><a href="#">School of Education</a>
                  <ul class="subschools">
                      <li><a href="#">English literature</a> </li>
                      <li><a href="#">Math and Chemistry</a></li>
                      <li><a href="#">Pure Math</a></li>
                  </ul>
              </li>
              <li><a href="timetables.php">School of Science,Engineering and Technology</a>
                  <ul class="subschools">
                      <li><a href="cs.html">Computer Science</a> </li>
                      <li><a href="it.html">Information Technology</a></li>
                      <li><a href="cybersec.html">Cyber Security</a></li>
                  </ul>
              </li>
              <li><a href="#">School of Health Science</a>
                  <ul class="subschools">
                      <li><a href="#">Public Health</a> </li>
                      <li><a href="#">Nursing</a></li>
                      <li><a href="#">Food and Nutrition</a></li>
                  </ul>
              </li>
          </ul>        
      </li> 
      <li><a href="contacts">CONTACTS</a>            
        <ul class="submenu">
          <li><b>KABARAK</b></li>
          <hr>
          <li><i>Tel: (254) 0729 223 370</i></li>
          <br>
          <li><i>Email: info@kabarak.ac.ke</i></li>
          <br> <br>
          <li><b>Complaints/Compliments</b></li>
          <hr>
          <li><i>feedback@kabarak.ac.ke</i></li>
          <br><br>
          <li><b>Academic Registrar</b></li>
          <hr>
          <li><i>academic_registrar@kabarak.ac.ke</i></li>
        </ul>
      </li>
    </ul>
  </div>
  <div>
    <p>Looking for a vaccant class?</p>

    <ul>
      <li><a href="#">School of Science Engineering and Technology</a>
        <table>
          <tr>
              <th> Occupied classes</th>
              <th >Unoccupied classes</th>
          </tr>

          <?php   
              while($row2=$result2->fetch_assoc() and $row3=$result3->fetch_assoc() )
              {
          ?>
          <tr> 
              <td style = "background-color:red; padding:5px;"><?php echo $row3['COUNT(class)'];?></td>
              <td  class="free" style = "background-color:grey; padding:5px;"><?php echo $row2['COUNT(ssetrooms)'] - $row3['COUNT(class)'];?></td>
              
          
          </tr>
          <?php
              }
          ?>       
        </table>
      </li>
      <li><a href="#">School of Education</a> 
      </li>
      <li><a href="#">School of Health Science</a>
      </li>

      <li><a href="#">School of Business</a>
      
      </li>
      <li><a href="#">School of Music</a>
      </li>

      <li><a href="#">School of Law</a>

      </li>
    </ul>
    
  </div>
   
  
  <div class="footer">
    &copy; <script>document.write(new Date().getFullYear())</script> -KABU University.
  </div>
</body>
</html>