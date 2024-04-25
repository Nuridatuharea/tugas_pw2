<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <!-- Tambahkan link CSS atau style yang diperlukan -->
</head>
<body bgcolor="yellow">
    <?php include "navbar.php"; ?>

    <div class="content-wrapper">
        <section class="content">
            <h1>Contact Us</h1>
            <p>Get in touch with us using the form below:</p>
            <form action="submit_contact.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea><br><br>

                <input type="submit" value="Submit">
            </form>
        </section>
    </div>

    <?php include "footer.php"; ?>
    <!-- Tambahkan script JavaScript atau footer yang diperlukan -->

</body>
</html>