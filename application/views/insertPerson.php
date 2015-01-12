<!DOCTYPE html>
<html>
	<head>
		<title>CRUD Database</title>
	</head>
<body>
	<form name="insertPerson" method="post" action="<?php echo site_url('personController/insertPerson') ?>" enctype="application/x-wwwform-
urlencoded">
	<fieldset>
	<legend> Form Insert Person</legend>
		Name :<br>
			<input type="text" name="name" maxlength="50" /><hr>
		Address :<br>
			<input type="text" name="address" maxlength="100" /><hr>
		Age : <br>
			<input type="text" name="age" maxlength="10" /><hr/>
			<input type="submit" value="Save" />
			<input type="button" name="Cancel" onclick="javascript:document.location.href='<?php echo site_url(); ?>'"
value="Batal" />
	</fieldset>
	</form>
</body>
</html>