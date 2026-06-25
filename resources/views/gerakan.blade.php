<!DOCTYPE html>
<html>
<head>
    <title>Daftar Gerakan</title>
</head>

<body>

<h1>Daftar Gerakan Sholat</h1>

@foreach($gerakan as $g)

<p>

<a href="/gerakan/{{ $g['id'] }}">

{{ $g['id'] }}.
{{ $g['nama'] }}

</a>

</p>

@endforeach


</body>
</html>