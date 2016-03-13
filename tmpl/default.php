<?php
    defined('_JEXEC') or die("Access denied");
    $doc = JFactory::getDocument();
	$doc->addStyleSheet(JURI::root().'/modules/mod_xaexiamail/css/mod_Xcontact.css');
	$doc->addScript(JURI::root().'/modules/mod_xaexiamail/js/jquery-2.1.1.min.js');
	$doc->addScript(JURI::root().'/modules/mod_xaexiamail/js/mod_Xcontact.js');
?>		
<div id="sugBox">
	<div id="form-header" style="background:<?php echo $info[1]; ?> !important">
		<h4><?php echo $info[0]; ?></h4>
	</div>
	<div id="form-body">
	<div class="free-20"></div>
		<div id="errorBox"></div>
		<form method="post" id="formContact">
			<label>Full name</label>
				<input name="name" type="text" class="form-control"  id="name" placeholder="Enter your name"/><br/>
			<label>Email Address</label>
				<input name="email" type="email" class="form-control" id="email" placeholder="For example : xaexia@example.com"/><br/>
			<label>Your messege</label>
				<textarea class="form-control" id="message" name="message"  placeholder="Type your message here" rows="5"></textarea><br/>
				<input name="sendMessage" type="submit" id="sendMesage"class="btn btn-info" value="Send message" style="background:<?php echo $info[2]; ?> !important"/>
				<input type="reset" class="btn btn-default"  value="Reset form" />
		</form>
		<br/>
	</div>
</div>
<div class="free-20"></div>


