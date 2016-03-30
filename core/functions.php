<?php
function query($sql){
	global $connection;
	return mysqli_query($connection,$sql);
}
function confirm($result){
global $connection;
if(!$result) {
die("QUERY FAILED " . mysqli_error($connection));
	}
}
function fetch_array($result){
return mysqli_fetch_array($result);
}
function display_feedback() {
$query = query("SELECT * FROM form");
confirm($query);
while($row = fetch_array($query)) {
$name = $row['name'];
$sub = $row['sub'];
$msg = $row['msg'];
$num = $row['num'];

$feedback = <<<DELIMETER
<div class="row">


	           <div class="panel panel panel-info">
                 <div class="panel-heading">
                          <h3 class="panel-title">{$sub}</h3>
                 </div>
            <div class="panel-body">
            <div class="row">
            <div class="col-md-6">
                            {$msg}
                            <br>
                            <p class="align-right">-{$name}</p>
                               <br>

   
               <a href="sms.php?num={$num}">
                  <button  type="submit" class="btn btn-primary hfbtn ">Send Message</button></a>

            </div>
            <div class="col-md-6">

                      <a href="delete.php?names=$name ?>">
                       <button  type="submit" class="btn btn-primary hfbtn ">X</button></a>
            </div>
            </div>
   </div>
   </div>
  </div>
DELIMETER;
echo $feedback;
}
}


function redirectjava($location){
	echo '<script type="text/javascript">window.location.href= "'.$location.'";</script>';
	echo 'window.location.href = '.$location.';';
}
?>