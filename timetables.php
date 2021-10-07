<?php
$mysqli = new mysqli('127.0.0.1:3307', 'root', '', 'kabu_cas');  


if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}
else{
 
    $sql1 = "SELECT * FROM y1s1 ORDER BY id ASC ";
    $result1 = $mysqli->query($sql1);


    if( date("l")=='Monday'){
        $sql3 = "SELECT COUNT(class) FROM y1s1 WHERE day = 'Monday' ";
        $result3 = $mysqli->query($sql3);
    }
    elseif( date("l")=='Tuesday'){
        $sql3 = "SELECT COUNT(class) FROM y1s1 WHERE day = 'Tuesday' ";
        $result3 = $mysqli->query($sql3);
    }
    elseif( date("l")=='Wednesday' ){
        $sql3 = "SELECT COUNT(class) FROM y1s1 WHERE day = 'Wednesday'";
        $result3 = $mysqli->query($sql3);
    }
    elseif( date("l")=='Thursday'){
        $sql3 = "SELECT COUNT(class) FROM y1s1 WHERE day = 'Thursday'";
        $result3 = $mysqli->query($sql3);
    }
    elseif( date("l")=='Friday'){
        $sql3 = "SELECT COUNT(class) FROM y1s1 WHERE day = 'Friday'";
        $result3 = $mysqli->query($sql3);
    }
    elseif( date("l")=='Saturday'){
        $sql3 = "SELECT COUNT(class) FROM y1s1 WHERE day = 'Saturday'";
        $result3 = $mysqli->query($sql3);
    }
    else{
        $sql3 = "SELECT COUNT(class) FROM y1s1 WHERE day = 'Sunday'";
        $result3 = $mysqli->query($sql3);
    }

    $sql2 = "SELECT COUNT(ssetrooms) FROM sset ";
    $result2 = $mysqli->query($sql2);

    if( date("l")=='Monday'){
        $sql4 = "SELECT class FROM y1s1 WHERE day = 'Monday' ";
        $result4 = $mysqli->query($sql4);
    }
    elseif( date("l")=='Tuesday'){
        $sql4 = "SELECT class FROM y1s1 WHERE day = 'Tuesday' ";
        $result4 = $mysqli->query($sql4);
    }
    elseif( date("l")=='Wednesday' ){
        $sql4 = "SELECT class FROM y1s1 WHERE day = 'Wednesday'";
        $result4 = $mysqli->query($sql4);
    }
    elseif( date("l")=='Thursday'){
        $sql4 = "SELECT class FROM y1s1 WHERE day = 'Thursday'";
        $result4 = $mysqli->query($sql4);
    }
    elseif( date("l")=='Friday'){
        $sql4 = "SELECT class FROM y1s1 WHERE day = 'Friday'";
        $result4 = $mysqli->query($sql4);
    }
    elseif( date("l")=='Saturday'){
        $sql4 = "SELECT class FROM y1s1 WHERE day = 'Saturday'";
        $result4 = $mysqli->query($sql4);
    }
    else{
        $sql4 = "SELECT class FROM y1s1 WHERE day = 'Sunday'";
        $result4 = $mysqli->query($sql4);
    }

}

$mysqli->close(); 
?>


