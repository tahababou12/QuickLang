<html>
<head>

</head>
<?php ### calling connexion file ###
include('inc/cnx.php');
##request get all scores for all users #######
$query_scores="SELECT * FROM app_scores ORDER BY score DESC";
###### execute the query please ###########
$exec=mysqli_query($cnx,$query_scores);

##########NOW WRITE DATA IN A  HTML TABLE #############
?>


<div class="container">
	<table border="1">
		<thead>
			<tr><!-- table HEADERS !-->
				<th>User Name</th>
				<th>Game</th>
				<th>Score</th>
				<th>Date and time</th>
				
			</tr>
		</thead>
		<tbody>
		<?php ############## While request find data write it in table columns until end ##############
while ($data_rows=mysqli_fetch_array($exec)) { ?>
			<tr>
				<td><?php ### we have only id player not name we gonna make a new sql request to get user name from ID
					$query_name="SELECT firstname,lastname FROM app_users WHERE id=".$data_rows['id_user']."";
					$exec_name=mysqli_query($cnx,$query_name);
					$row_name=mysqli_fetch_array($exec_name);
					####### write the name ####
					echo $row_name['firstname']; 
					echo $row_name['lastname']; 
				?></td>
				<td><?php ### we have only id game not game name we gonna make a new sql request to get the game name from games table
					$query_game="SELECT game_name FROM games_list WHERE id=".$data_rows['id_game']."";
					$exec_game=mysqli_query($cnx,$query_game);
					$row_game=mysqli_fetch_array($exec_game);
					####### write the name ####
					echo $row_game['game_name']; 
					
				?></td>
				<td><?php  ###write the score #### 
					echo ($data_rows['score']);
				?></td>
				<td><?php  ###write the score date #### 
					echo ($data_rows['date']);
				?></td>
				
			</tr>
<?php } ?>
			
		</tbody>
	</table>
</div>





