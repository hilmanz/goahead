<!DOCTYPE html>
<html>
<?php include("meta.php"); ?>
<body class="animated" data-animated="fadeIn">
    <div id="page">
        <?php include("header.php"); ?> 
		<?php 
        if($_GET['page']=='winner'){
            include("winner.php");
        }else if($_GET['page']=='gallery'){ 
            include("gallery.php");
        }else if($_GET['page']=='terms'){ 
            include("terms.php");
        }else if($_GET['page']=='thanks'){ 
            include("thanks.php");
        }else if($_GET['page']=='trivia-result'){ 
            include("trivia-result.php");
        }else{ 
			include("home.php"); 
			include("suityourself.php");  
			include("submit-story.php"); 
			include("artist.php"); 
        }?>
		<?php include("footer.php"); ?>
    </div><!-- end #page --> 
    <header class="fixed-menu"></header>
    <div id="bg-popup"></div>    			
</body>
</html>