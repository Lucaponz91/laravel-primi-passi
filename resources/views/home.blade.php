<h1>Hello world!</h1>
<p>Pagina creata da {{$nome}} {{$cognome}} </p>
<p>del corso {{$corso}}, classe {{$classe}}</p>
<br>
<hr>
<h5>Insegnanti: 
    @foreach ($teachers as $teacher)
    {{$teacher}}
    @if (!$loop->last)
        ,
        
    @endif
        
    @endforeach
</h5>