<?php
$mypage = current_pagename();
?>

	<div id="left-column" class="content-secondary">
		<div style="width:100%; text-align: center;"><h1>ACM DEV 2015</h1></div>
		<a href="index.php"><img class="center conflogo" src="images/london-logo.png" alt="ACM DEV 2015" /></a>
		<a href="#" onclick="$.mobile.silentScroll(0)" class="ui-btn-right" data-icon="grid"><h2 class="hcls">Site Menu</h2></a>

		<ul class="navlist" data-role="listview" data-inset="true" data-theme="d" data-divider-theme="b">
			<li data-icon="false" <?php if ($mypage=="index.php") echo 'class="navselected"' ?> ><a href="index.php">Home</a></li>
			<li data-icon="false" <?php if ($mypage=="cfp.php") echo 'class="navselected"' ?> ><a href="cfp.php">Call for Papers</a></li>
			<li data-icon="false" <?php if ($mypage=="cfd.php") echo 'class="navselected"' ?> ><a href="cfd.php">Call for Posters</a></li>
			<li data-icon="false" <?php if ($mypage=="submission.php") echo 'class="navselected"' ?> ><a href="submission.php">Paper Submission</a></li>
			<li data-icon="false" <?php if ($mypage=="program.php") echo 'class="navselected"' ?> ><a href="program.php">Program</a></li>
			<li data-icon="false" <?php if ($mypage=="gaia.php") echo 'class="navselected"' ?> ><a href="gaia.php">GAIA Workshop</a></li>
			<li data-icon="false" <?php if ($mypage=="registration.php") echo 'class="navselected"' ?> ><a href="https://www.regonline.com/dev2015">Registration</a></li>

			<!-- <li class="navheader-b" data-icon="plus" data-theme="c" ><a href="#">Tutorials</a></li> -->
			<!-- <li data-icon="false" class="subnav-b <?php if ($mypage=="pwn.php") echo 'navselected' ?>" data-theme="c"><a href="pwn.php">PWN</a></li> -->

			<li data-icon="false" <?php if ($mypage=="organization.php") echo 'class="navselected"' ?> ><a href="organization.php">Organization Committee</a></li>
			<li data-icon="false" <?php if ($mypage=="localinfo.php") echo 'class="navselected"' ?> ><a href="localinfo.php">Local Info</a></li>
			<li data-icon="false" <?php if ($mypage=="supporters.php") echo 'class="navselected"' ?> ><a href="supporters.php">Supporters</a></li>
			<li data-icon="false" <?php if ($mypage=="dev5") echo 'class="navselected"' ?> ><a href="http://dev5.acmdev.org/">ACM DEV 2014</a></li>
			</ul>

		<div class="hostlogo border ui-corner-all ui-shadow">
			<div><a href="http://www.qmul.ac.uk/"><img src="images/QM_logo.gif" alt="Queen Mary University of London" /></a></div>
		    <p class="ui-btn-text">ACM DEV 2015 Host</p>
		</div>

		<div class="border ui-corner-all ui-shadow socialbuttons">
			<iframe src="include/socialbtn.php" scrolling="no" height="21" width="100%" frameborder="0" marginheight="0" marginwidth="0"></iframe>
		</div>
 		<div style="margin-top: 2em" class="tweetlist">
			<iframe src="include/tweetlist.php" scrolling="no" height="380" width="100%" frameborder="0" marginheight="0" marginwidth="0"></iframe>
		</div>
	</div>
