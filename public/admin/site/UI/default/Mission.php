<?php

/*
Welcome to Dave-Smith Johnson & Son family bank!

This is a tool to assist with scam baiting, especially with scammers attempting to
obtain bank information or to attempt to scam you into giving money.

This tool is licensed under the MIT license (copy available here https://opensource.org/licenses/mit), so it
is free to use and change for all users. Scam bait as much as you want!

This project is heavily inspired by KitBoga (https://youtube.com/c/kitbogashow) and his LR. Jenkins bank.
I thought that was a very cool idea, so I created my own version. Now it's out there for everyone!

Please, waste these people's time as much as possible. It's fun and it does good for everyone.

*/

/*
    DEFAULT THEME - DSJAS
    =====================

    This is the theming files included in the default installation of DSJAS.
    It contains HTML and PHP files required to load and display the default theme.

    This file should never be accessed directly, and instead should only be
    required by a file which has already bootstrapped the site.
    This means that your script must have defined the ABSPATH constants
    and preformed other required bootstrapping tasks before the page
    can be displayed.


    For more information of theming and creating your own themes, please refer to the
    API documentation for themes and plugins.
*/

require_once(ABSPATH . INC . "api/theme/General.php");
require_once(ABSPATH . INC . "api/theme/Accounts.php");
require_once(ABSPATH . INC . "api/theme/Appearance.php");

// Theme entry point
function getTheme()
{ ?>
    <?php require("components/Nav.php"); ?> </nav>

    <div class="container-fluid mission-page-teaser">
        <div class="mission-page-teaser-overlay rounded">
            <h1>Our Mission</h1>
            <br>
            <h2>It's simple really: Get your money in our bank, no matter what the cost</h2>
        </div>
    </div>

    <div class="jumbotron">
        <h1 class="display-4">Hey there, and welcome to <?php echo (getBankName()); ?>!</h1>
        <p class="lead">This is our mission statement. You should familiarize yourself with it, because it's very important</p>
    </div>

    <div class="container">
        <h2>You and your rights are very important to us. The below is the full text of our mission statement and licence texts</h2>

        <p class="border">
            <?php echo (file_get_contents(ABSPATH . "/admin/site/UI/" . getCurrentThemeName() . "/components/MissionStatement.html")); ?>

            <hr>

            <?php echo (file_get_contents(ABSPATH . "/admin/site/UI/" . getCurrentThemeName() . "/components/LicenceTexts.txt")); ?>

            <hr>

            <small class="text-small text-muted">Thanks to the XKCD licensing organization and the FSF for the above texts</small>
        </p>
    </div>
<?php }
