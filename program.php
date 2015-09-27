<?php
        $page_title="Conference Program";
        include("include/header.php");
?>


<h2 class="hcls">Conference Program</h2>
<a href="#archive_div" class="button" data-rel="popup" data-role="button">Download Proceedings</a>
<a href="http://www.meetecho.com/sigcomm2012" data-role="button" class="button">Live Stream</a>

<div id="prog_ctrl" data-role="navbar">
	<ul>
		<li><a href="#">Monday</a></li>
		<li><a href="#">Tuesday</a></li>
		<li><a href="#">Wednesday</a></li>
		<li><a href="#" class="ui-btn-active ui-state-persist">All</a></li>
	</ul>
</div>


	<ul id="proglist" data-role="listview" data-filter="true" data-inset="true" data-theme="d" data-dividertheme="a">

		<li class="heading" data-role="list-divider" style="display:block"><h3>Monday, November 30, 2015</h3></li>

		<?php
			tprog_add_item("Multi-Resource Fair Queueing for Packet Processing",
			"paper/sigcomm/p1.pdf",
			"Ali Ghodsi (UC Berkeley / KTH), Vyas Sekar (Intel Labs), Matei Zaharia (UC Berkeley), Ion Stoica (UC Berkeley)",
			"Paper",
			"slides/session1/01-sigcomm.pdf",
			"video/SIGCOMM-I-01-MultiResourceFairQueueingForPacketProcessing.mp4");
		?>
		
		<li class="heading" data-role="list-divider" style="display:block"><h3>Tuesday, December 1, 2015</h3></li>
		<li class="heading" data-role="list-divider" style="display:block"><h3>Wednesday, December 2, 2015</h3></li>

	</ul>


<p>
Please email the <a class="lnkcls" href="mailto:sigcomm2012-gen-chairs@acm.org">general chairs</a> with any questions you may have.
</p>



<?php
    include ("include/footer.php");
?>
