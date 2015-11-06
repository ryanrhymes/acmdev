<?php
        $page_title="Conference Program";
        include("include/header.php");
?>


<h2 class="hcls">GAIA Workshop Program</h2>

<!-- 
<div id="prog_ctrl" data-role="navbar">
	<ul>
		<li><a href="#">Monday</a></li>
		<li><a href="#">Tuesday</a></li>
		<li><a href="#">Wednesday</a></li>
		<li><a href="#" class="ui-btn-active ui-state-persist">All</a></li>
	</ul>
</div>
-->


	<ul id="proglist" data-role="listview" data-filter="true" data-inset="true" data-theme="d" data-dividertheme="a">

		<li class="heading" data-role="list-divider" style="display:block"><h3>Monday, November 30, 2015</h3></li>
		
		<?php tprog_add_session("08:30", "Coffee Break", ""); ?>
		
		<?php tprog_add_session("08:45-09:00", "Chairs Welcome", "", "a"); ?>
		
		<?php tprog_add_session("09:00-10:30", "Session 1", "", "a"); ?>
		
		<?php
			tprog_add_item("Rural Community Wireless Mesh Deployment Experiences from Thailand",
			"",
			"Adisorn Lertsinsrubtavee (University of Cambridge) ",
			"",
			"",
			"");
		?>
		
		<?php
			tprog_add_item("Next generation satellite broadband for developing regions",
			"",
			"Trevor Barker (Avanti Consulting)",
			"",
			"",
			"");
		?>
		
		<?php
			tprog_add_item("Does the Internet deserve everybody?",
			"",
			"Yehia El Khatib (Lancaster University)",
			"",
			"",
			"");
		?>
		
		<?php tprog_add_session("10:30-11:00", "Coffee Break", ""); ?>
		
		<?php tprog_add_session("11:00-12:30", "Session 2", "", "a"); ?>
		
		
		<?php
			tprog_add_item("The capability to trust strangers online: opportunities and barriers",
			"",
			"Richard Dent (University of Cambridge)",
			"",
			"",
			"");
		?>
		
		<?php
			tprog_add_item("Internet Censorship in Developing Countries: A Case Study of Pakistan",
			"",
			"Sheharbano Khattak (University of Cambridge)",
			"",
			"",
			"");
		?>
		
		<?php
			tprog_add_item("TV white space in South Africa - what we've learnt and where we're heading",
			"",
			"David Johnson (CSIR)",
			"",
			"",
			"");
		?>
		
		<?php tprog_add_session("12:30-14:00", "Lunch Break", ""); ?>
		
		<?php tprog_add_session("14:00-15:30", "Session 3", "", "a"); ?>
		
		<?php
			tprog_add_item("Zebra RFO: Open and Regionalised Spectrum Repositories for the developing world?",
			"",
			"Andres Arcia Moret (University of Cambridge)",
			"",
			"",
			"");
		?>
		
		<?php
			tprog_add_item("Localizing communication for an affordable Internet - demo of recent EU activities",
			"",
			"Dirk Trossen (InterDigital)",
			"",
			"",
			"");
		?>
		
		<?php
			tprog_add_item("Intelligent service caching for developing regions",
			"",
			"Liang Wang (University of Cambridge)",
			"",
			"",
			"");
		?>
		
		<?php tprog_add_session("15:30-16:00", "Coffee Break", ""); ?>
		
		<?php tprog_add_session("16:00-17:30", "Session: Socio-economics in delivering the \"Global Internet Access for All\" (GAIA) vision (lessons, obstacles, models) (Chair: Leandro Navarro (UPC))", "", "a"); ?>
		
		<?php tprog_add_session("18:00-", "The Great British Pub Experience (Chair: Gareth Tyson)", ""); ?>
		
<!--
		<li class="heading" data-role="list-divider" style="display:block"><h3>Tuesday, December 1, 2015</h3></li>
		<li class="heading" data-role="list-divider" style="display:block"><h3>Wednesday, December 2, 2015</h3></li>
-->

	</ul>


<p>
Please email the <a class="lnkcls" href="mailto:arjuna.sathiaseelan@cl.cam.ac.uk">general chairs</a> with any questions you may have.
</p>



<?php
    include ("include/footer.php");
?>
