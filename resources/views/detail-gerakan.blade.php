<!DOCTYPE html>
<html>

<head>
    <title>Detail Gerakan</title>
</head>

<body>

<h1>

{{ $detail['nama'] }}

</h1>

<br>


Arab

<p>

{{ $detail['arab'] }}

</p>


Latin

<p>

{{ $detail['latin'] }}

</p>


Arti

<p>

{{ $detail['arti'] }}

</p>


<br>

<button>

Audio ▶

</button>


<button>

Video ▶

</button>
<br><br>


@if(isset($gerakan[$id-1]))
<a href="/gerakan/{{ $id-1 }}">Previous</a>
@endif


@if(isset($gerakan[$id+1]))
<a href="/gerakan/{{ $id+1 }}">Next</a>
@endif

</body>

</html>