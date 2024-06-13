<?php
require_once __DIR__ . "/config.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= SITE_TITLE ?></title>
    <meta name="description" content="<?= SITE_DESC ?>">
    <link rel="stylesheet" href="css/chat.css?v=<?= CSS_VERSION ?>">
    <script src="js/library/showdown@1.9.0.js"></script>
    <link rel="icon" href="favicon.png">
    <script>
        let chat_id = new Date().getTime();
    </script>
</head>
<body>
<div class="container">
    <div id="all_dialogs"></div>
    <div id="settings"></div>
    <div class="conversations">
        <div class="jsClose"></div>
        <div class="history">
            <div id="new_chat">New Chat</div>
            <div id="delete_history">
                Delete:
                <label class="switch">
                    <input id="can_delete" type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="chat">
        <div id="chat-messages">
            <?php
            if(WELCOME_PHRASES){
                foreach (WELCOME_PHRASES as $phrase){
                    echo "<div class=\"message start_msg\">$phrase</div>";
                }
            }
            ?>
        </div>
        <div id="loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
        <div class="chat-input">
            <div class="chat_wrap">
                <label><textarea maxlength="380" placeholder="Let's talk"></textarea></label>
                <button>Send</button>
            </div>
        </div>
    </div>
</div>
<script async="async" src="js/script.js?v=<?= JS_VERSION ?>"></script>
</body>
</html>