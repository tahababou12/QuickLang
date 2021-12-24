<?php
 // add possible answers for  complete  game to database  ///
include_once('config.php');?>
<!doctype html>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Admin Panel For Quicklang ©</title>
	
	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	
	
	
	<?php
	$condition	=	'AND id_question IN(SELECT id from questions where id_game=3)';
	
	if(isset($_REQUEST['id_question']) and $_REQUEST['id_question']!=""){
		$condition	.=	' AND id_question LIKE "'.$_REQUEST['id_question'].'" ';
	}
	
	$userData	=	$db->getAllRecords('answers','*',$condition,'ORDER BY id DESC');
	?>
   	<div class="container">
		<h1><a href="https://learncodeweb.com/php/php-crud-in-bootstrap-4-with-search-functionality/">Complete Game</a></h1>
		
		<?php include("menu.php"); ?>
		<div class="card">
			<div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>Liste Réponse Pour :</strong> <strong>
				<?php 
				$cnd_data	=	'AND id ="'.$_REQUEST['id_question'].'"';
				$qstData	=	$db->getAllRecords('questions','*',$cnd_data,'ORDER BY id DESC');
				foreach($qstData as $qst){
				echo $qst['question_text'];
				}
				?>
				</strong><a href="add-answer-complete.php?id_question=<?php echo $_REQUEST['id_question']; ?>" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i> Ajout Reponse</a></div>
			
			<div class="card-body">
				<?php
				if(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rds"){
					echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Record deleted successfully!</div>';
				}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rus"){
					echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Record updated successfully!</div>';
				}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rnu"){
					echo	'<div class="alert alert-warning"><i class="fa fa-exclamation-triangle"></i> You did not change any thing!</div>';
				}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rna"){
					echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> There is some thing wrong <strong>Please try again!</strong></div>';
				}
				?>
				
			</div>
		</div>
		<hr>
		
		<div>
			<table class="table table-striped table-bordered">
				<thead>
					<tr class="bg-primary text-white">
						<th>#</th>
						<th>Réponses Texte</th>
						<th>Bonne Réponse</th>
						<th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$s	=	'';
					foreach($userData as $val){
						$s++;
					?>
					<tr>
						<td><?php echo $s;?></td>
						<td><?php echo $val['answer_text'];?></td>
						<td align="center"><?php if ($val['correct']==1) { 
						echo ('<i class="fas fa-check-circle" style="color:green"></i>');
						}
						?></td>
						<td align="center">
							<a href="edit-answer-complete.php?editId=<?php echo $val['id'];?>&id_question=<?php echo $_REQUEST['id_question']; ?>" class="text-primary"><i class="fa fa-fw fa-edit"></i> Editer</a> | 
							<a href="delete-answer-complete.php?delId=<?php echo $val['id'];?>&id_question=<?php echo $_REQUEST['id_question']; ?>" class="text-danger" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Supprimer</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div> <!--/.col-sm-12-->
		
	</div>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
</body>
</html>
