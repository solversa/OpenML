<?php
if (session_status() === PHP_SESSION_NONE){session_start();}
?>

<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en">
<![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang="en">
<![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en">
<![endif]-->
<!--[if gt IE 8]><!-->

<html class="no-js" lang="en" xmlns:og="http://ogp.me/ns#">
    <!--<![endif]-->

    
    <body>

        <?php
          o('login');
        ?>


          <div class="searchbarcontainer">
          <div class="searchbar" id="mainmenu" <?php if($section == "OpenML" or $section == "Guide" or $ch == "new" or $ch == "backend"){echo 'style="display:none"';}?>>
            <div class="sidebar-overlay">
            <div class="nav pull-left">
              <a class="navbar-brand menubutton"><i class="fa fa-bars fa-lg"></i></a>
            </div>
            <a class="navbar-brand" id="section-brand" href="<?php echo $href; ?>">OpenML</a>
            </div>
            <ul class="sidenav nav topchapter" id="topaccordeon">
              <li class="panel mainchapter">
                <a data-toggle="collapse" data-parent="#topaccordeon" data-target="#mainlist"> <b>Explore</b></a>
                <ul class="sidenav nav collapse in" id="mainlist">
                  <!--
                  <?php if (!$this->ion_auth->logged_in()){ ?>
                      <li <?php echo ($section == '' ?  'class="topactive"' : '');?>><a href="register" class="icongrayish"><i class="fa fa-fw fa-lg fa-child"></i> Join OpenML</a></li>
                  <?php } else { ?>
                      <li <?php echo ($section == '' ?  'class="topactive"' : '');?>><a href="u/<?php echo $this->user->id; ?>"><img src="<?php echo htmlentities( authorImage( $this->user->image ) ); ?>" width="25" height="25" class="img-circle" alt="<?php echo $this->user->first_name . ' ' . $this->user->last_name; ?>" /> <?php echo user_display_text(); ?></a></li>
                  <?php } ?> -->
                      <?php

                        $sections = ["Data", "Task", "Flow", "Run", "Study", "Task type", "Measure", "People"];
                        $types    = ["data", "task", "flow", "run", "study", "task_type", "measure", "user"];
                        $colors   = ["green", "yellow", "blue", "red", "purple", "orange", "bluegray", "blueacc"];
                        $icons    = ["database", "trophy", "cogs", "star", "flask", "flag-o", "bar-chart-o", "users"];

                        for( $i = 0; $i < count($sections); $i++ ) {
                          echo "<li" . ($section == $sections[$i] ? " class=\"topactive\"" : "") . ">";
                          echo "<a href=\"search?type=" . $types[$i] . (array_key_exists("q", $_GET) ? "&amp;q=" . htmlspecialchars(safe($_GET["q"]), ENT_QUOTES) : "") . "\" class=\"icon{$colors[$i]}\">";
                          echo "<i class=\"fa fa-fw fa-lg fa-{$icons[$i]}\"></i> $sections[$i]<span id=\"{$types[$i]}counter\" class=\"counter\"></span></a></li>" . PHP_EOL;
                        }

                      ?>
                </ul>
              </li>
                <li class="menu-cite <?php echo ($section == 'Guide' ?  'topactive' : '');?>"><a href="https://docs.openml.org" class="icongreen"><i class="fa fa-fw fa-lg fa-leanpub"></i> <b>Help</b></a></li>
                <li class="menu-cite"><a href="https://medium.com/open-machine-learning" class="iconyellow" target="_blank"><i class="fa fa-fw fa-lg fa-rss-square"></i> <b>Blog</b></a></li>
                <li class="menu-cite <?php echo ($section == 'Contact' ?  'topactive' : '');?>"><a href="contact" class="iconblue"><i class="fa fa-fw fa-lg fa-bullhorn"></i> <b>Contact</b></a></li>
                <li class="menu-cite <?php echo ($section == 'Citing' ?  'topactive' : '');?>"><a href="cite" class="iconred"><i class="fa fa-fw fa-lg fa-heart"></i> <b>Please cite us</b></a></li>
            </ul>
          </div>
        </div>

        <?php echo $body; ?>


        </div>


    </body>
</html>
