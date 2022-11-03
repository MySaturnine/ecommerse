<?php

if (isset($_SESSION["message"])) {
    $message = $_SESSION["message"];
?>

    <div class="container my-3">
        <div class="alert alert-success">
            <strong>Alert!</strong> <?php echo $message; ?>
        </div>

    </div>
<?php
    unset($_SESSION["message"]);
}

?>