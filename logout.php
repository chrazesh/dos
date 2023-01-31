<?php
session_start();

if (isset($_SESSION["username"])) {
    unset($_SESSION["username"]);
?>
<script>
    window.location.href = 'index.php';
</script>
<?php
}
?>