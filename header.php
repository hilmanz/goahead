
<section id="top">
    <header>     
    	<div class="wrapper">                 
            <nav class="navmenu">
                <a class="scrolling" id="logo" href="#top">&nbsp;</a>
                <ul>
                    <?php 
                    if($_GET['page']==''){ ?>
                    <li><a class="scrolling" href="#suityourself">Suit yourself</a></li>
                    <li><a class="scrolling" href="#submitstory">My Moment</a></li>
                    <li><a href="index.php?page=gallery">Gallery</a></li>
                    <li><a href="index.php?page=winner">Winner</a></li>
                    <li><a class="scrolling" href="#artist">Artist</a></li>
                    <li><a href="index.php?page=terms">Terms &amp; Conditions</a></li>
                    <?php }else{  ?>
                    <li><a class="scrolling" href="index.php#suityourself">Suit yourself</a></li>
                    <li><a class="scrolling" href="index.php#submitstory">My Moment</a></li>
                    <li><a href="index.php?page=gallery">Gallery</a></li>
                    <li><a href="index.php?page=winner">Winner</a></li>
                    <li><a class="scrolling" href="index.php#artist">Artist</a></li>
                    <li><a href="index.php?page=terms">Terms &amp; Conditions</a></li>
                    <?php }?>
                </ul>
            </nav><!-- end nav --> 
        </div><!-- end .wrapper --> 
    </header>         
</section><!-- //header section -->