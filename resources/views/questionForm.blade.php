@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create Question</div>
                    <div class="card-body">
                        @if($edit === FALSE)
                            {!! Form::model($question, ['action' => 'QuestionController@store']) !!}
                        @else()
                            {!! Form::model($question, ['route' => ['questions.update', $question->id], 'method' => 'patch']) !!}
                        @endif
                        <div class="form-group">
                            {!! Form::label('body', 'Body') !!}
                            {!! Form::text('body', $question->body, [ 'class' => 'form-control','required' => 'required']) !!}

                            <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
                            <script>
                                CKEDITOR.replace( 'article-ckeditor' );
                            </script>

                        </div>
                        <button class="btn btn-success float-right" value="submit" type="submit" id="submit">Save
                        </button>
                        {!! Form::close() !!}
                    </div>
                    <hr>
                    <small>Written on {{$question->created_at}}</small>
                    
                </div>
            </div>
        </div>
    </div>
@endsection