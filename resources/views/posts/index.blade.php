@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-2">
                <div class="card-header">Articulos <a href="{{route('posts.create')}}" class="btn btn-sm btn-outline-success float-right">Crear</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <table class="table">
                      <thead>
                        <th>ID</th>
                        <th class="text-center">Titulo</th>
                        <th colspan="2" class="text-center">Accion</th>
                      </thead>
                      <tbody>
                        @foreach($posts as $post)
                        <tr>
                          <td>{{$post->id}}</td>
                          <td class="text-center">{{$post->title}}</td>
                          <td><a href="{{route('posts.edit',$post)}}" class="btn btn-sm btn-primary">Editar</a>
                          <td><form action="{{route('posts.destroy',$post)}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <input type="submit" value="Eliminar"
                          class=" btn btn-sm btn-danger"
                          onclick="return confirm('¿Estas seguro de eliminar?')"
                          >
                          </form></td>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
            {{$posts->links()}}
        </div>
    </div>
</div>
@endsection