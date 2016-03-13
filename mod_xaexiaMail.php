<?php 
  defined ('_JEXEC') or die("Access denied");
  require_once dirname(__FILE__).'/helper.php';
  $info = modXaexiaMail::getDesignInfo($params);
  if(isset($_POST['sendMessage'])){
	  $jinput   = JFactory::getApplication()->input;
	  $name 	= $jinput->get('name', 'STRING');
	  $email    = $jinput->get('email', '', 'RAW');
	  $message  = $jinput->get('message', '','RAW');
	  if(modXaexiaMail::saveData($email, $name, $message, $params)){
		 echo "<div class='alert alert-success alert-dismissable'>
		   <button type='button' class='close' data-dismiss='alert' aria-hidden='true'> &times;</button>
		   Success! Your message was successfully sent.
		</div>";
		}
  }
  else
  {
  	   require(JModuleHelper::getLayoutPath('mod_xaexiaMail'));
  }
?>