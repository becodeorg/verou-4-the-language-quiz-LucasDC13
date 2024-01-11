<?php ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Game</title>
</head>
<body>
    <main>
        <form method="POST">
            <?php if (empty($_POST)): ?>
                <label for="translationBar">Translation?</label>
                <input type="text" id="translationBar" name="translationBar" placeholder="Enter word here...">
                <button type="submit">Submit!</submit>
            <?php else: ?>
                <button type="submit">New Word!</submit>
            <?php endif;?>
        </form>
    </main>
</body>
</html>