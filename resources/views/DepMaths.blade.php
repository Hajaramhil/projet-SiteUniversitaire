@extends('welcome')


@section('content')
<div class="content">
    <img class="logo"  src="{{ asset('images/IMAGE.jpg') }}" alt="">
<div class="LABEL">
    <h2>Filières de Licence en Sciences et Techniques (LST) </h2>
</div>
</div>
<div class="buttons">
    <a href="{{ route('MA') }}" class="rectangle">
<button> Mathématiques et Applications</button>
</a>
<a href="{{ route('MID') }}" class="rectangle">
<button> Mathématiques et Informatique Décisionnelles</button>
</a>
<a href="{{ route('SSD') }}" class="rectangle">
<button> Statistique et Science des données</button>
</a>
</div>


@endsection
