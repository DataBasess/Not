<?php echo validation_errors(); ?>

<?php echo form_open('st_store/edit/'.$st_store['id']); ?>

	<div>Name : <input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $st_store['name']); ?>" /></div>
	<div>Price : <input type="text" name="price" value="<?php echo ($this->input->post('price') ? $this->input->post('price') : $st_store['price']); ?>" /></div>
	<div>Status : <input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $st_store['status']); ?>" /></div>
	<div>Description : <textarea name="description"><?php echo ($this->input->post('description') ? $this->input->post('description') : $st_store['description']); ?></textarea></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>