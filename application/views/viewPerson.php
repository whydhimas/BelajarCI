<!DOCTYPE html>
<html>
	<head>
		<title>CRUD Database</title>
	</head>
<body>
	<h1>
		DATA PARA SISWA
	</h1>
<a href="<?php echo site_url("personController/insertViewPerson"); ?>">Insert
Person</a> <br>
	<form name="filterPerson" method="post" action="<?php echo
site_url('personController/viewFilterPersonPaging') ?>" enctype="application/x-wwwform-
urlencoded">
	Filter Data =
		<select name="checkboxFilter">
		<option value=''>Select one</option>
		<option value='idPerson'>ID</option>
		<option value='name'>Name</option>
		<option value='p.address'>Person Address</option>
		<option value='dp.address'>School Address</option>
		</select>
		<input type="text" name="textFilter" maxlength="50" />
		<input type="submit" value="Save" />
	</form>
<table id="tableData" align="left" border="1" cellspacing="0" cellpadding="0" width="100%">
	<tr align="left" valign="top">
		<th>No</th>
		<th>ID</th>
		<th>Name</th>
		<th>Address</th>
		<th>Age</th>
		<th>School</th>
		<th>School Address</th>
		<th>Action</th>
	</tr>
<?php $i=0; foreach($person as $row){ $i++; ?>
	<tr align="left" valign="top">
		<td><?php echo $i; ?></td>
		<td><?php echo $row->idPerson; ?></td>
		<td><?php echo $row->name; ?></td>
		<td><?php echo $row->address; ?></td>
		<td><?php echo $row->age; ?></td>
		<td><?php echo $row->school; ?></td>
		<td><?php echo $row->schoolAddress; ?></td>
		<td>
<a href="<?php echo site_url('personController/
updateViewPerson?idPerson='.$row->idPerson)?>">Update</a> ||
<a href="<?php echo site_url('personController/deletePerson?
idPerson='.$row->idPerson)?>">Delete</a>
		</td>
	</tr>
<?php }?>
</table>
<div height="30px" width="100%"> <?php echo $pagePerson; ?> </div>
</body>
</html>