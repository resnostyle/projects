<h1>Upload Your File Here</h1>

<h2>Welcome, 
<?php 
echo $this->session->userdata('username');
?>
</h2>
<div class="alert alert-dejami">
<?php echo $error;  ?>
</div>

<?php
echo form_open_multipart('upload/do_upload');


echo form_label("Upload:",'upload');

echo "<input type='file' name='userfile' size='40'>";

echo form_submit('submit', 'Upload');
echo form_close();
echo form_fieldset_close(); 

?>


