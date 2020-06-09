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

    This is the themeing files included in the default installation of DSJAS.
    It contains HTML and PHP files required to load and display the default theme.

    This file should never be accessed directly, and instead should only be
    required by a file which has already bootstrapped the site.
    This means that your script must have defined the ABSPATH constants
    and preformed other required bootstrapping tasks before the page
    can be displayed.


    For more information of theming and creating your own themes, please refer to the
    API documentation for themes and plugins.
*/

require(ABSPATH . INC . "/api/theme/Accounts.php");

// Theme entry point
function getTheme()
{ ?>

    <body class="body-signin bg-img-login">

        <div class="form-signin rounded">

            <?php addModuleDescriptor("alert_area");  ?>

            <h1>Service unavailable</h1>


            <div class="alert alert-danger">
                <strong>Due to an ongoing issue, online applications have been disabled</strong> We're sorry, but due to a technical fault, online applications have been temporarily disabled.
            </div>

            <p>Service should be restored within two business days</p>

            <a href="/user/Login.php">Return home</a>
        </div>

    </body>
<?php }