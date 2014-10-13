<h2>Viewing <span class='muted'>#<?php echo $message->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $message->name; ?></p>
<p>
	<strong>Message:</strong>
	<?php echo $message->message; ?></p>
	
	<h3>Comments</h3>
	<ul>
		<?php foreach ($comments as $comment): ?>
		<li>
			<ul>
				<li><strong>Name:</strong> <?php echo $comment->name; ?></li>
				<li><strong>Comment:</strong> <?php echo $comment->comment; ?></li>
				<li>
					<p>
						<?php echo Html::anchor('comments/edit/'.$comment->id, 'Edit') ?> |
						<?php echo Html::anchor('comments/delete/'.$comment->id, 'Delete', array('onclick'=>"return confirm('Are you sure?')")); ?>
					</p>
				</li>
			</ul>
		</li>
		<?php endforeach; ?>
	</ul>

<p><?php echo Html::anchor('comments/create/'.$message->id, 'Add new Comment') ?></p>
<?php echo Html::anchor('messages/edit/'.$message->id, 'Edit'); ?> |
<?php echo Html::anchor('messages', 'Back'); ?>