<!DOCTYPE html>
<html>
<head>
    <title>Only BMW</title>
</head>
<body>
    <header>
        <h1>Reservation</h1>
    </header>

    <nav>
        <ul>
            <li><a href="{{ route('cars.index') }}">List:</a></li>
            <li><a href="{{ route('cars.create') }}">Add:</a></li>

        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>

    </footer>


</body>
</html>
