<?php 
defined('_JEXEC') or die("Access denied on helper");
	class modXaexiaMail
	{
		public static function saveData($email, $name, $message, $params)
		{
			$db = JFactory::getDBO();
			$query = "INSERT INTO `#__mod_xaexiaMail` (`email`, `name`, `message`)VALUES('$email', '$name', '$message')";
			$db->setQuery($query);
			if($db->query()){
				self::sendNotification($name, $email, $message, $params);
				return true;
			} 
			else
			{
				return false;
			}
		}	
		
		public static function sendNotification($name, $email, $message, $params)
		{
			$mailer =JFactory::getMailer();
			$config = JFactory::getConfig();
			$sender = array($params->get('sender_email'), $params->get('sender_name'));
			$mailer->setSender($sender);
			$mailer->addRecipient($params->get('reciever_email'));
			$mailer->setSubject('New contact form submited');
			$body  ='<h3>A new user contacted your will the foloowing infomation</h3>';
			$body .="<b>Name:</b> {$name}<br/>";
			$body .="<b>Email:</b> {$email}<br/>";
			$body .="<b>Message:</b> {$message}<br/>"; 
			$mailer->setBody($body);
			$mailer->isHTML();
			$mailer->send();
		}

        public static function getDesignInfo($params){
			$info = array($params->get('Text_header'), $params->get('header_color'), $params->get('button_color'));
			return $info;
		}		
		
	}
?>