<?php
        $page_title="Organization Committee";
        include("include/header.php");
?>

<h2 class="hcls">Organization Committee</h2>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">

	<li data-role="list-divider">General Chairs</li>
	<?php
		add_listitem("Arjuna Sathiaseelan", "University of Cambridge, UK", "http://www.cl.cam.ac.uk/~as2330/");
		add_listitem("Marco Zennaro", "ICTP", "");
	?>

	<li data-role="list-divider">TPC Chairs</li>
	<?php
		add_listitem("Elizabeth Belding", "University of California, Santa Barbara, USA", "https://www.cs.ucsb.edu/~ebelding/Home.html");
		add_listitem("Jay Chen", "NYU Abu Dhabi, UAE", "");
	?>
	
	<li data-role="list-divider">Local Arrangements Chairs</li>
	<?php
		add_listitem("Gareth Tyson", "Queen Mary University of London, UK", "http://www.eecs.qmul.ac.uk/~tysong/");
	?>
	
	<li data-role="list-divider">Poster Chair</li>
	
	<?php
		add_listitem("Veljko Pejovic", "University of Ljubljana, Slovenia", "");
	?>
	
	<li data-role="list-divider">Web &amp; Publicity Chair</li>
	<?php
		add_listitem("Liang Wang", "University of Cambridge, UK", "http://www.cl.cam.ac.uk/~lw525/");
	?>
	
	<li data-role="list-divider">TPC Members</li>
	<?php
		add_listitem("Aaditeshwar Seth", "IIT Delhi, India", "");
		add_listitem("Agha Ali Raza", "Information Technology University, Pakistan", "");
		add_listitem("Andrew Dearden", "Sheffield Hallam University, UK", "");
		add_listitem("Azza Abouzied", "NYU Abu Dhabi, UAE", "");
		add_listitem("Barath Raghavan", "ICSI, USA", "");
		add_listitem("Bhaskaran Raman", "IIT-Bombay, India", "");
		add_listitem("Bill Thies", "Microsoft Research India", "");
		add_listitem("Bill Tucker", "University of Western Cape, South Africa", "");
		add_listitem("Brian DeRenzi", "University of Cape Town, South Africa", "");
		add_listitem("David Johnson", "CSIR, South Africa", "");
		add_listitem("Ed Cutrell", "Microsoft Research India, India", "");
		add_listitem("Ellen Zegura", "Georgia Tech, USA", "");
		add_listitem("Fred Xue", "Google, USA", "");
		add_listitem("Jon Crowcroft", "University of Cambridge, UK", "");
		add_listitem("Josh Blumenstock", "University of Washington, USA", "");
		add_listitem("Kentaro Toyama", "University of Michigan, USA", "");
		add_listitem("Mahesh Marina", "University of Edinburgh, UK", "");
		add_listitem("Mariya Zheleva", "University at Albany, SUNY", "");
		add_listitem("Michael Best", "United Nations University Institute on Computing and Society, USA", "");
		add_listitem("Neha Kumar", "University of Southern California, USA", "");
		add_listitem("Nicola Dell", "University of Washington, USA", "");
		add_listitem("Nithya Sambasivan", "Google, USA", "");
		add_listitem("Richard Anderson", "University of Washington, USA", "");
		add_listitem("Roni Rosenfeld", "Carnegie Mellon University, USA", "");
		add_listitem("Rumi Chunara", "New York University, USA", "");
		add_listitem("Shankar Kalyanaraman", "Facebook, USA", "");
		add_listitem("Sibren Isaacman", "Loyola University, USA", "");
		add_listitem("Susana Munoz Hernandez", "U. Politecnica de Madrid, Spain", "");
		add_listitem("Tapan Parikh", "UC Berkeley, USA", "");
		add_listitem("Umar Saif", "Information Technology University Punjab, Pakistan", "");
		add_listitem("Vanessa Frias-Martinez", "University of Maryland, USA", "");
	?>
	
</ul>

<?php
    include ("include/footer.php");
?>