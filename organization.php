<?php
        $page_title="Organization Committee";
        include("include/header.php");
?>

<h2 class="hcls">Organization Committee</h2>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">

	<li data-role="list-divider">General Chairs</li>
	<?php
		add_listitem("Arjuna Sathiaseelan", "University of Cambridge, UK", "http://www.cl.cam.ac.uk/~as2330/");
	?>

	<li data-role="list-divider">TPC Chairs</li>
	<?php
		add_listitem("", "", "");
	?>
	
	<li data-role="list-divider">Local Arrangements Chairs</li>
	<?php
		add_listitem("", "", "");
	?>
		
	<li data-role="list-divider">Registration Chair and Treasurer</li>
	<?php
		add_listitem("", "", "");
	?>
	
	<li data-role="list-divider">Workshops Chairs</li>
	<?php
		add_listitem("", "", "");
	?>
	
	<li data-role="list-divider">Poster and Demo Chairs</li>
	<?php
		add_listitem("", "", "");
	?>
	
	<li data-role="list-divider">Publication Chair</li>
	<?php
		add_listitem("", "", "");
	?>
	
	<li data-role="list-divider">Publicity Chair</li>
	<?php
		add_listitem("", "", "");
	?>
	
	<li data-role="list-divider">Travel Grant Chairs</li>
	<?php
		add_listitem("", "", "");
	?>
	
	<li data-role="list-divider">Web Chair</li>
	<?php
		add_listitem("", "", "");
	?>
	
	<li data-role="list-divider">Conference Coordinator</li>
	<?php
		add_listitem("", "", "");
	?>
	
</ul>

<?php
    include ("include/footer.php");
?>