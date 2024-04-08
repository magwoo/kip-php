<?php
require_once "../db.php";
if (isset($_GET["id"])) {
    $stmt = $pdo->prepare("SELECT * FROM works WHERE id = ?");
    $stmt->execute([$_GET["id"]]);
    $work = $stmt->fetch();

    if ($work) {
        $stmt = $pdo->prepare("DELETE FROM works WHERE id = ?");
        $stmt->execute([$_GET["id"]]);
        if ($work["file_path"] != "/static/placeholder.jpg") {
            unlink("/var/www" . $work["file_path"]);
        }
    }

    header("Location: /admin");
}
?>
