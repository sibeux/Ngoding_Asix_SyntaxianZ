const audio = document.getElementById('audio');
const shuffleBtn = document.getElementById('shuffleBtn');
const repeatBtn = document.getElementById('repeatBtn');

let playlist = [
  'audio1.mp3',
  'audio2.mp3',
  'audio3.mp3'
];

let currentTrackIndex = 0;
let isShuffle = false;
let isRepeat = false;

audio.src = playlist[currentTrackIndex];

shuffleBtn.addEventListener('click', () => {
  isShuffle = !isShuffle;
  shuffleBtn.style.backgroundColor = isShuffle ? 'lightgreen' : '';
  if (isShuffle) {
    playlist = shuffleArray(playlist);
    currentTrackIndex = 0;
    audio.src = playlist[currentTrackIndex];
    audio.play();
  }
});

repeatBtn.addEventListener('click', () => {
  isRepeat = !isRepeat;
  repeatBtn.style.backgroundColor = isRepeat ? 'lightgreen' : '';
  audio.loop = isRepeat;
});

audio.addEventListener('ended', () => {
  if (isShuffle) {
    currentTrackIndex = getRandomIndex(playlist.length);
  } else {
    currentTrackIndex = (currentTrackIndex + 1) % playlist.length;
  }
  audio.src = playlist[currentTrackIndex];
  audio.play();
});

function shuffleArray(array) {
  let currentIndex = array.length;
  let temporaryValue, randomIndex;

  while (currentIndex !== 0) {
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex--;

    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}

function getRandomIndex(max) {
  return Math.floor(Math.random() * max);
}
