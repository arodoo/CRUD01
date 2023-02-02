@extends('tema.app')
@section('title', 'HUUNGA HUNGA LISTA TAREAS')
@section('contenido')
    <h3>
        Tareas
    </h3>
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>
                    Nombre
                </th>
                <th>
                    Finalizada
                </th>
                <th>
                    Fecha limite
                </th>
                <th>
                    Urgencia
                </th>
                <th>
                    Descripción
                </th>
                <th>
                    Opciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tareas as $tarea)
                <tr>
                    <td>
                        {{ $tarea->nombre }}
                    </td>
                    <td>
                        {{ $tarea->finalizada() }}
                    </td>
                    <td>
                        {{ $tarea->fecha_limite->format('d/m/y') }}
                    </td>
                    <td>
                        {{ $tarea->urgencia() }}
                    </td>
                    <td>
                        {{ $tarea->descripcion }}
                    </td>
                    <td>
                        <a href="{{ route('tarea.edit', $tarea) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
