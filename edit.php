<?php
$server='127.0.0.1:3307';
$username='root';
$password='';
$dbname='kabu_cas';
// Create connection
$conn = new mysqli($server, $username, $password, $dbname);

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    
    $record = mysqli_query($conn,"SELECT * FROM timetable WHERE id=$id");

    if (mysqli_num_rows($record) == 1 ) {

        $results = mysqli_fetch_array($record);
        $day = $results['day'] ;
        $unit = $results['unit'] ;
        $period =$results['period'];
        $class = $results['class'];
    }
}
if(isset($_POST['update'])) // when click on Update button
{
    $day = $_POST['day'];
    $unit = $_POST['unit'];
    $period = $_POST['period'];
    $class = $_POST['class'];
    $lecturernumber = $_POST['lecturernumber'];
    $lecturername = $_POST['lecturername'];
	
    $edit = mysqli_query($conn,"UPDATE y1s1 SET day='$day', unit='$unit', period='$period', class='$class' where id='$id'");

    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:timetables.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error($conn);
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
    <table>
         <tr>
            <th>DAY</th>
            <th>UNIT</th>
            <th>PERIOD</th>
            <th>CLASS</th>
            <th>LECTURER NAME</th>
            <th>LECTURER NUMBER</th>
        </tr>
        <td>
            <select  name="day">
                <option value=""></option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
            </select>
        </td>
        <td>
            <select id="period" name="period">
                <option value=""></option>
                <option value="7:00am-10:00am">7:00am-10:00am</option>
                <option value="0:00am-1:00pm">10:00am-1:00pm</option>
                <option value="1:00pm-4:00pm">1:00pm-4:00pm</option>
                <option value="4:00pm-7:00pm">4:00pm-7:00pm</option>
            </select>
        </td>
        <td>
            <select id="class" name="class">
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
            <input type="text" placeholder="Unit Code" name="unit" required> 
        </td>
        <td> 
            <input type="text" placeholder="Lecturer Name " name="lecturername" required> 
        </td>                  
        <td>
            <input type="text" placeholder="Lecturer Number" name="lecturernumber" required> 
        </td>      
    </table>
    <input type="submit" name="update" value="Update">
</form>