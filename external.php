<?php
//use this when data is sent as string variable
/* echo "<p>Great,". $_GET['user']. " It's good to know you have learnt programming before</p>";
echo "Your password is ". $_GET['password']; */

echo "<p>Great,". $_POST['user']. " It's good to know you have learnt programming before</p>";
echo "Your password is ". $_POST['password'];

?>
<div class="form-group">
<label>Mode of Learning</label>
<select name='mode' id='mode'>
<option value='Online'>Online</option>
<option value='Classroom'>Classroom</option>
</select>
</div>