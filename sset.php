<?php
$server='127.0.0.1:3307';
$username='root';
$password='';
$dbname='kabu_cas';
// Create connection
$conn = new mysqli($server, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$message = '';
if(isset($_POST['y1s1'])){
    // set parameters 
    $day1 = $_POST['day1'] ;
    $unit1 = $_POST['unit1'] ;
    $period1 = $_POST['period1'];
    $class1 = $_POST['class1'];
    $day2 = $_POST['day2'] ;
    $unit2 = $_POST['unit2'] ;
    $period2 = $_POST['period2'];
    $class2 = $_POST['class2'];
    $day3 = $_POST['day3'] ;
    $unit3 = $_POST['unit3'] ;
    $period3 = $_POST['period3'];
    $class3 = $_POST['class3'];
    $day4 = $_POST['day4'] ;
    $unit4 = $_POST['unit4'] ;
    $period4 = $_POST['period4'];
    $class4 = $_POST['class4'];
    $day5 = $_POST['day5'] ;
    $unit5 = $_POST['unit5'] ;
    $period5 = $_POST['period5'];
    $class5 = $_POST['class5'];
    $day6 = $_POST['day6'] ;
    $unit6 = $_POST['unit6'] ;
    $period6 = $_POST['period6'];
    $class6 = $_POST['class6'];
    $day7 = $_POST['day7'] ;
    $unit7 = $_POST['unit7'] ;
    $period7 = $_POST['period7'];
    $class7 = $_POST['class7'];
    $lecturername1 = $_POST['lecturer1'];
    $lecturernumber1 = $_POST['no1'];
    $lecturername2 = $_POST['lecturer2'];
    $lecturernumber2 = $_POST['no2'];
    $lecturername3 = $_POST['lecturer3'];
    $lecturernumber3 = $_POST['no3'];
    $lecturername4 = $_POST['lecturer4'];
    $lecturernumber4 = $_POST['no4'];
    $lecturername5 = $_POST['lecturer5'];
    $lecturernumber5 = $_POST['no5'];
    $lecturername6 = $_POST['lecturer6'];
    $lecturernumber6 = $_POST['no6'];
    $lecturername7 = $_POST['lecturer7'];
    $lecturernumber7 = $_POST['no7'];

    // add data into the database
    $sql1="INSERT INTO y1s1 (day,unit,period,class,lecturername,lecturernumber) 
            VALUES('$day1','$unit1','$period1','$class1','$lecturername1','$lecturernumber1')";
    $sql2="INSERT INTO y1s1 (day,unit,period,class,lecturername,lecturernumber) 
            VALUES('$day2','$unit2','$period2','$class2','$lecturername2','$lecturernumber2')";
    $sql3="INSERT INTO y1s1 (day,unit,period,class,lecturername,lecturernumber) 
            VALUES('$day3','$unit3','$period3','$class3','$lecturername3','$lecturernumber3')";
    $sql4="INSERT INTO y1s1 (day,unit,period,class,lecturername,lecturernumber) 
            VALUES('$day4','$unit4','$period4','$class4','$lecturername4','$lecturernumber4')";
    $sql5="INSERT INTO y1s1 (day,unit,period,class,lecturername,lecturernumber) 
            VALUES('$day5','$unit5','$period5','$class5','$lecturername5','$lecturernumber5')";
    $sql6="INSERT INTO y1s1 (day,unit,period,class,lecturername,lecturernumber) 
            VALUES('$day6','$unit6','$period6','$class6','$lecturername6','$lecturernumber6')";
    $sql7="INSERT INTO y1s1 (day,unit,period,class,lecturername,lecturernumber) 
            VALUES('$day7','$unit7','$period7','$class7','$lecturername7','$lecturernumber7')";
    if(mysqli_query($conn,$sql1) && mysqli_query($conn,$sql2) && mysqli_query($conn,$sql3)&& mysqli_query($conn,$sql4)&& mysqli_query($conn,$sql5)&& mysqli_query($conn,$sql6)&& mysqli_query($conn,$sql7)){
        $message = "Timetable  for Y1S1 successfully updated";
    }else{
        $message = mysqli_error($conn);
    }    
}

$conn->close();
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
        display: none;
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

    .day{
       margin-top: 10px;
        position: absolute;
        height: 60px;
        width: 70%;
        margin-left: 24%;
        color: black;
        background-color: rgba(241, 178, 119, 0.842);
        text-align: center;
    }
    .timetable{
        margin-top: 100px;
        position: absolute;
        height: 400px;
        width: 68%;
        margin-left: 20%;
        color: black;
        padding-left: 80px;
    }
    table {
        border-collapse: collapse;
        width: 100%;
        text-align: center;
    }
      
    td, th {
        border: 1px solid rgba(241, 178, 119, 0.842);
        text-align: center;
        font-weight: bold;
    }
    .none {
        border: none;
        text-align: center;
    }     
    .message{
        color:rgba(255, 123, 0, 0.842) ;
        background-color: whitesmoke;
        align-content: center;
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
        <h1>CLASS TIMETABLE</h1>    
    </div>
    <div class="menu">
        <ul class="schools">
        <li><a href="">School of Science Engineering and Technology</a>
                <ul class="subschools">
                    <li><a href="#cs">Computer Science</a>
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
                    <li><a href="#cybersec">Cyber Security</a>
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
                    <li><a href="#it">Information Technology</a>
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
            <li><a href="#">School of Law</a>
                <ul class="subschools">
                    <li><a href="#">Criminology</a>
                        <ul>
                            <li><a href="#">Y1S1</a></li>
                            <li><a href="#">Y2S1</a></li>
                            <li><a href="#">Y3S1</a></li>
                            <li><a href="#">Y4S1</a></li>
                            <li><a href="#">Y1S2</a></li>
                            <li><a href="#">Y2S2</a></li>
                            <li><a href="#">Y3S2</a></li>
                            <li><a href="#">Y4S2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Legal Studies</a>
                        <ul>
                        <li><a href="#">Y1S1</a></li>
                            <li><a href="#">Y2S1</a></li>
                            <li><a href="#">Y3S1</a></li>
                            <li><a href="#">Y4S1</a></li>
                            <li><a href="#">Y1S2</a></li>
                            <li><a href="#">Y2S2</a></li>
                            <li><a href="#">Y3S2</a></li>
                            <li><a href="#">Y4S2</a></li>
                        </ul>
                    </li>
                    <li><a href="justandpeace">Justice and Peace</a>
                        <ul>
                        <li><a href="#">Y1S1</a></li>
                            <li><a href="#">Y2S1</a></li>
                            <li><a href="#">Y3S1</a></li>
                            <li><a href="#">Y4S1</a></li>
                            <li><a href="#">Y1S2</a></li>
                            <li><a href="#">Y2S2</a></li>
                            <li><a href="#">Y3S2</a></li>
                            <li><a href="#">Y4S2</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">School of Health Science</a>
                <ul class="subschools">
                    <li><a href="#">Public Health</a>
                        <ul>
                        <li><a href="#">Y1S1</a></li>
                            <li><a href="#">Y2S1</a></li>
                            <li><a href="#">Y3S1</a></li>
                            <li><a href="#">Y4S1</a></li>
                            <li><a href="#">Y1S2</a></li>
                            <li><a href="#">Y2S2</a></li>
                            <li><a href="#">Y3S2</a></li>
                            <li><a href="#">Y4S2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Nursing</a>
                        <ul>
                        <li><a href="#">Y1S1</a></li>
                            <li><a href="#">Y2S1</a></li>
                            <li><a href="#">Y3S1</a></li>
                            <li><a href="#">Y4S1</a></li>
                            <li><a href="#">Y1S2</a></li>
                            <li><a href="#">Y2S2</a></li>
                            <li><a href="#">Y3S2</a></li>
                            <li><a href="#">Y4S2</a></li>
                        </ul>
                    </li>                    
                    <li><a href="#">Food and nutrition</a>
                        <ul>
                        <li><a href="#">Y1S1</a></li>
                            <li><a href="#">Y2S1</a></li>
                            <li><a href="#">Y3S1</a></li>
                            <li><a href="#">Y4S1</a></li>
                            <li><a href="#">Y1S2</a></li>
                            <li><a href="#">Y2S2</a></li>
                            <li><a href="#">Y3S2</a></li>
                            <li><a href="#">Y4S2</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">School of Education</a>
                <ul class="subschools">
                    <li><a href="#">Pure Math</a>
                        <ul>
                        <li><a href="#">Y1S1</a></li>
                            <li><a href="#">Y2S1</a></li>
                            <li><a href="#">Y3S1</a></li>
                            <li><a href="#">Y4S1</a></li>
                            <li><a href="#">Y1S2</a></li>
                            <li><a href="#">Y2S2</a></li>
                            <li><a href="#">Y3S2</a></li>
                            <li><a href="#">Y4S2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Mathematics and Chemistry</a>
                        <ul>
                        <li><a href="#">Y1S1</a></li>
                            <li><a href="#">Y2S1</a></li>
                            <li><a href="#">Y3S1</a></li>
                            <li><a href="#">Y4S1</a></li>
                            <li><a href="#">Y1S2</a></li>
                            <li><a href="#">Y2S2</a></li>
                            <li><a href="#">Y3S2</a></li>
                            <li><a href="#">Y4S2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">English Literature</a>
                        <ul>
                        <li><a href="#">Y1S1</a></li>
                            <li><a href="#">Y2S1</a></li>
                            <li><a href="#">Y3S1</a></li>
                            <li><a href="#">Y4S1</a></li>
                            <li><a href="#">Y1S2</a></li>
                            <li><a href="#">Y2S2</a></li>
                            <li><a href="#">Y3S2</a></li>
                            <li><a href="#">Y4S2</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">School of Business</a>
                <ul class="subschools">
                    <li><a href="#">Business Information Technology</a>
                        <ul>
                        <li><a href="#">Y1S1</a></li>
                            <li><a href="#">Y2S1</a></li>
                            <li><a href="#">Y3S1</a></li>
                            <li><a href="#">Y4S1</a></li>
                            <li><a href="#">Y1S2</a></li>
                            <li><a href="#">Y2S2</a></li>
                            <li><a href="#">Y3S2</a></li>
                            <li><a href="#">Y4S2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Economics and Statistics</a>
                        <ul>
                        <li><a href="#">Y1S1</a></li>
                            <li><a href="#">Y2S1</a></li>
                            <li><a href="#">Y3S1</a></li>
                            <li><a href="#">Y4S1</a></li>
                            <li><a href="#">Y1S2</a></li>
                            <li><a href="#">Y2S2</a></li>
                            <li><a href="#">Y3S2</a></li>
                            <li><a href="#">Y4S2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Finance</a>
                        <ul>
                        <li><a href="#">Y1S1</a></li>
                            <li><a href="#">Y2S1</a></li>
                            <li><a href="#">Y3S1</a></li>
                            <li><a href="#">Y4S1</a></li>
                            <li><a href="#">Y1S2</a></li>
                            <li><a href="#">Y2S2</a></li>
                            <li><a href="#">Y3S2</a></li>
                            <li><a href="#">Y4S2</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#"> School of Music</a>
                <ul class="subschools">
                    <li><a href="#">Musicology</a>
                        <ul>
                        <li><a href="#">Y1S1</a></li>
                            <li><a href="#">Y2S1</a></li>
                            <li><a href="#">Y3S1</a></li>
                            <li><a href="#">Y4S1</a></li>
                            <li><a href="#">Y1S2</a></li>
                            <li><a href="#">Y2S2</a></li>
                            <li><a href="#">Y3S2</a></li>
                            <li><a href="#">Y4S2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Church Music</a>
                        <ul>
                        <li><a href="#">Y1S1</a></li>
                            <li><a href="#">Y2S1</a></li>
                            <li><a href="#">Y3S1</a></li>
                            <li><a href="#">Y4S1</a></li>
                            <li><a href="#">Y1S2</a></li>
                            <li><a href="#">Y2S2</a></li>
                            <li><a href="#">Y3S2</a></li>
                            <li><a href="#">Y4S2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Music Education</a>
                        <ul>
                        <li><a href="#">Y1S1</a></li>
                            <li><a href="#">Y2S1</a></li>
                            <li><a href="#">Y3S1</a></li>
                            <li><a href="#">Y4S1</a></li>
                            <li><a href="#">Y1S2</a></li>
                            <li><a href="#">Y2S2</a></li>
                            <li><a href="#">Y3S2</a></li>
                            <li><a href="#">Y4S2</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        
    </div>
    <div class="day">
        <h2>School of Science Engineering and Technology</h2>
    </div>
    <div class="timetable" id="cs">
        <h3 id="cs" >Computer Science</h3>
        <div class="message" >
                <?php echo $message; ?>   
            </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <h5 id="y1s1">YEAR 1 SEMESTER 1</h5>
            <table>        
                <tr>
                    <td> <b> DAY</b></td>
                    <td><b> TIME</b></td>
                    <td><b> UNIT</b></td>
                    <td><b> CLASS</b></td> 
                    <td><b> LECTURER</b></td>
                    <td><b> LEC No.</b></td>              
                </tr>
                <tr>
                    <td>
                        <select  name="day1">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period1">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="10:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class1">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit1" required> 
                    </td> 
                    <td>
                    <input type="text" placeholder="Lecturer Name " name="lecturer1" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no1" required> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <select  name="day2">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period2">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="10:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class2">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit2" required> 
                    </td>
                    <td>
                    <input type="text" placeholder="Lecturer Name " name="lecturer2" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no2" required> 
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <select  name="day3">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period3">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class3">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit3" required>                   
                    </td>
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer3" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no3" required> 
                    </td>        
                </tr>
                <tr>
                    <td>
                        <select  name="day4">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period4">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class4">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit4" required>                   
                    </td>
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer4" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no4" required> 
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <select  name="day5">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period5">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="10:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class5">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit5" required>                    
                    </td> 
                    <td>    
                    <input type="text" placeholder="Lecturer Name " name="lecturer5" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no5" required> 
                    </td>               
                </tr>
                <tr>
                    <td>
                        <select  name="day6">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period6">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class6">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit6" required>              
                    </td> 
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer6" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no6" required> 
                    </td>                  
                </tr>
                <tr>
                    <td>
                        <select  name="day7">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period7">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class7">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit7" required>                   
                    </td> 
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer7" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no7" required> 
                    </td>                  
                </tr>
            </table>
            <button type="submit" name="y1s1" >SUBMIT</button>
            <button ><a href="timetables.php">VIEW TIMETABLE</a></button> 
            
        </form>
        <form action="" method="POST" enctype="multipart/form-data">
            <h5 id="y1s2" >YEAR 1 SEMESTER 2</h5>
            <table>        
                <tr>
                    <td> <b> DAY</b></td>
                    <td><b> TIME</b></td>
                    <td><b> CLASS</b></td> 
                    <td><b> UNIT</b></td>
                    <td><b> LECTURER</b></td>
                    <td><b> LEC No.</b></td>              
                </tr>
                <tr>
                    <td>
                        <select  name="day1">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period1">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="10:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class1">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit1" required> 
                    </td> 
                    <td>
                    <input type="text" placeholder="Lecturer Name " name="lecturer1" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no1" required> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <select  name="day2">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period2">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="10:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class2">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit2" required> 
                    </td>
                    <td>
                    <input type="text" placeholder="Lecturer Name " name="lecturer2" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no2" required> 
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <select  name="day3">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period3">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="10:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class3">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit3" required>                   
                    </td>
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer3" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no3" required> 
                    </td>        
                </tr>
                <tr>
                    <td>
                        <select  name="day4">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period4">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="10:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class4">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit4" required>                   
                    </td>
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer4" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no4" required> 
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <select  name="day5">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period5">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="10:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class5">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit5" required>                    
                    </td> 
                    <td>    
                    <input type="text" placeholder="Lecturer Name " name="lecturer5" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no5" required> 
                    </td>               
                </tr>
                <tr>
                    <td>
                        <select  name="day6">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period6">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="10:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class6">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit6" required>              
                    </td> 
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer6" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no6" required> 
                    </td>                  
                </tr>
                <tr>
                    <td>
                        <select  name="day7">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period7">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class7">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit7" required>                   
                    </td> 
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer7" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Number" name="no7" required> 
                    </td>                  
                </tr>
            </table>
            <button type="submit" name="y1s2" >SUBMIT</button>
            <button ><a href="timetables.php">VIEW TIMETABLE</a></button> 
        </form>
        <form action="" method="POST" enctype="multipart/form-data">
            <h5 id="y2s1">YEAR 2 SEMESTER 1</h5>
            <table>        
                <tr>
                    <td> <b> DAY</b></td>
                    <td><b> TIME</b></td>
                    <td><b> UNIT</b></td>
                    <td><b> CLASS</b></td> 
                    <td><b> LECTURER</b></td>
                    <td><b> LEC No.</b></td>              
                </tr>
                <tr>
                    <td>
                        <select  name="day1">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period1">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="10:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class1">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit1" required> 
                    </td> 
                    <td>
                    <input type="text" placeholder="Lecturer Name " name="lecturer1" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Number" name="no1" required> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <select  name="day2">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period2">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="10:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class2">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit2" required> 
                    </td>
                    <td>
                    <input type="text" placeholder="Lecturer Name " name="lecturer2" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Number" name="no2" required> 
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <select  name="day3">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period3">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class3">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit3" required>                   
                    </td>
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer3" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no3" required> 
                    </td>        
                </tr>
                <tr>
                    <td>
                        <select  name="day4">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period4">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class4">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit4" required>                   
                    </td>
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer4" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no4" required> 
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <select  name="day5">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period5">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="10:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class5">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit5" required>                    
                    </td> 
                    <td>    
                    <input type="text" placeholder="Lecturer Name " name="lecturer5" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no5" required> 
                    </td>               
                </tr>
                <tr>
                    <td>
                        <select  name="day6">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period6">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class6">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit6" required>              
                    </td> 
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer6" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no6" required> 
                    </td>                  
                </tr>
                <tr>
                    <td>
                        <select  name="day7">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period7">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class7">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit7" required>                   
                    </td> 
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer7" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no7" required> 
                    </td>                  
                </tr>
            </table>
            <button type="submit" name="y2s1" >SUBMIT</button>
            <button ><a href="timetables.php">VIEW TIMETABLE</a></button> 
        </form>
        <form action="" method="POST" enctype="multipart/form-data">
            <h5 id="y2s2">YEAR 2 SEMESTER 2</h5>
            <table>        
                <tr>
                    <td> <b> DAY</b></td>
                    <td><b> TIME</b></td>
                    <td><b> UNIT</b></td>
                    <td><b> CLASS</b></td> 
                    <td><b> LECTURER</b></td>
                    <td><b> LEC No.</b></td>              
                </tr>
                <tr>
                    <td>
                        <select  name="day1">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period1">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="10:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class1">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit1" required> 
                    </td> 
                    <td>
                    <input type="text" placeholder="Lecturer Name " name="lecturer1" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no1" required> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <select  name="day2">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period2">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="10:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class2">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit2" required> 
                    </td>
                    <td>
                    <input type="text" placeholder="Lecturer Name " name="lecturer2" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no2" required> 
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <select  name="day3">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period3">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class3">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit3" required>                   
                    </td>
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer3" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no3" required> 
                    </td>        
                </tr>
                <tr>
                    <td>
                        <select  name="day4">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period4">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class4">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit4" required>                   
                    </td>
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer4" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no4" required> 
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <select  name="day5">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period5">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="10:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class5">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit5" required>                    
                    </td> 
                    <td>    
                    <input type="text" placeholder="Lecturer Name " name="lecturer5" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no5" required> 
                    </td>               
                </tr>
                <tr>
                    <td>
                        <select  name="day6">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period6">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class6">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit6" required>              
                    </td> 
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer6" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no6" required> 
                    </td>                  
                </tr>
                <tr>
                    <td>
                        <select  name="day7">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period7">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class7">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit7" required>                   
                    </td> 
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer7" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no7" required> 
                    </td>                  
                </tr>
            </table>
            <button type="submit" name="submit" >SUBMIT</button>
            <button ><a href="timetables.php">VIEW TIMETABLE</a></button> 
        </form>
        <form action="" method="POST" enctype="multipart/form-data">
            <h5 id="y3s1">YEAR 3 SEMESTER 1</h5>
            <table>        
                <tr>
                    <td> <b> DAY</b></td>
                    <td><b> TIME</b></td>
                    <td><b> UNIT</b></td>
                    <td><b> CLASS</b></td> 
                    <td><b> LECTURER</b></td>
                    <td><b> LEC No.</b></td>              
                </tr>
                <tr>
                    <td>
                        <select  name="day1">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period1">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="10:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class1">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit1" required> 
                    </td> 
                    <td>
                    <input type="text" placeholder="Lecturer Name " name="lecturer1" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no1" required> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <select  name="day2">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period2">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="10:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class2">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit2" required> 
                    </td>
                    <td>
                    <input type="text" placeholder="Lecturer Name " name="lecturer2" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no2" required> 
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <select  name="day3">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period3">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class3">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit3" required>                   
                    </td>
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer3" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no3" required> 
                    </td>        
                </tr>
                <tr>
                    <td>
                        <select  name="day4">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period4">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class4">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit4" required>                   
                    </td>
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer4" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no4" required> 
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <select  name="day5">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period5">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="10:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class5">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit5" required>                    
                    </td> 
                    <td>    
                    <input type="text" placeholder="Lecturer Name " name="lecturer5" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no5" required> 
                    </td>               
                </tr>
                <tr>
                    <td>
                        <select  name="day6">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period6">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class6">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit6" required>              
                    </td> 
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer6" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no6" required> 
                    </td>                  
                </tr>
                <tr>
                    <td>
                        <select  name="day7">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period7">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class7">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit7" required>                   
                    </td> 
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer7" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no7" required> 
                    </td>                  
                </tr>
            </table>
            <button type="submit" name="submit" >SUBMIT</button>
            <button ><a href="timetables.php">VIEW TIMETABLE</a></button> 
        </form>
        <form action="" method="POST" enctype="multipart/form-data">
            <h5 id="y3s2">YEAR 3 SEMESTER 2</h5>
            <table>        
                <tr>
                    <td> <b> DAY</b></td>
                    <td><b> TIME</b></td>
                    <td><b> UNIT</b></td>
                    <td><b> CLASS</b></td> 
                    <td><b> LECTURER</b></td>
                    <td><b> LEC No.</b></td>              
                </tr>
                <tr>
                    <td>
                        <select  name="day1">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period1">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="10:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class1">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit1" required> 
                    </td> 
                    <td>
                    <input type="text" placeholder="Lecturer Name " name="lecturer1" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no1" required> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <select  name="day2">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period2">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="10:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class2">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit2" required> 
                    </td>
                    <td>
                    <input type="text" placeholder="Lecturer Name " name="lecturer2" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no2" required> 
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <select  name="day3">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period3">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class3">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit3" required>                   
                    </td>
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer3" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no3" required> 
                    </td>        
                </tr>
                <tr>
                    <td>
                        <select  name="day4">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period4">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class4">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit4" required>                   
                    </td>
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer4" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no4" required> 
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <select  name="day5">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period5">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="10:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class5">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit5" required>                    
                    </td> 
                    <td>    
                    <input type="text" placeholder="Lecturer Name " name="lecturer5" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no5" required> 
                    </td>               
                </tr>
                <tr>
                    <td>
                        <select  name="day6">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period6">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class6">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit6" required>              
                    </td> 
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer6" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no6" required> 
                    </td>                  
                </tr>
                <tr>
                    <td>
                        <select  name="day7">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period7">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class7">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit7" required>                   
                    </td> 
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer7" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no7" required> 
                    </td>                  
                </tr>
            </table>
            <button type="submit" name="submit" >SUBMIT</button>
            <button ><a href="timetables.php">VIEW TIMETABLE</a></button> 
        </form>
        <form action="" method="POST" enctype="multipart/form-data">
            <h5 id="y4s1">YEAR 4 SEMESTER 1</h5>
            <table>        
                <tr>
                    <td> <b> DAY</b></td>
                    <td><b> TIME</b></td>
                    <td><b> UNIT</b></td>
                    <td><b> CLASS</b></td> 
                    <td><b> LECTURER</b></td>
                    <td><b> LEC No.</b></td>              
                </tr>
                <tr>
                    <td>
                        <select  name="day1">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period1">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="10:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class1">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit1" required> 
                    </td> 
                    <td>
                    <input type="text" placeholder="Lecturer Name " name="lecturer1" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no1" required> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <select  name="day2">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period2">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="10:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class2">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit2" required> 
                    </td>
                    <td>
                    <input type="text" placeholder="Lecturer Name " name="lecturer2" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no2" required> 
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <select  name="day3">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period3">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class3">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit3" required>                   
                    </td>
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer3" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no3" required> 
                    </td>        
                </tr>
                <tr>
                    <td>
                        <select  name="day4">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period4">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class4">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit4" required>                   
                    </td>
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer4" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no4" required> 
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <select  name="day5">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period5">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="10:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class5">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit5" required>                    
                    </td> 
                    <td>    
                    <input type="text" placeholder="Lecturer Name " name="lecturer5" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no5" required> 
                    </td>               
                </tr>
                <tr>
                    <td>
                        <select  name="day6">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period6">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class6">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit6" required>              
                    </td> 
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer6" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no6" required> 
                    </td>                  
                </tr>
                <tr>
                    <td>
                        <select  name="day7">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period7">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class7">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit7" required>                   
                    </td> 
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer7" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no7" required> 
                    </td>                  
                </tr>
            </table>
            <button type="submit" name="submit" >SUBMIT</button>
            <button ><a href="timetables.php">VIEW TIMETABLE</a></button> 
        </form>
        <form action="" method="POST" enctype="multipart/form-data">
            <h5 id="y4s2">YEAR 4 SEMESTER 2</h5>
            <table>        
                <tr>
                    <td> <b> DAY</b></td>
                    <td><b> TIME</b></td>
                    <td><b> UNIT</b></td>
                    <td><b> CLASS</b></td> 
                    <td><b> LECTURER</b></td>
                    <td><b> LEC No.</b></td>              
                </tr>
                <tr>
                    <td>
                        <select  name="day1">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period1">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="10:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class1">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit1" required> 
                    </td> 
                    <td>
                    <input type="text" placeholder="Lecturer Name " name="lecturer1" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no1" required> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <select  name="day2">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period2">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="10:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class2">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit2" required> 
                    </td>
                    <td>
                    <input type="text" placeholder="Lecturer Name " name="lecturer2" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no2" required> 
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <select  name="day3">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period3">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class3">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit3" required>                   
                    </td>
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer3" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no3" required> 
                    </td>        
                </tr>
                <tr>
                    <td>
                        <select  name="day4">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period4">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class4">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit4" required>                   
                    </td>
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer4" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no4" required> 
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <select  name="day5">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period5">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="10:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class5">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit5" required>                    
                    </td> 
                    <td>    
                    <input type="text" placeholder="Lecturer Name " name="lecturer5" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no5" required> 
                    </td>               
                </tr>
                <tr>
                    <td>
                        <select  name="day6">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period6">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class6">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit6" required>              
                    </td> 
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer6" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no6" required> 
                    </td>                  
                </tr>
                <tr>
                    <td>
                        <select  name="day7">
                            <option value=""></option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                  </td>
                    <td>
                        <select id="period" name="period7">
                            <option value=""></option>
                            <option value="7:00am-10:00am">7:00am-10:00am</option>
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                            <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                            <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
                        </select>
                    </td>
                    <td>
                        <select id="class" name="class7">
                            <option value=""></option>
                            <option value="L1" >L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="L4">L4</option>
                            <option value="L5">L5</option>
                            <option value="L6">L6</option>
                            <option value="L7">L7</option>
                            <option value="L8">L8</option>
                            <option value="L9">L9</option>
                            <option value="L10">L10</option>
                            <option value="L11">L11</option>
                            <option value="L12">L12</option>
                            <option value="L13">L13</option>
                            <option value="L14">L14</option>
                            <option value="L15">L15</option>
                            <option value="L16">L16</option>                       
                        </select>
                    </td>
                    <td>
                    <input type="text" placeholder="Unit Code" name="unit7" required>                   
                    </td> 
                    <td> 
                    <input type="text" placeholder="Lecturer Name " name="lecturer7" required> 
                    </td>                  
                    <td>
                    <input type="text" placeholder="Lecturer Name" name="no7" required> 
                    </td>                  
                </tr>
            </table>
            <button type="submit" name="submit" >SUBMIT</button>
            <button ><a href="timetables.php">VIEW TIMETABLE</a></button> 
        </form>
    </div>   
    <div class="footer">
        &copy; <script>document.write(new Date().getFullYear())</script> -KABU University.
    </div>
</body>
</html>