<!DOCTYPE html>
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
        height:120px;
        text-align: center;
        padding: 5px;    
    }
    h1{  
        color: rgba(255, 123, 0, 0.842);
    }
    .logo{
        float: left;
    }    
    .menu{
        position: absolute;
        height: 550px;
        width: 23%;
        background-color: whitesmoke;
    }
    li {
        list-style: none;
    }
    a{
        text-decoration: none;
        color:black;
        display: block;
    }
    a:hover {
        color:rgb(168, 131, 131);;
    }
    .schools li{
        padding-bottom: 5px;
        font-size: large;
        font-weight: bolder;
    }
    .schools li a{
        font-weight: bolder;
    } 
    .schools li .subschools {      
        display: block;
    }
    .schools li .subschools li{
        font-size: medium;
    }
    .schools li .subschools li a{
        font-weight: lighter;
    }
   .schools li:hover .subschools{
       display: block;
    }
    .schools li .subschools li ul li{
        display: inline-block;
    }
    .schools li .subschools li ul li a{
        display: inline-block;
        padding: 5px;
    }
   .schools li .subschools li ul {      
    display: none;
    }
   .schools li .subschools li:hover  ul{
        display: block;
    }
    .dashboard{
        margin-top:80%;
        width:80%       
    }
    .timetable{
        position: absolute;
        width: 68%;
        margin-left: 20%;
        color: black;
        padding-left: 80px;
    }
    table {
        border-collapse: collapse;
        width: 100%;
        text-align: center;
        margin: 30px;
    }
    th {
        font-weight: bold;
    }
      
    td, th {
        border: 1px solid rgba(241, 178, 119, 0.842);
        text-align: center;
        font-weight: lighter;
    }
  
    .none {
        border: none;
        text-align: center;
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
  </style>
  <title>SSET</title>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="http://eserver.kabarak.ac.ke/students/img/logo-main.png" alt="KABU_LOGO">
        </div>
        <h1>KABARAK UNIVERSITY TIMETABLE</h1>    
    </div>    
    <div class="menu">
        <ul class="schools">
            <li><a href="#">SCHOOOL OF SET DEPARTMENTS</a>
                <ul class="subschools">
                    <li><a href="#">Computer Science</a>
                        <ul>
                            <li><a href="#y1s1">Y1S1</a></li>
                            <li><a href="#y1s2">Y2S1</a></li>
                            <li><a href="#y2s1">Y3S1</a></li>
                            <li><a href="#y2s2">Y4S1</a></li>
                            <li><a href="#y3s1">Y1S2</a></li>
                            <li><a href="#y3s2">Y2S2</a></li>
                            <li><a href="#y4s1">Y3S2</a></li>
                            <li><a href="#y4s2">Y4S2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Cyber Security</a>
                        <ul>
                            <li><a href="#y1s1">Y1S1</a></li>
                            <li><a href="#y1s2">Y2S1</a></li>
                            <li><a href="#y2s1">Y3S1</a></li>
                            <li><a href="#y2s2">Y4S1</a></li>
                            <li><a href="#y3s1">Y1S2</a></li>
                            <li><a href="#y3s2">Y2S2</a></li>
                            <li><a href="#y4s1">Y3S2</a></li>
                            <li><a href="#y4s2">Y4S2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Information Technology</a>
                        <ul>
                            <li><a href="#y1s1">Y1S1</a></li>
                            <li><a href="#y1s2">Y2S1</a></li>
                            <li><a href="#y2s1">Y3S1</a></li>
                            <li><a href="#y2s2">Y4S1</a></li>
                            <li><a href="#y3s1">Y1S2</a></li>
                            <li><a href="#y3s2">Y2S2</a></li>
                            <li><a href="#y4s1">Y3S2</a></li>
                            <li><a href="#y4s2">Y4S2</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            
        </ul>
        
        <table class="dashboard">
            <tr>
                <th style = "padding:5px"> <b> Occupied classes</b></th>
                <th style = "padding:5px"> <b>Unoccupied classes</b></th>
            </tr>

            <?php   
                while($row2=$result2->fetch_assoc() and $row3=$result3->fetch_assoc() and $row4=$result4->fetch_assoc() )
                {
             ?>
                <tr> 
                    <td style = "background-color:red; padding:5px;"><?php echo $row3['COUNT(class)'];?></td>
                    <td  class="free" style = "background-color:grey; padding:5px;"><?php echo $row2['COUNT(ssetrooms)'] - $row3['COUNT(class)'];?></td>           
                </tr>
                <tr>
                <td><?php echo  $row4['class'];?></td>
                
                </tr>
            <?php
                }
             ?> 
           

        </table> 

        <div style="font-style:bold; padding:2px;"><p id="date"><b></b> </p></div>
    </div>
    <div  class="timetable">
    <section>
      <h2>SCHOOL OF COMPUTER SCIENCE</h2>
        <h3>Computer science</h3>
        <table>
           <h4>Y1S1</h4>
            <tr>
                <th>DAY</th>
                <th>UNIT</th>
                <th>PERIOD</th>
                <th>CLASS</th>
                <th>LECTURER NAME</th>
                <th>LECTURER NUMBER</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
    
            <?php   
                while($rows=$result1->fetch_assoc())
                {
             ?>
            <tr>

                <td><?php echo $rows['day'];?></td>
                <td><?php echo $rows['unit'];?></td>
                <td><?php echo $rows['period'];?></td>
                <td><?php echo $rows['class'];?></td>
                <td><?php echo $rows['lecturername'];?></td>
                <td><?php echo $rows['lecturernumber'];?></td>
                <td>
				<a href="edit.php?edit=<?php echo $rows['id']; ?>" >Edit</a>
			</td>
			<td>
				<a href="delete.php?delete=<?php echo $rows['id']; ?>" >Delete</a>
			</td>
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
    </div>  

</body>
</html>

