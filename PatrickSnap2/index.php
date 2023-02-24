<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="About clean potrick house.">
	<link rel="icon" type="icon" href="icon/icon.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Potrick Snap 2 by Combo Bomb Games</title>
</head>
<body>
	<div id="container">
		<div id="image">
			<img src="images/MK8Xys.png" class="rnidg_img">
		</div>
		<div id="left_sec">
			<p>Story</p>
			<p>You Finally Escape From Potrick but Police man want To Talk With YOU</p><br>
			<p>HOW TO PLAY</p><br>
			<p>&nbsp;&nbsp;W</p>
			<p>A S D: Move</p>
			<p>F: Flashlight</p>
			<p>V: Lighter </p>
			<p>Left Shift: Run</p>
			<p>E: Interact And Talk and take</p>
			<p>NOTE: you can interact with a lot of things just explore AND JUMPSCARES AND ULTRA GRAPHICS RECOMENDED</p>
			<p>This game have jumpscares and very short.</p><br>
			<p>THERE IS NO BUGS WHEN TESTING THE GAME BUT IF THERE BUGS TELL IN THE COMMENTS</p><br>
			<p>WARNING<br>This game have jumpscares and not Short AND TWO ENDINGS</p>
			<h1>Purchase</h1>
			<div id="button_container">
				<a href="https://hossa-and-hazem.itch.io/potrick-snap-2" target="_blank"><button class="button_buy">Buy Now</button></a>
				<h2>$2.00 USD</h2>
				<h3>or more</h3>
			</div><br>
			<p>In order to download this game you must purchase it at or above the minimum price of $2 USD. You will get access to the following files:</p><br>
			<div id="windows1_div">
				<p style="float: left;">PotrickSnap2.rar</p>
				<span id="windows_logo"><b>1,019 MB</b><i class="gg-windows"></i></span>
			</div>
			<h1>Comments</h1>
			<div id="comments_div">
				<form action="index.php" method="POST">
					<input type="text" name="content" class="input_text" placeholder="Write your comment...">
					<input type="submit" class="input_submit" value="Post comment" name="submit">
				</form>
				<?php
					if (isset($_POST['content']) && $_POST['content'] !=""){
						$content = $_POST['content'];
						$base = mysqli_connect("localhost", "root", "", "patrick");
						$que1 = "INSERT INTO data VALUES('1', '$content')";
						mysqli_query($base, $que1);
						mysqli_close($base);
					}
				?>
				<br>
				<div id="comments_div2">
					<?php
						$base = mysqli_connect("localhost", "root", "", "patrick");
						$que2 = "SELECT * FROM data";
						$result = mysqli_query($base, $que2);
						while($a = mysqli_fetch_array($result)){
							echo "<img src='images/frog.png'> `Your Nick`<br>".$a['content']."<br><br>";
						}
						mysqli_close($base);
					?>
				</div>
			</div>
		</div>
		<div id="right_sec">
			<video width="100%" height="200px" controls>
				<source src="video/trailer.mp4" type="video/mp4">
			</video>
			<p style="margin-top: 10px;">
				<img src="images/Yqu6qy.png" width="100%" height="200">
			</p>
			<p style="margin-top: 10px;">
				<img src="images/9N47Y3.png" width="100%" height="200">
			</p>
			<p style="margin-top: 10px;">
				<img src="images/MJg5lB.png" width="100%" height="200">
			</p>
			<p style="margin-top: 10px;">
				<img src="images/LjNSPR.png" width="100%" height="200">
			</p>
			<p style="margin-top: 10px;">
				<img src="images/sczB5R.png" width="100%" height="200">
			</p>
			<p style="margin-top: 10px;">
				<img src="images/LkOkRw.png" width="100%" height="200">
			</p>
			<p style="margin-top: 10px;">
				<img src="images/YmBSii.png" width="100%" height="200">
			</p>
			<p style="margin-top: 10px;">
				<img src="images/BKpVRN.png" width="100%" height="200">
			</p>
			<p style="margin-top: 10px;">
				<img src="images/2+8sCH.png" width="100%" height="200">
			</p>
		</div>
	</div>
</body>
</html>