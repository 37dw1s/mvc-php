<div class="col-xs-9">

<p class="bg-success">

<?php if($this->session->flashdata('mark_done')): ?>
<?php echo $this->session->flashdata('mark_done'); ?>
<?php endif; ?>

<?php if($this->session->flashdata('mark_undone')): ?>

<?php echo $this->session->flashdata('mark_undone'); ?>

<?php endif; ?>


</p>

<div class="panel panel-primary">
	<div class="panel-heading"><h4>Project Name: <?php echo $project_data->project_name; ?></h4></div>

	<div class="panel-body">
<p><strong>Date Created:</strong> <?php  echo $project_data->date_created; ?></p>

<h4>Description</h4>

<p><?php  echo $project_data->project_body; ?></p>

</div>
</div>


<!-- new -->
<p class="bg-success">
<?php if($this->session->flashdata('task_created')): ?>

<?php echo $this->session->flashdata('task_created'); ?>

<?php endif; ?>


<?php if($this->session->flashdata('task_deleted')): ?>

<?php echo $this->session->flashdata('task_deleted'); ?>

<?php endif; ?>

<?php if($this->session->flashdata('task_updated')): ?>

<?php echo $this->session->flashdata('task_updated'); ?>

<?php endif; ?>
</p>

<div class="panel panel-warning">
	<div class="panel-heading"><h4>Active Tasks</h4></div>
	<div class="panel-body">
	<ul class="list-group">
	
<?php if($completed_tasks): ?>


	<?php foreach($completed_tasks as $task): ?>

	<li class="list-group-item">
	<a href="<?php echo base_url();?>tasks/display/<?php echo $task->task_id; ?>">
		<?php echo $task->task_name; ?>
	</a>


	</li>

	<?php endforeach; ?>
	<?php else: ?>
	<p>You have no pending tasks </p>

<?php endif; ?>

	</ul>
</div>

</div> <!-- ENd of panel-->


<div class="panel panel-success">
	<div class="panel-heading"><h4>Completed Tasks</h4></div>
	

	<div class="panel-body">

	<ul class="list-group">

<?php if($not_completed_tasks): ?>


	<?php foreach($not_completed_tasks as $task): ?>

	<li class="list-group-item">
	<a href="<?php echo base_url();?>tasks/display/<?php echo $task->task_id; ?>">

		<?php echo $task->task_name; ?>

	</a>
	</li>

	<?php endforeach; ?>

	<?php else: ?>

	<p>You have no pending tasks</p>

<?php endif; ?>

	</ul>
</div>

</div> <!-- End of panel-->

</div>


<div class="col-xs-3 pull-right">
<ul class="list-group">
		
		<h4>Project Actions</h4>	
		<!-- <li class="list-group-item"><a href="<?php echo base_url();?>projects/create/<?php echo $project_data->id; ?>">Create Project</a></li> -->
		<li class="list-group-item"><a href="<?php echo base_url();?>projects/edit/<?php echo $project_data->id; ?>">Edit Project</a></li> 
		<li class="list-group-item"><a href="<?php echo base_url();?>projects/delete/<?php echo $project_data->id; ?>">Delete Project</a></li> 
		<!-- <li class="list-group-item"><a href="<?php echo base_url();?>tasks/create/<?php echo $task->task_id; ?>">Create Task</a></li>  -->
		<li class="list-group-item"><a href="<?php echo base_url();?>tasks/create/<?php echo $project_data->id; ?>">Create Task</a></li> 

	</ul>
	<!-- <?php var_dump($project_data) ;echo  "----------------------"; var_dump($completed_tasks);?> -->
	<!-- <?php var_dump($task);?> -->