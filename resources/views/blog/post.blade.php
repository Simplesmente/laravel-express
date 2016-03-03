@extends('blog.template')

@section('content')

@foreach ($posts as $post)

<div class="row">
      <br>
      <div class="col-md-2 col-sm-3 text-center">
        <a class="story-img" href="#"><img src="//placehold.it/100" style="width:100px;height:100px" class="img-circle"></a>
      </div>
      <div class="col-md-10 col-sm-9">
        <h3>{{ $post->title}}</h3>
        <div class="row">
          <div class="col-xs-9">
            <p>{{ $post->content}}</p>
            <p class="lead"><button class="btn btn-default">Read More</button></p>
            <p class="pull-right"><span class="label label-default">keyword</span> <span class="label label-default">tag</span> <span class="label label-default">post</span></p>
            <ul class="list-inline"><li><a href="#">2 Days Ago</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i>
              <ul>
                  </a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 34 Shares</a></li></ul>


                @if($post->comments)
                  @foreach ($post->comments as $comment)

                    <li><a href="#"><i class="glyphicon glyphicon-comment"></i> {{count($comment)}} Comments</a></li>
                    <div class="media">
                        <div class="media-left media-middle">
                          <a href="#">
                            <img class="media-object"
                            height="50" width="50" src="data:image/jpeg;base64,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" alt="...">

                          </a>
                        </div>

                    <div class="media-body">
                      <h4 class="media-heading">{{$comment->name}}</h4>
                      <p>
                        {{$comment->comment}}
                      </p>
                    </div>
                  </div>


                  @endforeach
                @else
                    <li>No comments</li>
                @endif

              </ul>
            </ul>
            </div>
          <div class="col-xs-3"></div>
        </div>
        <br><br>
      </div>
    </div>
    <hr>

@endforeach

@endsection
