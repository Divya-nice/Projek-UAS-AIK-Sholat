<!DOCTYPE html>
<html>
<head>
    <title>Daftar Gerakan</title>
</head>

<body>

<h1>Daftar Gerakan Sholat</h1>

@foreach($gerakan as $g)

<p>

{{ $g['id'] }}.
{{ $g['nama'] }}

</p>

@endforeach


</body>
</html>