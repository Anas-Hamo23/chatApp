<?php
include('db.php');
// حدد كل شي من جدول قاعدة البيانات
    $query="select * from chat ORDER BY id DESC";
    $run=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($run)){
        $name=$row['name'];
        $msg=$row['msg'];
        $date=$row['date'];
                
?>
            <div id="chat-data">
                <span style="color:gold"><?php echo $name;?></span>
                <span>: </span>
                <span><?php echo $msg;?></span>
                <span style="color:tomato;float:right"><?php echo $date;?></span>
            </div>
                <?php  }  ?>