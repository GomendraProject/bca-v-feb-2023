<?php
session_start();

function addSuccessMessage($message)
{
    $_SESSION['success'] = $message;
}

function renderMessages()
{
    var_dump($_SESSION);
    if (isset($_SESSION['success'])) {
?>
        <div class="alert alert-success" role="alert">
            <?= $_SESSION['success'] ?>
        </div>
<?php
    }
    unset($_SESSION['success']);
}
