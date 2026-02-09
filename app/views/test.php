


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test JavaScript</title>
    <link href="/assets/css/style.css" rel="stylesheet">
</head>
<body>

<h1>Test JavaScript avec PHP intégré</h1>

<!-- Test simple JavaScript -->
<button id="testButton">Cliquez-moi</button>

<script src="/assets/js/test.js" nonce="<?= htmlspecialchars($nonce ?? '') ?>" defer></script>

</body>
</html>
