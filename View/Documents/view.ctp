<div class="documents view">
<h2><?php  echo __('Document');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($document['Document']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Intervention'); ?></dt>
		<dd>
			<?php echo $this->Html->link($document['Intervention']['id'], array('controller' => 'interventions', 'action' => 'view', $document['Intervention']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Format'); ?></dt>
		<dd>
			<?php echo h($document['Document']['format']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link'); ?></dt>
		<dd>
			<?php echo h($document['Document']['link']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Document'), array('action' => 'edit', $document['Document']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Document'), array('action' => 'delete', $document['Document']['id']), null, __('Are you sure you want to delete # %s?', $document['Document']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Documents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interventions'), array('controller' => 'interventions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intervention'), array('controller' => 'interventions', 'action' => 'add')); ?> </li>
	</ul>
</div>
