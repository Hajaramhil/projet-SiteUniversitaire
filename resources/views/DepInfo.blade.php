@extends('welcome')


@section('content')
<div class="content">
    <img class="logo"  src="{{ asset('images/IMAGE.jpg') }}" alt="">
<div class="LABEL">
    <h2>Filières de Licence en Sciences et Techniques (LST) </h2>
</div>

</div>
<div class="buttons">
    <a href="{{ route('IDAI') }}" class="rectangle">
        <button>Ingénierie de développement d'applications informatiques</button>
    </a>
    <a href="{{ route('AD') }}" class="rectangle">
    <button>Analytique des données</button>
    </a>
</div>



@endsection
