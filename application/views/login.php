<?php
/*
 * The first web page is a login page. Present a form to the user with a User ID field, Password field, 
and Login button. The placeholder text should be “User ID” in the User ID field and “Password” in the 
Password field. A person eavesdropping on the user’s screen should not be able to tell what 
password characters were typed. Clicking the Login button should send a login request to the server. 
If the login succeeds, the second web page described below should be displayed and replace the login page.  
If the login fails, an inline error should be displayed and the login page should NOT be reloaded. 
You can use a hard coded password on the server to validate the login against. 
A successful login also generates a new CodeIgniter user session where the User ID 
value is stored.
 */
?>

<h1>Do your thing</h1>
<?php 
//display errors
echo validation_errors();

//setting up to alter label output
$username = array(
    'name' => 'username',
    'id'    => 'username'
);

$password = array(
    'name' => 'password',
    'id'    => 'password'
);


echo form_open('login');
echo form_fieldset('Login');
echo form_label("Username:",'username');
echo form_input($username);
echo form_label('Password:','password');
echo form_password($password);
echo form_submit('submit', 'Login');
//creating a hidden form item to submit user's ip address
echo form_hidden('ipaddresss', $_SERVER['REMOTE_ADDR']);
echo form_close();
echo form_fieldset_close(); 


echo '<h2>Very Secure Credentials</h2>';
echo '<p>username: dejami</p>';
echo '<p>password: 123456</p>';