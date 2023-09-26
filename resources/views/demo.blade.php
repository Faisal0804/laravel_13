@for ($i=1;$i<=10;$i++)

   <button>click me</button>
@endfor


@foreach ($fruitKey as $fruit)

  <h1>{{$fruit}}</h1>



@endforeach


<select>

@foreach ($carkey as $car)

  <option>{{$car[0]}}</option>



@endforeach


   
</select>

@php

  $a=5;
  $b=6;
  $c=$a+$b;
  echo $c;


@endphp


