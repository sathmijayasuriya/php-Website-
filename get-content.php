<?php
if (!isset($pdo)) {
    die("Database connection not found.");
}

// Optional: Define rendering function
function renderContentBlock($title, $content) {
    ?>
    <article class="content-block">
        <h4><?= htmlspecialchars($title) ?></h4>
        <p><?= nl2br(htmlspecialchars($content)) ?></p>
        <hr>
    </article>
    <?php
}

// Fetch and render content
try {
    $stmt = $pdo->prepare("SELECT * FROM details ORDER BY id ASC");
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch()) {
            renderContentBlock($row['title'], $row['content']);
        }
    } else {
        echo "<p>No content available at the moment.</p>";
    }
} catch (PDOException $e) {
    echo "<p>Error fetching content: " . htmlspecialchars($e->getMessage()) . "</p>";
}
?>
