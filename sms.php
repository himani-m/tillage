<?php
require 'html/header.php'; 
if (isset($_GET['num'])) {
    $to = $_GET['num'];
    $uid='9870827360';$pwd='8111988';

}
?>
<br><br><br><br><br><br>
<div class="container">
<form role="form" action="msg.php" method="post" >
    <p>Number:</p>
  <div class="form-group input-group">
      
        <div class="input-group-addon">+91</div>
        <input type="number" maxlength="10" name="num" class="form-control" value="<?php echo $to;?>" required>
    </div>  
  <div class="form-group">
         <div class="form-group">
    <label for="Message">Message:</label>
    <input type="text" class="form-control" name="msg" placeholder="Message" required >
  </div>
  
</div>
<button type="submit" class="btn btn-primary btn-block">Send</button>
</form>
</div>
<sp>


