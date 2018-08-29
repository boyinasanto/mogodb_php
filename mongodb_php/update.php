<?php
require 'vendor/autoload.php';
$id=$_GET['id'];
$connection = new MongoDB\Client();
$db = $connection->test;
$id = new MongoDB\BSON\ObjectID($id);
$mobj = $db->users->findOne(array('_id'=> $id));

?>
<html>
<head>
</head>
<body>
<form action="updatedata.php" method="post">
<input name="name" value="<?php echo $mobj['name']?>"/><br/>
<input name="age" value="<?php echo $mobj['age']?>"/><br/>
<input name="email" value="<?php echo $mobj['email']?>"/><br/>
<input name="id" type="hidden" value="<?php echo $mobj['_id']?>"/>

<input type="submit" name="submit" value="submit"/>
</form>
</body>
</html>
