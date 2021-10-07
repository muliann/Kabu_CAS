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
$messege ='';
if(isset($_POST['submit'])){

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

    // add data into the database
    $sql1 = "INSERT INTO law_timetable(day,unit,period,class)
            VALUES
            ('$day1', '$unit1', '$period1', '$class1'),
            ('$day2', '$unit2', '$period2', '$class2'),
            ('$day3', '$unit3', '$period3', '$class3'),
            ('$day4', '$unit4', '$period4', '$class4'),
            ('$day5', '$unit5', '$period5', '$class5'),
            ('$day6', '$unit6', '$period6', '$class6'),
            ('$day7', '$unit7', '$period7', '$class7');";
    if(mysqli_query($conn,$sql1)){
       $messege = "successfull";
    }else{
        $messege =  mysqli_error($conn);
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
            <li><a href="law">School of Law</a>
                <ul class="subschools">
                    <li><a href="criminology">Criminology</a>
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
                    <li><a href="legalstudies">Legal Studies</a>
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
                    <li><a href="justandpeace">Justice and Peace</a>
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
            <li><a href="smhs">School of Health Science</a>
                <ul class="subschools">
                    <li><a href="#publichealth">Public Health</a>
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
                    <li><a href="#nursing">Nursing</a>
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
                    <li><a href="nutrition">Food and nutrition</a>
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
            <li><a href="sset">School of Science Engineering and Technology</a>
                <ul class="subschools">
                    <li><a href="cs">Computer Science</a>
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
                    <li><a href="cybersec">Cyber Security</a>
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
                    <li><a href="it">Information Technology</a>
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
            <li><a href="education">School of Education</a>
                <ul class="subschools">
                    <li><a href="puremath">Pure Math</a>
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
                    <li><a href="mathchem">Mathematics and Chemistry</a>
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
                    <li><a href="englit">English Literature</a>
                        <ul>
                            <li><a href="#y1s1">Y1S1</a></li>
                            <li><a href="#y1s2">Y2S1</a></li>
                            <li><a href="#y2s1">Y3S1</a></li>
                            <li><a href="#y2s2">Y4S1</a></li>
                            <li><a href="#y3s1">Y1S2</a></li>
                            <li><a href="y3s2">Y2S2</a></li>
                            <li><a href="##y4s1">Y3S2</a></li>
                            <li><a href="#y4s2">Y4S2</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="business">School of Business</a>
                <ul class="subschools">
                    <li><a href="bbit">Business Information Technology</a>
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
                    <li><a href="econstat">Economics and Statistics</a>
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
                    <li><a href="finance">Finance</a>
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
            <li><a href="music"> School of Music</a>
                <ul class="subschools">
                    <li><a href="musicology">Musicology</a>
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
                    <li><a href="churchmusic">Church Music</a>
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
                    <li><a href="musiceducation">Music Education</a>
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
        
    </div>
    <div  class="timetable">
        <div id="y1s1">
        <h3>YEAR 1 SEMESTER 1 Timetable</h3>
        <form action="" method="POST" enctype="multipart/form-data">
            <table>        
                <tr>
                    <td> <b> DAY</b></td>
                    <td><b> TIME</b></td>
                    <td><b> UNIT</b></td>
                    <td><b> CLASS</b></td>               
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
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
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
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
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
                </tr>
            </table>
            <div>
                <button type="submit" name="submit" class="submitbtn">SUBMIT</button>
                <div style="color:red; font-size:20px; ">
                    <?php echo $messege; ?>   
                </div>
            </div>
        </form>
        </div>
        <div id="y1s2">
        <h3>YEAR 1 SEMESTER 2 Timetable</h3>
        <form action="" method="POST" enctype="multipart/form-data">
            <table>        
                <tr>
                    <td> <b> DAY</b></td>
                    <td><b> TIME</b></td>
                    <td><b> UNIT</b></td>
                    <td><b> CLASS</b></td>               
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
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
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
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
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
                </tr>
            </table>
            <div>
                <button type="submit" name="submit" class="submitbtn">SUBMIT</button>
                <div style="color:red; font-size:20px; ">
                    <?php echo $messege; ?>   
                </div>
            </div>
        </form>
        </div>
        <div id="y2s1">
        <h3>YEAR 2 SEMESTER 1 Timetable</h3>
        <form action="" method="POST" enctype="multipart/form-data">
            <table>        
                <tr>
                    <td> <b> DAY</b></td>
                    <td><b> TIME</b></td>
                    <td><b> UNIT</b></td>
                    <td><b> CLASS</b></td>               
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
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
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
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
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
                </tr>
            </table>
            <div>
                <button type="submit" name="submit" class="submitbtn">SUBMIT</button>
                <div style="color:red; font-size:20px; ">
                    <?php echo $messege; ?>   
                </div>
            </div>
        </form>
        </div>
        <div id="y2s2">
        <h3>YEAR 2 SEMESTER 2 Timetable</h3>
        <form action="" method="POST" enctype="multipart/form-data">
            <table>        
                <tr>
                    <td> <b> DAY</b></td>
                    <td><b> TIME</b></td>
                    <td><b> UNIT</b></td>
                    <td><b> CLASS</b></td>               
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
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
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
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
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
                </tr>
            </table>
            <div>
                <button type="submit" name="submit" class="submitbtn">SUBMIT</button>
                <div style="color:red; font-size:20px; ">
                    <?php echo $messege; ?>   
                </div>
            </div>
        </form>
        </div>
        <div id="y3s1">
        <h3>YEAR 3 SEMESTER 1 Timetable</h3>
        <form action="" method="POST" enctype="multipart/form-data">
            <table>        
                <tr>
                    <td> <b> DAY</b></td>
                    <td><b> TIME</b></td>
                    <td><b> UNIT</b></td>
                    <td><b> CLASS</b></td>               
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
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
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
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
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
                </tr>
            </table>
            <div>
                <button type="submit" name="submit" class="submitbtn">SUBMIT</button>
                <div style="color:red; font-size:20px; ">
                    <?php echo $messege; ?>   
                </div>
            </div>
        </form>
        </div>
        <div id="y3s2">
        <h3>YEAR 1 SEMESTER 2 Timetable</h3>
        <form action="" method="POST" enctype="multipart/form-data">
            <table>        
                <tr>
                    <td> <b> DAY</b></td>
                    <td><b> TIME</b></td>
                    <td><b> UNIT</b></td>
                    <td><b> CLASS</b></td>               
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
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
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
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
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
                </tr>
            </table>
            <div>
                <button type="submit" name="submit" class="submitbtn">SUBMIT</button>
                <div style="color:red; font-size:20px; ">
                    <?php echo $messege; ?>   
                </div>
            </div>
        </form>
        </div>
        <div id="y4s1">
        <h3>YEAR 4 SEMESTER 1 Timetable</h3>
        <form action="" method="POST" enctype="multipart/form-data">
            <table>        
                <tr>
                    <td> <b> DAY</b></td>
                    <td><b> TIME</b></td>
                    <td><b> UNIT</b></td>
                    <td><b> CLASS</b></td>               
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
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
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
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
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
                </tr>
            </table>
            <div>
                <button type="submit" name="submit" class="submitbtn">SUBMIT</button>
                <div style="color:red; font-size:20px; ">
                    <?php echo $messege; ?>   
                </div>
            </div>
        </form>
        </div>
        <div id="y4s2">
        <h3>YEAR 4 SEMESTER 2 Timetable</h3>
        <form action="" method="POST" enctype="multipart/form-data">
            <table>        
                <tr>
                    <td> <b> DAY</b></td>
                    <td><b> TIME</b></td>
                    <td><b> UNIT</b></td>
                    <td><b> CLASS</b></td>               
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
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
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
                            <option value="0:00am-1:00pm">10:00am-1:00pm</option>
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
                </tr>
            </table>
            <div>
                <button type="submit" name="submit" class="submitbtn">SUBMIT</button>
                <div style="color:red; font-size:20px; ">
                    <?php echo $messege; ?>   
                </div>
            </div>
        </form>
        </div>
    </div> 

   
   
      
    <div class="footer">
        &copy; <script>document.write(new Date().getFullYear())</script> -KABU University.
    </div>
</body>
</html>
