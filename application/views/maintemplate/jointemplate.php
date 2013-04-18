<?php
/*
 * Using CI inheritance to reduce repeating of layouts
 */

//loading header from maintemplate file
$this->load->view('maintemplate/header');

//loading in main content element
//echo "<div class='container'>";
echo "<!--Pull in other template pages here -->";
$this->load->view($main_content);
echo "<!--Pull in other template pages here -->";
//echo "</div> <!-- /container -->";


//loading the footer 
$this->load->view('maintemplate/footer');
