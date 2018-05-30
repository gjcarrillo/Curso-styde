<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Listado de Usuarios - Curso Styde.net</title>
  </head>
  <body>
    <h1> {{ $title }} </h1>
    <hr><!-- Linea horizontal-->
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
<!--OTRA DIRECTIVA-->
    @unless (empty($users))
      <ul>
        @foreach ($users as $user)
          <li> {{ $user }} </li>
        @endforeach
      </ul>
    @else

      <p>No hay Usuarios Regitrados.</p>

    @endif

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
-->
    {{ time() }}

</body>
</html>
