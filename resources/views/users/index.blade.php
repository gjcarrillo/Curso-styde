@extends('layout')

@section('content')
<h1> {{ $title }} </h1>
  <hr>

  <ul>
    @unless (empty($users))
      @foreach ($users as $user)
        <li> {{ $user->name }}, ({{$user->email}}) </li>
      @endforeach
    @else
        <li>No hay Usuarios Regitrados.</li>
    @endif
  </ul>

@endsection

@section('sidebar')

    @parent
    <h2>Barra Lateral Personalizada !!Sobreescrita!!</h2>
@endsection

  <!-- Linea horizontal-->
<!--  OTRA FORMA
@if (! empty($users))
  <ul>
    @foreach ($users as $user)

      <li> {{ $user }} </li>
    @endforeach
  </ul>
@else

  <p>No hay Usuarios Regitrados.</p>

@endif
-->

<!--OTRA DIRECTIVA OTRA FORMA-->
<!--
    @empty($users)
      <p>No hay Usuarios Regitrados.</p>

    @else
    <ul>

      @foreach ($users as $user)
        <li> {{ $user }} </li>
      @endforeach
    </ul>

    @endempty

-->
<!--OTRA DIRECTIVA OTRA FORMA-->

<!--
    <ul>

        @forelse ($users as $user)
          <li> {{ $user }} </li>
        @empty
          <li>No hay Usuarios Regitrados.</li>
        @endforelse
    </ul>

    {{time()}}
-->
