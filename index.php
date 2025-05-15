<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sticky Sidebar Template</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body id="top">

    <?php include 'includes/header.php'; ?>
    <div class="content-wrapper">
        <?php include 'includes/sidebar.php'; ?>
        <main class="main-content" id="main-content">
            <section class="intro">
                <h3>Simple Website Template with Sticky Sidebar</h3>
                <p class="tight"><strong>Free responsive website HTML theme with sticky sidebar for both desktop and mobile. With social media icons and toggle manu and sidebar on mobile.</strong></p>
                <p><strong>You are welcome to copy, edit and use this template for free as long as you leave a visible link back to this website or you donate through PayPal.</strong></p>
                <hr>
            </section>
            <section id="content-area">
                <?php include 'get-content.php'; ?>
            </section>
            <section class="footer">
                <p>© You can copy, edit and publish this template but please leave a visible link to our website.</p>
                <p><a href="https://html5-templates.com/">HTML5 Templates</a></p>
            </section>    
        </main>
    </div>
<script src="script.js?v=<?= time() ?>"></script>
</body>

</html>