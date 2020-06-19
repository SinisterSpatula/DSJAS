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

require_once(THEME_API . "General.php");
require_once(THEME_API . "Accounts.php");
require_once(THEME_API . "Appearance.php");

// Theme entry point
function getTheme()
{ ?>

    <body class="body-signin bg-img-login">

        <div class="form-signin rounded">

            <?php if (shouldAppearLoggedIn()) { ?>
                <div class="alert alert-success" role="alert">
                    <p><strong>You're already logged in!</strong> You can access your banking dashboard <a href="/user/Dashboard.php">here</a></p>
                </div>
            <?php }

            addModuleDescriptor("alert_area");  ?>

            <img class="mb-4" src="/assets/logo.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Welcome to <?php echo (getBankName()); ?> online</h1>

            <p><strong>What do you wish to do today?</strong> Please select one of the options below</p>

            <a href="/user/Login.php" class="btn btn-primary action-buttons">Access online banking</a>
            <a href="/user/Apply.php" class="btn btn-success action-buttons">Apply for one of our services</a>
        </div>

    </body>

<?php }
