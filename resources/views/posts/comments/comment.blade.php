<hr>
<div class="container">
    @if(auth()->check())
        {{--{{dd(session())}}--}}
        @if(session()->has('mensagem'))
            <div class="alert alert-success" role="alert">
                <strong>Sucesso!</strong> {{session()->get('mensagem')}}
            </div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>

        @endif
        <form action="{{route('comment.store')}}" method="post" class="form">
            @csrf
            <input type="hidden" name="post_id" value="{{$post->id}}">
            <div class="form-group">
                <input type="text" name="title" placeholder="Titulo" class="form-control">
            </div>
            <div class="form-group">
                <textarea name="body" cols="30" rows="5" placeholder="Sua mensagem" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    @else
        <p>Para comentar é necessário estar logado.... <a href="{{route('login')}}">Login</a></p>
    @endif
    <hr>
    <h3>Comentários ({{$post->comments->count()}})</h3>
    @forelse($post->comments as $comment)
        <div class="alert alert-light" role="alert">
            <h4 class="alert-heading">{{$comment->title}}</h4>
            <p>Por: {{$comment->user->name}}</p>
            <hr>
            <p class="mb-0">{{$comment->body}}</p>
        </div>
    @empty
        <p>Sem comentários</p>
    @endforelse
</div>
