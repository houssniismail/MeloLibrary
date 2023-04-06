const audio = document.getElementById('audio');
const replayBtn = document.getElementById('replay-btn');
function playAudio() {
    audio.play();
    document.getElementById('playemusic').classList.add('d-none');
    document.getElementById('pausemusic').classList.remove('d-none');
}

function pauseAudio() {
    audio.pause();
    document.getElementById('playemusic').classList.remove('d-none');
    document.getElementById('pausemusic').classList.add('d-none');
}

replayBtn.addEventListener('click', () => {
  audio.currentTime = 0;
  audio.play();
  document.getElementById('playemusic').classList.add('d-none');
  document.getElementById('pausemusic').classList.remove('d-none');
});

function comments(){
  document.getElementById('cardcomment').classList.toggle('d-none');
}