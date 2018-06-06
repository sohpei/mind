<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>The Mind Labyrinth</title>	

	<link href="https://fonts.googleapis.com/css?family=News+Cycle:700|Orbitron:400,700|Indie+Flower|" rel="stylesheet">
	<link rel="stylesheet" href="animate.css">
	
	<!-- styles - internal (not linked) -->
	<style>
		body {
			padding: 20px 20px 20px 20px;
			background-color: #f9f8f8; 
			font-family: 'News Cycle', sans-serif;
			background-size: cover;
			background-attachment: cover;
			font-size: 1.2rem;
		}
		p {
			text-align: center;
			padding-left: 200px;
			padding-right: 200px;
			font-size: 30px;
		}
		h1 {
			font-family: 'Orbitron', sans-serif;
			color: #000;
			text-align: center;
			font-size: 100px;
		}
		h2 {
			font-family: 'Orbitron', sans-serif;
			font-weight: 700;
			font-size: 30px;
		}
		a:hover {
			color: #000;
		}
		a:link {
			font-family: 'Orbitron', sans-serif;
			text-decoration: none;
			font-weight: 400; 
			color: #858585;
		}
		a:visited{
			color: #858585;
		}

		#container {
			position: relative;
			margin-left: auto;
			margin-right: auto;
			width: 80%; 
			padding: 2%; 
			margin-top: 10px;
			border-radius: 0.5em;
			text-align: center;
			background-image: url('images/puttingittogetherBG.jpg');
		}

		#grey-text {
			color: #858585;
		}

		#choicecontainer {
			background-color: #fff;
			padding: 10px;
			margin-right: 10px;
			margin-left: 10px;
			margin-top: 10px;
			border-radius: 10px;
			opacity: 0.8;
		}
		input[type=textarea] {
		    background-color: #858585;
		    color: white;
		    width: 1000px;
		    height: 300px;
		    font-family: 'Indie Flower', cursive;
		    font-size: 20px;
		    text-align: center;
		    resize: both;
		}
		input[type=textarea]:focus {
		    border: 3px solid #555;
		}

	</style>

</head>
<body> 

<div id='container'>

