<h2>Welcome, 
<?php 
echo $this->session->userdata('username');
?>
    <p> Sweet, you uploaded the picture, 
<?php echo $uploaded_details['upload_data']['file_name']; ?>
    .</p>
    
    
<img src="
<?php echo base_url('uploads/'.$uploaded_details['upload_data']['file_name']); ?>
" width="100%"/>
