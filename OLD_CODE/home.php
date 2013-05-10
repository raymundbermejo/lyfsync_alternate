<?php /* Default Homepage */ 
error_reporting (E_ALL ^ E_NOTICE);
session_start();
if (isset($_POST['logoutbtn'])) {
	session_destroy();
	header('Location:home.php');
}
?>

<html>
<head>
<title>LyfSync - Discover Events that you love!</title>
<link rel = "stylesheet" type = "css" href = "./_css/style.css" /> 
<script type = 'text/javascript' src = '_js/jquery-1.9.1.min.js'></script>
<script type = 'text/javascript' src = '_js/homeJS.js'></script>
</head>
<body>
<center>

<?php include 'header.php'; ?>
<table style = 'height: 90px'>
	<tr>
		<td style = 'padding-bottom: 13px'>
			<?php include "search_filter_dropdown_menu.php"; ?>
		</td>
		<td>
			<form action = './Home.php' method = 'get' style = 'margin-top: 2px'>
				<input class = 'home_search' type = 'text' name = 'k' size = '50' value = '<?php echo $_GET['k']; ?>' placeholder = 'Search for Events in Your Area'>
				<button class = 'search' type='submit' value='Search' / style = 'height: 30px'>
					<img src = '/LyfSync/_img/Sample_Search_Icon_1.png' valign = 'middle' style = 'height: 20px'>
				</button>
			</form>
		</td>
	</tr>
	</table>
<div class = 'featured_events' align = 'center' valign = 'top'>
	<div id = "container">
		<div class = "grid">
			<strong>Color Manila Nite Run</strong><br>
			<text class = 'description'>February 2013 @ Bonifacio Global City.</text><br>
			<div class = 'meta'>By: Color Manila</div>
			<div class = "imgholder" align = 'center'>
				<img src = './_img/SampleEventPosters/CM.jpg'>
			</div>
		</div>
		<div class = "grid">
			<strong>Summer Solstice 2013</strong><br>
			<text class = 'description'>April 27, 2013 from 4PM to 4AM @ The MOA Concert Grounds.</text><br>
			<div class = "meta">By: Closeup</div>
			<div class = "imgholder" align = 'center'>
				<img src = './_img/SampleEventPosters/SS.jpg'>
			</div>
		</div>
		<div class = "grid">
			<strong>Life in Color REBIRTH</strong><br>
			<text class = 'description'>World's largest paint party.</text><br>
			<div class = "meta">By: [Event Organizer]</div>
			<div class = "imgholder" align = 'center'>
				<img src = './_img/SampleEventPosters/RB.png'>
			</div>
		</div>
		<div class = "grid">
			<strong>Be A Concessionaire</strong><br>
			<text class = 'description'>During OrSem Night 2013. Bidding is on April 25, 2013 at SOM 111 4:30-630PM.</text><br>
			<div class = "meta">By: SOM</div>
			<div class = "imgholder" align = 'center'>
				<img src = './_img/SampleEventPosters/BAC.jpg'>
			</div>
		</div>
		<div class = "grid">
			<strong>Homegrown 2013</strong><br>
			<text class = 'description'>The up music circle album launch.</text><br>
			<div class = "meta">By: UP Music Circle</div>
			<div class = "imgholder" align = 'center'>
				<img src = './_img/SampleEventPosters/HG.png'>
			</div>
		</div>
		<div class = "grid">
			<strong>Summer Luau</strong><br>
			<text class = 'description'>[Description]</text><br>
			<div class = "meta">By: [Event Organizer]</div>
			<div class = "imgholder" align = 'center'>
				<img src = './_img/SampleEventPosters/LUAU.png'>
			</div>
		</div>
		<div class = "grid">
			<strong>Solstice</strong><br>
			<text class = 'description'>The hottest bazaar in the Metro.</text><br>
			<div class = "meta">By: [Event Organizer]</div>
			<div class = "imgholder" align = 'center'>
				<img src = './_img/SampleEventPosters/SOL.png'>
			</div>
		</div>
		<div class = "grid">
			<strong>RQ</strong><br>
			<text class = 'description'>Hop on the beat of hiphop royalty at Ayala Malls.</text><br>
			<div class = "meta">By: [Event Organizer]</div>
			<div class = "imgholder" align = 'center'>
				<img src = './_img/SampleEventPosters/RQ.png'>
			</div>
		</div>
		<div class = "grid">
			<strong>COA EXTEAM RECRUITMENT</strong><br>
			<text class = 'description'>Training and development. See poster for details.</text><br>
			<div class = "meta">By: COA</div>
			<div class = "imgholder" align = 'center'>
				<img src = './_img/SampleEventPosters/COA.jpg'>
			</div>
		</div>
		<div class = "grid">
			<strong>CADS JAZZ Summer Training Program</strong><br>
			<text class = 'description'>Training begins on April 22, 2013, every MWF from 3pm to 5PM.</text><br>
			<div class = "meta">By: CADS</div>
			<div class = "imgholder" align = 'center'>
				<img src = './_img/SampleEventPosters/CADS.jpg'>
			</div>
		</div>
		<div class = "grid">
			<strong>Be Part of the ADvengers</strong><br>
			<text class = 'description'>Apply for Project Head for CoSA 2013-2014! For more details contact: 09175687898</text><br>
			<div class = "meta">By: CoSA</div>
			<div class = "imgholder" align = 'center'>
				<img src = './_img/SampleEventPosters/AD.jpg'>
			</div>
		</div>
		<div class = "grid">
			<strong>ORSEM HOST HUNT AUDITIONS</strong><br>
			<text class = 'description'>April 25 & 26. 4:30-8:00PM. Venue: TBA.</text><br>
			<div class = "meta">By: [Event Organizer]</div>
			<div class = "imgholder" align = 'center'>
				<img src = './_img/SampleEventPosters/HH.jpg'>
			</div>
		</div>
		<div class = "grid">
			<strong>EVENT TITLE</strong><br>
			<text class = 'description'>[Description]</text><br>
			<div class = "meta">By: [Event Organizer]</div>
			<div class = "imgholder" align = 'center'>
				<img src = './_img/SampleEventPosters/L.png'>
			</div>
		</div>
		<div class = "grid">
			<strong>EVENT TITLE</strong><br>
			<text class = 'description'>[Description]</text><br>
			<div class = "meta">By: [Event Organizer]</div>
			<div class = "imgholder" align = 'center'>
				<img src = './_img/SampleEventPosters/L.png'>
			</div>
		</div>
		<div class = "grid">
			<strong>EVENT TITLE</strong><br>
			<text class = 'description'>[Description]</text><br>
			<div class = "meta">By: [Event Organizer]</div>
			<div class = "imgholder" align = 'center'>
				<img src = './_img/SampleEventPosters/L.png'>
			</div>
		</div>
		<div class = "grid">
			<strong>EVENT TITLE</strong><br>
			<text class = 'description'>[Description]</text><br>
			<div class = "meta">By: [Event Organizer]</div>
			<div class = "imgholder" align = 'center'>
				<img src = './_img/SampleEventPosters/L.png'>
			</div>
		</div>
	</div>
</div>
	
<?php include "footer.php";?>

 </center>
 </body>
 </html>
