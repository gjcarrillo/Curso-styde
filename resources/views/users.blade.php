
  @include('header')

  <div class="row mt-3">
    <div class="col-8">

      <h1> {{ $title }} </h1>

      <hr>
<!--OTRA DIRECTIVA-->
      <ul>
        @unless (empty($users))
          @foreach ($users as $user)
            <li> {{ $user }} </li>
          @endforeach
        @else
          <li>No hay Usuarios Regitrados.</li>
        @endif

      </ul>

    </div>

    <div class="col-4">
          @include('sidebar')
    </div>

  </div>

  @include('footer')

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
