<h1>Upload Your File Here</h1>

<h2>Welcome, 
<?php 
echo $this->session->userdata('username');
?>
</h2>

<?php

//hide the error div if it's not needed
if ($error != ''){
echo "<div class='alert alert-dejami'>";
echo $error; 
echo "</div>";
}

echo form_open_multipart('upload/do_upload');

echo form_label("Upload:",'upload');

echo "<input type='file' name='userfile' size='40'>";

echo form_submit('submit', 'Upload');
echo form_close();
echo form_fieldset_close(); 

?>


