<?php include('libs/messages.php'); ?>
<?php include('includes/top.php'); 
$id = $_GET['id'];
$page = $_GET['page'];?>
<table border="1">
	<thead>
		<tr>
			<th>id</th>
			<th>creator</th>
			<th>date</th>
			<th>message</th>
		</tr>
	</thead>
	<tbody>
		<?=build_html_messages(include('data/messages.php'));?>
	</tbody>
</table>
	<a href="messages.php?id=<?=$id?>&page=<?=$page+1?>">next</a>
	<a href="messages.php?id=<?=$id?>&page=<?=$page-1?>">before</a>
<?php include('includes/bottom.php'); ?>