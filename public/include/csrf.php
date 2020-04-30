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

define("CSRF_TOKEN_LEN", 32);
define("CSRF_SESSION_KEY", "csrf_token");
define("CSRF_FORM_NAME", "csrf");

require_once("Util.php");


function regenerateCSRF()
{
    $randBytes = generateRandomString(CSRF_TOKEN_LEN);

    $_SESSION[CSRF_SESSION_KEY] = $randBytes;
}

function getCSRFToken()
{
    return $_SESSION[CSRF_SESSION_KEY];
}

function verifyCSRFToken($givenToken)
{
    return hash_equals(getCSRFToken(), $givenToken);
}

function getCSRFFormElement()
{ ?>
    <input type="hidden" name="<?php echo (CSRF_FORM_NAME); ?>" value="<?php echo (getCSRFToken()); ?>">
<?php }

function getCSRFSubmission($method = "post")
{
    if ($method == "post") {
        return $_POST[CSRF_FORM_NAME];
    } else {
        return $_GET[CSRF_FORM_NAME];
    }
}

function getCSRFFailedError()
{ ?>
    <div class="alert alert-danger">
        <p><strong>Security alert:</strong> CSRF detected! Your session may have expired or a link you clicked may have attempted to exploit the site. The action requested was cancelled.</p>
    </div>
<?php }