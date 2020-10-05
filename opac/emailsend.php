<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  $content = 'Hello my friend';
  
  //Email information
  $admin_email = "rej2k2@yahoo.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Email message sent successfully!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>

 <form method="post">
  Email: <input name="email" type="text" /><br />
  Subject: <input name="subject" type="text" /><br />
  Message:<br />
  <textarea name="comment" rows="15" cols="40"><?php echo $content?></textarea><br />
  <input type="submit" value="Submit" />
  </form>
  
<?php
  }
?>