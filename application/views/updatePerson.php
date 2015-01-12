<!DOCTYPE html>
<html>
	<head>
		<title>CRUD Database</title>
	</head>
<body>
	<form name="updatePerson" method="post" action="<?php 
	echo site_url('personController/updatePerson') ?>" enctype="application/x-wwwform-urlencoded">
<fieldset>
<legend> Form Update Person</legend>
	<label type="hidden" name="idPerson" value="<?php echo $person->idPerson ?>" />
		Name :<br>
	<label type="label" name="name" maxlength="50" /><?php echo $person->name ?><hr>
		Address :<br>
	<label type="label" name="address" maxlength="100" /><?php echo $person->address ?><hr>
		Age : <br>
	<label type="label" name="age" maxlength="10" /><?php echo $person->age ?><hr/>
	<label type="submit" value="Update" />
	<label type="button" name="Cancel" onclick="javascript:document.location.href='<?php echo site_url(); ?>'" value="Batal" />
</fieldset>
</form>
<br>
<h1>
	DATA PENDIDIKAN YANG DITEMPUH
</h1>
<table id="tableData" align="left" border="1" cellspacing="0" cellpadding="0" width="100%">
	<tr align="left" valign="top">
		<th>School</th>
		<th>School Address</th>
	</tr>
	<?php foreach($detail as $row){ ?>
	<tr align="left" valign="top">
		<td><?php echo $row->school; ?></td>
		<td><?php echo $row->address; ?></td>
	</tr>
	<?php } ?>
	</table>
</body>
</html>
