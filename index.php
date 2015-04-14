<?php
        $page_title="";
        include("include/header.php");
?>

<h2 class="hcls">Welcome to London</h2>


<p>
The organizing committee is delighted to invite you to ACM DEV 2015, to be held in London, UK between November 30 - December 2, 2015.
</p>

<p>
The sixth annual Symposium on Computing for Development (ACM DEV 2015) will provide a premier venue to present original and innovative work on the applications, technologies, architectures, and protocols for computing in developing regions.
</p>

<p>
The proceedings of the conference will be available from the ACM Digital Library. For more details, visit the <a href="cfp.php">Call for Papers</a>.
</p>
<p>
<img src="images/london-view.jpg">
</p>
<!--<a href="sigcomm-support.pdf" rel="external" data-role="button" class="button">Supporter Information</a>-->
<a href="mailto:arjuna.sathiaseelan@cl.cam.ac.uk" data-role="button" class="button">Contact the Organizers</a>

<h2 class="hcls">News</h2>
<ul data-role="listview" data-inset="true" data-theme="d" class="datetbl">
<?php
        include("include/news.html");
?>
</ul>
<script>
$(".newslibtn").siblings().slice(7).hide();
</script>

<h2 class="hcls">Important Dates</h2>
<?php
    include ("include/dates.html");
?>

<?php
    include ("include/footer.php");
?>
