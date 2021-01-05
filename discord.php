<html>
	<head>
		<title>Discord - TangoWorldWide</title>
		<link rel="stylesheet" href="assets/discord.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
	</head>
	<?php 
		$discord = file_get_contents("https://discord.com/api/guilds/370338751437733898/widget.json");
		$data = json_decode($discord, true);
	?>
	<div class="discord-header">
		<div class="discord-logo">
			<img src="https://discord.com/assets/192cb9459cbc0f9e73e2591b700f1857.svg" />
		</div>
		<div class="discord-count">
			<p><span class="discord-members"><?php echo $data["presence_count"] ?></span>  <i>Users Online</i></p>
		</div>
		<div class="discord-connect">
			<div class="join-button">
				<button onclick="window.open('https://discord.gg/tango', '_blank'); return false;" type="button">Join our Discord</button> 
			</div>
		</div>
	</div>
</html>