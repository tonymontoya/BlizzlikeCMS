<div class="top-bar">
    <div class="container">
        <div class="row">
            <h1><a href="index.php"><?php echo $servername; ?></a></h1>
            <ul class="pull-right">
                <li>Server status: <?php getServerStatus(); ?></li>
                <li><?php if (isUserLoggedIn() == true) { echo '<a href="user.php">' . getLoggedInUsername() . '</a>'; } else { ?><a href="user_login.php">User login</a><?php } ?></li>
                <li><a href="admin.php">Administration</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="navbar-legion">
        <a href="index.php" title="<?php echo $servername; ?>"><div class="top-logo"></div></a>
        <div class="navbar-nav">

            <button type="button" title="Open menu" id="toggleNavigation" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <div class="toggledMenu">
                    <ul id="toggledMenuUl">
                        <li class="<?php if ($page == 'home') { echo 'mobilemenu-active'; } ?>"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="<?php if ($page == 'register') { echo 'mobilemenu-active'; } ?>"><a href="register.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Register</a></li>
                        <li class="<?php if ($page == 'onlineplayers') { echo 'mobilemenu-active'; } ?>"><a href="onlineplayers.php"><i class="fa fa-users" aria-hidden="true"></i> Who's online</a></li>
                        <li class="<?php if ($page == 'forum') { echo 'mobilemenu-active'; } ?>"><a href="forum.php"><i class="fa fa-comments" aria-hidden="true"></i> Forum</a></li>
                        <li class="<?php if ($page == 'howto') { echo 'mobilemenu-active'; } ?>"><a href="howto.php"><i class="fa fa-question-circle" aria-hidden="true"></i> How to</a></li>
                        <li class="<?php if ($page == 'armory') { echo 'mobilemenu-active'; } ?>"><a href="armory.php"><i class="fa fa-universal-access" aria-hidden="true"></i> Armory</a></li>
                        <li class="<?php if ($page == 'gallery') { echo 'mobilemenu-active'; } ?>"><a href="gallery.php"><i class="fa fa-file-image-o" aria-hidden="true"></i> Gallery</a></li>
                    </ul>
                </div>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="navbar-list">
                <div class="navbar-menuitem <?php if ($page == 'home') { echo 'menuitem-active'; } ?>"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></div>
                <div class="navbar-menuitem <?php if ($page == 'register') { echo 'menuitem-active'; } ?>"><a href="register.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Register</a></div>
                <div class="navbar-menuitem <?php if ($page == 'onlineplayers') { echo 'menuitem-active'; } ?>"><a href="onlineplayers.php"><i class="fa fa-users" aria-hidden="true"></i> Online players</a></div>
                <div class="navbar-menuitem <?php if ($page == 'forum') { echo 'menuitem-active'; } ?>"><a href="forum.php"><i class="fa fa-comments" aria-hidden="true"></i> Forum</a></div>
                <div class="navbar-menuitem <?php if ($page == 'howto') { echo 'menuitem-active'; } ?>"><a href="howto.php"><i class="fa fa-question-circle" aria-hidden="true"></i> How to</a></div>
                <div class="navbar-menuitem <?php if ($page == 'armory') { echo 'menuitem-active'; } ?>"><a href="armory.php"><i class="fa fa-universal-access" aria-hidden="true"></i> Armory</a></div>
                <div class="navbar-menuitem <?php if ($page == 'gallery') { echo 'menuitem-active'; } ?>"><a href="gallery.php"><i class="fa fa-file-image-o" aria-hidden="true"></i> Gallery</a></div>
            </div>

        </div>
    </div>
</div>

<div class="midContent">
    <div class="container">
        <?php
        include 'page.php';
        ?>
    </div>
</div>