<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/css/playermusic.css')}}">
    <title>player music</title>
    <style>
        .cardcomment {
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
  padding: 20px;
  height: 400px;
  overflow-y: auto;
  width: 300px;
}

.card-header {
  border-bottom: 1px solid #eee;
  margin-bottom: 10px;
}

.card-title {
  font-size: 18px;
  margin: 0;
}

.comment {
  margin-bottom: 20px;
}

.comment-header {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.avatar {
  border-radius: 50%;
  height: 50px;
  margin-right: 10px;
  width: 50px;
}

.comment-author {
  font-size: 16px;
  margin: 0;
}

.comment-date {
  color: #999;
  font-size: 14px;
}

.comment-text {
  margin: 0;
}

.comment-text p {
  margin: 0;
}

@media only screen and (max-width: 600px){
    .card {
        display: none;
    }
	
}
    </style>
</head>
<body>
<div>
    <div class="container">
    <div class="player">

        <p class="primary-text"></p>
        <h2 class="playing_new">Anywhwre</h2>
        <div class="thumb" style="background-image: url('{{asset('/images/'. $piece->image)}}')"></div>  
        <div class="control">
            <div  class="btn btn-repeat"><i id="replay-btn" class="fas fa-redo"></i></div>
            <div class="btn btn-prev"><a href="{{asset('/playmusic/' . $piece['id']-1)}}"><i class="fas fa-step-backward"></i></a></div>
            <div  class="btn btn-toggle-play">
                <i id="playemusic" onclick="playAudio()" class="fas fa-play toggle-play "></i>
                <i id="pausemusic" onclick="pauseAudio()" class="fas fa-pause toggle-pause d-none"></i>
            </div>
            <div class="btn btn-next"><a href="{{asset('/playmusic/' . $piece['id']+1)}}"><i class="fas fa-step-forward"></i></a></div>
            <div class="btn btn-random"><i class="fas fa-random"></i></div>
        </div>
        <div class="progress-container">
            <p class="time-play"></p>
            <input id="progress" class="progress" type="range" value="0" step="0.1" max="100">
            <p class="time-song">3:00</p>
        </div>
        <audio id="audio" controls hidden>
            <source src="{{asset('/audios'. $piece->audio)}}"  type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>
         
            
        </audio>
        <div class="song-details">
            <p class="primary-text">up next</p>
            <div class="next">
                <div class="thumb" style="background-image: url({{asset('/images/'. $piece->image)}})"></div>
                <div class="text">
                    <h3 class="titel">Anywhwre</h3>
                    <p class="author">IKSON</p>
                </div>
            </div>
        </div>
        <div class="btn btn-playlist"><a href="{{asset('/home')}}"><i class="fas fa-list"></i></a></div>
      </div>
      <div class="playlist"></div>
      
</div>
<div class="" style="width: 50vh;">
<form action="{{asset('/createCommentaires')}}" method="POST">
    @csrf
    <input name="user_id" value="{{Auth::user()->id}}" type="hidden">
    @error('user_id')
        <p>{{$message}}</p>
    @enderror
    <input name="piece_musical_id" value="{{$piece['id']}}" type="hidden">
    @error('piece_musical_id')
    <p>{{$message}}</p>
    @enderror
    <textarea name="text" value="HELLo" style="resize: none; height:50px; width:480px; "  name="" id="" cols="30" rows="10"></textarea>
    @error('text')
    <p>{{$message}}</p>
    @enderror
    <button>comment</button>
</form>
</div>
</div>
<div class="cardcomment d-none">
    <div class="card-header">
      <h3 class="card-title">Comments</h3>
    </div>
    <div class="card-body">
      @foreach ($commentairs as $comm)
        <div class="comment">
          <div class="comment-header">
            <div class="comment-info">
              <span class="comment-date">{{$comm->created_at->diffForHumans()}}</span>
            </div>
          </div>
          <div class="comment-text">
            <p>{{$comm->text}}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>



    <script src="{{asset('/js/runMusic.js')}}"></script>
</body>
</html>
