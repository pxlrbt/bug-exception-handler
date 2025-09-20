<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bug Report</title>
</head>
<body>
    @foreach (\App\Models\ModelA::all() as $modelA)
        {{ $modelA->displayName }}
    @endforeach
</body>
</html>
