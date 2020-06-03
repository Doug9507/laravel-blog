@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Articulo</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                    @endif

                    <form action="{{route('posts.update',$post)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                      <div class="form-group">
                          <label for="title">Titulo <span class="text-danger">*</span></label>
                          <input type="text" id="title" class="form-control" name="title" required value="{{old('title',$post->title)}}">
                      </div>
                      <div class="form-group custom-file">
                          <!-- <label class="custom-file-label">Imagen...</label>
                          <input type="file" id="image" class="custom-file-input" data-browse="Subir Imagen"> -->
                          <label for="image">Subir magen...</label>
                          <input type="file" name="image" id="image">
                      </div>
                      <div class="form-group mt-3">
                          <label for="body">Contenido <span class="text-danger">*</span></label>
                          <textarea name="body" id="body" rows="6" class="form-control" required>{{old('body',$post->body)}}</textarea>
                      </div>
                      <div class="form-group">
                          <label for="iframe">Contenido embebido</label>
                          <textarea name="iframe" id="iframe" rows="3" class="form-control"> {{old('iframe',$post->iframe)}}</textarea>
                      </div>
                      <div class="form-group">
                          @csrf
                          <input type="submit" 
                          class="btn btn-block btn-sm btn-primary" 
                          value="Actualizar">
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection