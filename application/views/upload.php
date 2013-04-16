<h1>Upload Your File Here</h1>


<?php

echo validation_errors();

echo form_open('upload');

echo form_submit('submit', 'Upload');
echo form_close();
echo form_fieldset_close(); 
