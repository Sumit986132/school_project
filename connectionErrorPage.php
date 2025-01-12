<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection Error</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <div class="text-center p-4 border rounded shadow-sm bg-white">
        <h1 class="display-5 text-danger">Oops! Connection Error</h1>
        <p class="mb-4 text-muted">It looks like something went wrong. Please check your connection and try again.</p>
        <button class="btn btn-primary" onclick="retry()">Retry</button>
    </div>

    <script>
        function retry() {
            location.reload();
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
