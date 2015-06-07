<?php
	include('includes/header.inc.php');
?>
	<script>
		changeActivePage("home");
	</script>
    <div class="parallax">
        <div class="bg__foo<?php echo rand(2,2); ?>">
            <!--<span id="fade"><heading style="font-size: 100px; font-weight: 100;">LAST STAND STUDIO</heading></span>-->
        </div>
    </div>
    <div id="front">
        <div class="row">
            <div class="small-4 columns">
                <h2>Kickstarter</h2>
                <h5>
                    Not Available yet!
                </h5>
            </div>
            <div class="small-4 columns">
                <h2>Development</h2>
                <h5>
                    Check out <a href="about.html">this</a> to learn more about our team, and what we stand for!
                </h5>
            </div>
            <div class="small-4 columns">
                <h2>Social Media</h2>
                <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/LSStudioOffical" data-widget-id="560544177596137472">Tweets by @LSStudioOffical</a>
            </div>
        </div>
    </div>
<?php
	include('includes/footer.inc.php');
?>