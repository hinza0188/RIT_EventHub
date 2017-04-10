<!DOCTYPE html>

<html lang="en">

<head>
    <title>Browse Events</title>

</head>

<body>
<h1> browse all events</h1>

    <ul>
    @foreach ($events as $event)
        <li> {{ $event }} </li>
    @endforeach
    </ul>

</body>

</html>

<?php