<?
	//gets part
	$part = $_GET['part'];

	if ($part == ''){
		//beginning stage
		echo "<img src='images/mindful.png' style='display: block;margin-left: auto;margin-right: auto;' class='animated zoomIn'}  width='300px'></a><h1>the <span style='color: #858585'>mind</span> labyrinth</h1><p>Conflict is inevitable between you and the people around you, but 
		sometimes the first step in coming to terms with the people around us is coming to terms with ourselves. The mind labyrinth is a safe place to seek self-help, and your answers will not be shared.</p><br><div id='choicecontainer'><a href='mindlabyrinth.php?part=enter'>Enter the labyrinth</a></div></div>";
	} 
	//first enter of the labryinth
	else if ($part == 'enter') {
		echo "<h2>the <span style='color: #858585'>mind</span> labyrinth</h2><img src='images/breathing.gif' style='display: block;margin-left: auto;margin-right: auto;' class='animated fadeIn'}  width='150px'><p class='animated fadeIn'>Take some time to breathe in and out with this diagram at least three times...</p><div id='choicecontainer'><a href='mindlabyrinth.php?part=enter2'>Continue</a></div></div>";

	} 
	else if ($part == 'enter2') {
		echo "<h2>the <span style='color: #858585'>mind</span> labyrinth</h2><p class='animated fadeIn'>Breathe in...</p><div id='choicecontainer'><a href='mindlabyrinth.php?part=heythere'>Continue</a></div></div>";

	} 
	//response
	else if ($part == 'heythere') {
		echo "<h2>the <span style='color: #858585'>mind</span> labyrinth</h2><p class='animated fadeIn'>Breathe out...</p><div id='choicecontainer'><a href='mindlabyrinth.php?part=yeahyou'>Continue</a></div></div>";
	}
	//response
	else if ($part == 'yeahyou') {
		echo "<h2>the <span style='color: #858585'>mind</span> labyrinth</h2><p class='animated fadeIn'>No matter what you've gone through in the <span style='color: #858585'>past</span>, everything's going to be okay in the <span style='color: #858585'>future</span>, and we're 
		here to help you sort it through <span style='color: #858585'>right now</span>.</p><div id='choicecontainer'><a href='mindlabyrinth.php?part=rightnow'>Continue</a></div></div>";
	}
	//response
	else if ($part == 'rightnow') {
		echo "<h2>the <span style='color: #858585'>mind</span> labyrinth</h2><p class='animated fadeIn'>Describe your <span style='color: #858585'>personal situation...</span></p><form action='mindlabyrinth.php'><input class ='animated fadeIn' type='textarea' name='firstname' placeholder='Vent off as much or as little as you need to.'></input></form>
		<div id='choicecontainer'><a href='mindlabyrinth.php?part=howdoyoufeel'>Submit</a></div></div>";
	}
	//response to whow do you feel
	else if ($part =='howdoyoufeel') {
		echo "<h2>the <span style='color: #858585'>mind</span> labyrinth</h2><p class='animated fadeIn'>Which of these best describe how you feel?</p>
		<form name='howdoyoufeel' action='mindlabyrinth.php?part=whyareyou> 	<select name='feel'>
		<div id='choicecontainer'><a href='mindlabyrinth.php?part=feelings&feeling=angry'><option value='angry'>Anger</option></a></div>
		<div id='choicecontainer'><a href='mindlabyrinth.php?part=feelings&feeling=confused'><option value='confused'>Confusion</option></a></div>
		<div id='choicecontainer'><a href='mindlabyrinth.php?part=feelings&feeling=agitated'><option value='agitated'>Agitation</option></a></div>
		<div id='choicecontainer'><a href='mindlabyrinth.php?part=feelings&feeling=regretful'><option value='regretful'>Regret</option></a></div>
		<div id='choicecontainer'><a href='mindlabyrinth.php?part=feelings&feeling=unsettled'><option value='unsettled'>Settling In</option></a></div>
		<div id='choicecontainer'><a href='mindlabyrinth.php?part=feelings&feeling=unhappy'><option value='unhappy'>Sadness</option></a></div>
	</div>";
	}
	//yep
	else if ($part == 'feelings') {
		$feeling = $_GET['feeling'];
		echo "<h2>the <span style='color: #858585'>mind</span> labyrinth</h2><p class='animated fadeIn'>Why are you " . $feeling . "?";
		echo "<form action='mindlabyrinth.php'><input class ='animated fadeIn' type='textarea' name='firstname' placeholder='Vent off as much or as little as you need to.'></input></form><div id='choicecontainer'><a href='mindlabyrinth.php?part=faultquestion'>Submit</a>";
	}
	//submits feelings
	else if ($part == 'faultquestion') {
		echo "<h2>the <span style='color: #858585'>mind</span> labyrinth</h2><p class='animated fadeIn'>Do you feel that the situation is your fault?";
		echo "<div id='choicecontainer'><a href='mindlabyrinth.php?part=yesyourfault'>Yes</a></div><div id='choicecontainer'><a href='mindlabyrinth.php?part=notyourfault'>No</div>";
	}
	else if ($part == 'yesyourfault') {
		echo "<h2>the <span style='color: #858585'>mind</span> labyrinth</h2><p class='animated fadeIn'>What did you do to trigger the situation?";
		echo "<form action='mindlabyrinth.php'><input class ='animated fadeIn' type='textarea' name='firstname' placeholder='Vent off as much or as little as you need to.'></input></form><div id='choicecontainer'><a href='mindlabyrinth.php?part=yesyourfault2'>Submit</a>";
	}
	else if ($part == 'yesyourfault2') {
		echo "<h2>the <span style='color: #858585'>mind</span> labyrinth</h2><p class='animated fadeIn'>If you could travel back in time, what would you do differently?";
		echo "<form action='mindlabyrinth.php'><input class ='animated fadeIn' type='textarea' name='firstname' placeholder='Vent off as much or as little as you need to.'></input></form><div id='choicecontainer'><a href='mindlabyrinth.php?part=yesyourfault3'>Submit</a>";
	}
	else if ($part == 'yesyourfault3') {
		echo "<h2>the <span style='color: #858585'>mind</span> labyrinth</h2><p class='animated fadeIn'>Don’t panic. Although you are partially at fault, you realize the wrong of your actions, which is the first step to mediation and self-resolution. When the time is right, resolve the conflict by apologizing or confronting whomever is also involved. After that, you will come to terms with yourself. Do you feel the need to apologize?";
		echo "<div id='choicecontainer'><a href='mindlabyrinth.php?part=craftapology'>Yes</a></div><div id='choicecontainer'><a href='mindlabyrinth.php?part=notyourfault'>No</a></div>";
	}
	else if ($part == 'craftapology') {
		echo "<h2>the <span style='color: #858585'>mind</span> labyrinth</h2><p class='animated fadeIn'>Plan out your apology here, or at least part of how you plan on talking to the other party.";
		echo "<form action='mindlabyrinth.php'><input class ='animated fadeIn' type='textarea' name='firstname' placeholder='Vent off as much or as little as you need to.'></input></form><div id='choicecontainer'><a href='mindlabyrinth.php?part=yesconfront2'>Submit</a>";
	}
	else if ($part == 'notyourfault') {
		echo "<h2>the <span style='color: #858585'>mind</span> labyrinth</h2><p class='animated fadeIn'>Who else do you think is at fault? </p>";
		echo "<form action='mindlabyrinth.php'><input class ='animated fadeIn' type='textarea' name='firstname' placeholder='Vent off as much or as little as you need to.'></input></form><div id='choicecontainer'><a href='mindlabyrinth.php?part=peoplefeelings'>Submit</a>";
	}
	else if ($part == 'peoplefeelings') {
		echo "<h2>the <span style='color: #858585'>mind</span> labyrinth</h2><p class='animated fadeIn'>Do you have the courage to confront them?</p>";
		echo "<div id='choicecontainer'><a href='mindlabyrinth.php?part=yesconfront'>Yes</a></div><div id='choicecontainer'><a href='mindlabyrinth.php?part=noconfront'>No</a></div>";
	}
	else if ($part == 'yesconfront') {
		echo "<h2>the <span style='color: #858585'>mind</span> labyrinth</h2><p class='animated fadeIn'>Plan out your confrontation. Remember to keep it civil and consider things simple- imagine how they will react and feel in your confrontation.</p>";
		echo "<form action='mindlabyrinth.php'><input class ='animated fadeIn' type='textarea' name='firstname' placeholder='Vent off as much or as little as you need to.'></input></form><div id='choicecontainer'><a href='mindlabyrinth.php?part=yesconfront2'>Submit</a></div>";
	}
	else if ($part == 'yesconfront2') {
		echo "<h2>the <span style='color: #858585'>mind</span> labyrinth</h2><br><img src='images/mindfulfinal.png' style='display: block;margin-left: auto;margin-right: auto;' class='animated zoomIn'}  width='300px'><br><p class='animated fadeIn'>Your strength and bravery is an admirable trait. Confirm that confronting them is the right choice. If you have made up your mind, things are looking bright. You have come to terms with yourself! </p>";
		echo "<p><span style='color: #92c1c6', cursive;>Whenever you have another external, internal, or combination thereof conflict in the future, the mind labyrinth will be here for you to help you navigate and reaffirm tough decisions you have to make. A world where everyone uses the mind labyrinth like you do to solve conflicts would be a better world for all.</span></p><br><div id='choicecontainer'><a href='mindlabyrinth.php'>Resolve another conflict?</a></div>";
	}
	else if ($part == 'noconfront') {
			echo "<h2>the <span style='color: #858585'>mind</span> labyrinth</h2><p class='animated fadeIn'>Evaluate what would happen if you DID confront them.</p>";
			echo "<form action='mindlabyrinth.php'><input class ='animated fadeIn' type='textarea' name='firstname' placeholder='Vent off as much or as little as you need to.'></input></form><div id='choicecontainer'><a href='mindlabyrinth.php?part=noconfront2'>Submit</a></div>";
	}
	else if ($part == 'noconfront2') {
			echo "<h2>the <span style='color: #858585'>mind</span> labyrinth</h2><p class='animated fadeIn'>Evaluate what would happen if you DIDN'T confront them.</p>";
			echo "<form action='mindlabyrinth.php'><input class ='animated fadeIn' type='textarea' name='firstname' placeholder='Vent off as much or as little as you need to.'></input></form><div id='choicecontainer'><a href='mindlabyrinth.php?part=noconfront3'>Submit</a></div>";
	}
	else if ($part == 'noconfront3') {
		echo "<h2>the <span style='color: #858585'>mind</span> labyrinth</h2><p class='animated fadeIn'>Do you still want to abstain from confronting?";
		echo "<div id='choicecontainer'><a href='mindlabyrinth.php?part=noconfrontfinal'>Yes</a></div><div id='choicecontainer'><a href='mindlabyrinth.php?part=peoplefeelings'>No</a></div>";
	}
	else if ($part == 'noconfrontfinal') {
		echo "<h2>the <span style='color: #858585'>mind</span> labyrinth</h2><p class='animated fadeIn'>You are most likely in a conflict with yourself, as well as other people. Take a deep breath. When you are in a conflict with yourself, this means that one of you thinks differently from another part of you. Try to split the two conflicting sides of you into two distinct parts.";
		echo "<div id='choicecontainer'><a href='mindlabyrinth.php?part=internalconflict'>Continue</a></div>";
	}
	else if ($part == 'internalconflict') {
		echo "<h2>What does the first part of you think you should do?";
		echo "<form action='mindlabyrinth.php'><input class ='animated fadeIn' type='textarea' name='firstname' placeholder='Vent off as much or as little as you need to.'></input></form><div id='choicecontainer'><a href='mindlabyrinth.php?part=internalconflict2'>Submit</a></div>";
	}
	else if ($part == 'internalconflict2') {
		echo "<h2>What does the second part of you think you should do?";
		echo "<form action='mindlabyrinth.php'><input class ='animated fadeIn' type='textarea' name='firstname' placeholder='Vent off as much or as little as you need to.'></input></form><div id='choicecontainer'><a href='mindlabyrinth.php?part=internalconflict3'>Submit</a></div>";
	}
	else if ($part =='internalconflict3') {
		echo "<h2>the <span style='color: #858585'>mind</span> labyrinth</h2><p class='animated fadeIn'>Which of these most wants to let go of the past and move on in the long-term?</p>";
		echo "<div id='choicecontainer'><a href='mindlabyrinth.php?part=end'>The first</a></div><div id='choicecontainer'><a href='mindlabyrinth.php?part=end'>The second</a></div>";
	}
	else if ($part =='end') {
		echo "<h2>the <span style='color: #858585'>mind</span> labyrinth</h2><br><img src='images/mindfulfinal.png' style='display: block;margin-left: auto;margin-right: auto;' class='animated zoomIn'}  width='300px'><br><p class='animated fadeIn'>Congratulations, you now know what to do and have come to terms with yourself! At the end of the day, remember, any aftereffects are only temporary- this too will pass.</p><br>";
		echo "<p><span style='color: #92c1c6', cursive;>Whenever you have another external, internal, or combination thereof conflict in the future, the mind labyrinth will be here for you to help you navigate and reaffirm tough decisions you have to make. A world where everyone uses the mind labyrinth like you do to solve conflicts would be a better world for all.</span></p><br><div id='choicecontainer'><a href='mindlabyrinth.php'>Resolve another conflict?</a></div>";
	}
?>

</div>
	
</body>
</html>