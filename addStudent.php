<?php
include('connection.php');

$name = $_GET['name'];
$degree =$_GET['degree'];
$course = $_GET['course'];

$query="INSERT INTO `students`(`st_name`, `st_degree`, `st_course`) VALUES('$name','$degree','$course')";
$result=mysqli_query($conn,$query);

$st_query="SELECT * From `students`";
$st_result=mysqli_query($conn,$st_query);

?>
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Student Name</th>
            <th>Student Degree</th>
            <th>Student Course</th>
        </tr>

    </thead>
    <tbody>
    <?php
        while($row=mysqli_fetch_assoc($st_result))
        {
    ?>
        <tr>
            <td><?php echo $row['st_name'];?></td>
            <td><?php echo $row['st_degree'];?></td>
            <td><?php echo $row['st_course'];?></td>
        </tr>
    <?php
        }
    ?>
    </tbody>

</table>