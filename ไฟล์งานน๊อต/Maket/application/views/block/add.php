<?php echo validation_errors(); ?>

<?php echo form_open('st_store/add'); ?>

	<div>Name : <input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" /></div>
	<div>Price : <input type="text" name="price" value="<?php echo $this->input->post('price'); ?>" /></div>
	<div>Status : <input type="text" name="status" value="<?php echo $this->input->post('status'); ?>" /></div>
	<div>Description : <textarea name="description"><?php echo $this->input->post('description'); ?></textarea></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>