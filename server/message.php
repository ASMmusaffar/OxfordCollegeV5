<?php
    if(isset($_SESSION['message'])) :
?>

    <div class="alert <?= $_SESSION['messagetype']; ?> alert-dismissible fade show" role="alert">
        <strong><span style="text-transform: uppercase;font-size:small;"><?= $_SESSION['message']; ?></span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></strong>
    </div>

<?php 
    unset($_SESSION['message']);
    unset($_SESSION['messagetype']);
    endif;
?>