<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact | Le Congo au coeur d'Ottawa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/forall.css">
    <link rel="stylesheet" href="css/contact.css">
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <main>
        <div class="contact-page">
            <div class="contact-left">
                <h1>CONTACT</h1>
                <img src="images/contact.png" alt="Congo Celebration" class="contact-image">
            </div>
            <div class="form-container">
                <h2>Reach Out</h2>
                <p>Would you like to know more about Congo Week in Ottawa? Do you have a question, an idea, or a desire
                    to contribute? Contact us today!</p>
                <p>Our team will be happy to discuss and assist you</p>

                <?php if (isset($_GET['success'])): ?>
                    <div class="success-message">
                        <h2 style='color:#2e7d32;'>✅ Message Sent!</h2>
                        <p>Thanks, <strong><?php echo htmlspecialchars($_GET['name']); ?></strong>. We’ve received your
                            message and will be in touch soon.</p>
                    </div>
                <?php elseif (isset($_GET['error'])): ?>
                    <div class="error-message">
                        ❌ Error: <?php echo htmlspecialchars($_GET['error']); ?>
                    </div>
                <?php endif; ?>

                <form action="contact_process.php" method="post">
                    <div class="form-group">
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" name="first-name" required>
                    </div>
                    <div class="form-group">
                        <label for="last-name">Last Name</label>
                        <input type="text" id="last-name" name="last-name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>

</html>