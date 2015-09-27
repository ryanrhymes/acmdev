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
			tprog_add_item("Gender and social media use in Bangladesh",
			"papers/",
			"Md. Mokhlesur Rahman (Jawaharlal Nehru University, New Delhi)",
			"Paper",
			"slides/",
			"");
		?>
		
		<?php
			tprog_add_item("Understanding Fiado: Informal credit in Brazil",
			"papers/",
			"Heloisa Candello (IBM Research), David Millen (IBM Research), Silvia Biachi (IBM Research), Rogerio de Paula (IBM Research), Claudio Pinhanez (IBM Research)",
			"Paper",
			"slides/",
			"");
		?>
		
		<?php
			tprog_add_item("Leveraging Smartphones to Monitor Attendance in Public Facilities",
			"papers/",
			"Ali Inam (Technology for People Initiative), Zahra Mansoor (Independent Researcher)",
			"Paper",
			"slides/",
			"");
		?>
		
		<?php
			tprog_add_item("Classification models for new language communities: building domain-specific message categorization",
			"papers/",
			"Jessica Long (Idibon), Nick Gaylord (Idibon)",
			"Paper",
			"slides/",
			"");
		?>
		
		<?php
			tprog_add_item("Towards a 2-way communication and analytics platform for emergency response and post-emergency recovery efforts in Sierra Leone",
			"papers/",
			"Meenal Pore (IBM Research), Nuri Purswani (IBM Research), Reginald E. Bryant (IBM Research), Purity Mugambi (IBM Research), Osamuyimen Stewart (IBM Research)",
			"Paper",
			"slides/",
			"");
		?>
		
		<?php
			tprog_add_item("A Usability Study of an Assistive Touch Voice Interface based Automated Teller Machine (ATM)",
			"papers/",
			"Sara Muneeb (Information Technology University), Mustafa Naseem (Information Technology University), Suleman Shahid (Tilburg University)",
			"Paper",
			"slides/",
			"");
		?>
		
		<?php
			tprog_add_item("Internet Media Upload Caching for Poorly-Connected Regions",
			"papers/",
			"Paul Schmitt (University of California, Santa Barbara), Ramya Raghavendra (IBM Research), Elizabeth Belding (University of California, Santa Barbara)",
			"Paper",
			"slides/",
			"");
		?>
		
		<?php
			tprog_add_item("ICTs in Rural Education: Let the Game Begin",
			"papers/",
			"Adele Botha (CSIR Meraka), Marlien Herselman (CSIR Meraka)",
			"Paper",
			"slides/",
			"");
		?>
		
		<?php
			tprog_add_item("The Challenges of Scaling WISPs",
			"papers/",
			"Shaddi Hasan (UC Berkeley / Endaga), Yahel Ben-David (UC Berkeley / De Novo), Max Bittman (Sudo Mesh / De Novo), Barath Raghavan (ICSI / De Novo)",
			"Paper",
			"slides/",
			"");
		?>
		
		<?php
			tprog_add_item("Looking at Cities in Mexico with Crowds",
			"papers/",
			"Darshan Santani (Idiap Research Institute/EPFL, Switzerland), Salvador Ruiz-Correa (Center for Mobile Life, CNS-IPICYT, Mexico), Daniel Gatica-Perez (Idiap Research Institute/EPFL, Switzerland)",
			"Paper",
			"slides/",
			"");
		?>
		
		<?php
			tprog_add_item("Analysis of end-user QoE in community networks",
			"papers/",
			"Bart Braem (University of Antwerp), Johan Bergs (University of Antwerp), Chris Blondia (University of Antwerp), Sabine Wittevrongel (Ghent University), Leandro Navarro (Universitat Politecnica de Catalunya)",
			"Paper",
			"slides/",
			"");
		?>
		
		<?php
			tprog_add_item("DUCES: A Framework for Characterizing and Simplifying Mobile Deployments in Low-Resource Settings",
			"papers/",
			"Samuel Sudar (University of Washington), Richard Anderson (University of Washington)",
			"Paper",
			"slides/",
			"");
		?>
		
		<?php
			tprog_add_item("Suhrid: A Collaborative Mobile Phone Interface for Low Literate People",
			"papers/",
			"Syed Ishtiaque Ahmed (Cornell University), Maruf Hasan Zaber (Bangladesh University of Engineering and Technology), Mehrab Bin Morshed (Bangladesh University of Engineering and Technology), Md. Habibullah Bin Ismail (Bangladesh University of Engineering and Technology), Dan Cosley (Cornell University), Steven J. Jackson (Cornell University)",
			"Paper",
			"slides/",
			"");
		?>
		
		<?php
			tprog_add_item("Low-power Low-cost Wireless Sensors for Real-time Plant Stress Detection",
			"papers/",
			"Mattia Zeni (IBM Research Africa), Reagan Mbitiru (IBM Research Africa), Agnes Nyambura (IBM Research Africa), Elizabeth Ondula (IBM Research Africa), Lianna Samuel (IBM Research Africa), Kala Fleming (IBM Research Africa)",
			"Paper",
			"slides/",
			"");
		?>
		
		<?php
			tprog_add_item("Janayuja: A People-centric Platform to Generate Reliable and Actionable Insights for Civic Agencies",
			"papers/",
			"Tridib Mukherjee (Xerox Research Center India), Deepthi Chander (Xerox Research Center India), Sharanya Eswaran(Xerox Research Center India), Mridula Singh (Xerox Research Center India), Preethy Varma (Xerox Research Center India), Amandeep Chugh (Xerox Research Center India), Koustuv Dasgupta (Xerox Research Center India)",
			"Paper",
			"slides/",
			"");
		?>
		
		<?php
			tprog_add_item("iPeer: A Sociotechnical Systems Approach for Helping Veterans with Civilian Reintegration",
			"papers/",
			"Rizwana Rizia (Ubicomp Lab, Marquette University)",
			"Paper",
			"slides/",
			"");
		?>
		
		<?php
			tprog_add_item("Optimizing Mobile Application Communication for Challenged Network Environments",
			"papers/",
			"Waylon Brunette (University of Washington), Morgan Vigil (University of California Santa Barbara), Fahad Pervaiz (University of Washington), Shahar Levari (University of Washington), Richard Anderson (University of Washington)",
			"Paper",
			"slides/",
			"");
		?>
		
		<?php
			tprog_add_item("USSD: The Third Universal App",
			"papers/",
			"Trevor Perrier (University of Washington), Brian Derenzi (University of Cape Town), Richard Anderson (University of Washington)",
			"Paper",
			"slides/",
			"");
		?>
		
		<?php
			tprog_add_item("The Price Is Right? Statistical evaluation of a crowd-sourced market information system in Liberia",
			"papers/",
			"Joshua E. Blumenstock (University of Washington), Niall Keleher (University of Washington)",
			"Paper",
			"slides/",
			"");
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
