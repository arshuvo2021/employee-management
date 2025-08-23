<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">

    <h2 class="mb-4">Employee Management System</h2>

    @if(session('success'))
        <div id="flash-message" class="alert alert-success">{{ session('success') }}</div>
    @endif

    @yield('content')

    <script>
        setTimeout(() => {
            const msg = document.getElementById('flash-message');
            if(msg){
                msg.style.transition = "opacity 0.5s";
                msg.style.opacity = '0';
                setTimeout(() => msg.remove(), 500);
            }
        }, 3000);
    </script>
</body>
</html>
