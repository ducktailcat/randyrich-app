$(function () {
  var t = this;

  //LESSONS-DATATABLE
  $('#lessons-table').DataTable({
    "pageLength": 20,
    "lengthMenu": [10, 20, 40, 80],
    "columns": [
      null,
      null,
      null,
      null,
      null,
      { "width": "20%" },
      null
    ],
    "responsive": true
  });
  //LESSONS-VIDEO-PREVIEW
  $('#lessons-table').on( 'draw.dt', function () {
    $('.songtitle').on('click', function () {
      var videoUrl = $(this).attr('data');
      $('#lessonIframe').attr('src', 'https://www.youtube.com/embed/' + videoUrl)
      $('#videoModal').css('display', 'block').fadeIn();
      $('#videoModal').addClass('active');
    })
    $('#closeModal').on('click', function () {
      $('#lessonIframe').attr('src', '')
      $('#videoModal').css('display', 'none').fadeOut();
    });
} );
  $('.songtitle').on('click', function () {
    var videoUrl = $(this).attr('data');
    $('#lessonIframe').attr('src', 'https://www.youtube.com/embed/' + videoUrl)
    $('#videoModal').css('display', 'block').fadeIn();
    $('#videoModal').addClass('active');
  })
  $('#closeModal').on('click', function () {
    $('#lessonIframe').attr('src', '')
    $('#videoModal').css('display', 'none').fadeOut();
  });
});

//MUSIC-PLAYER

var cur = 0;
var playing = false;
var next = false;
var zeigerWinkel = 300;
var speakerLevel = 1;
var animId;

const AudioContext = window.AudioContext || window.webkitAudioContext;

const audioContext = new AudioContext();
var analyser = audioContext.createAnalyser();
analyser.fftSize = 1024;
analyser.smoothingTimeConstant = 0.7;
var bufferLength = analyser.fftSize;


// get the audio element
const audioElement = document.querySelector('audio');
if (audioElement) {
  const track = audioContext.createMediaElementSource(audioElement);
  track.connect(analyser);
  analyser.connect(audioContext.destination);
}
// pass it into the audio context

var songs = [
  { title: "She Rocks My World", src: "./songs/song1.mp3", band: "Randy Rich and The Poor Boys" },
  { title: "Rockin The Town", src: "./songs/song2.mp3", band: "Randy Rich and The Poor Boys" },
  { title: "El Paso", src: "./songs/song3.mp3", band: "The Crystalairs" },
  { title: "I\'m In Love", src: "./songs/song5.mp3", band: "Sandy Lane" },
  { title: "I\'m Gonna Have Things My Way", src: "./songs/song7.mp3", band: "Sun and Lightning" }
]


getAverageVolume = function (array) {
  var values = 0
  var average = 0

  for (var i = 0; i < array.length; i++) {
    values += array[i] * 1.5
  }
  average = values / array.length;
  return average
}

$(function () {
  $('#ampexPlayer').attr('src', songs[cur].src);

  $('#playbtn').on('click', function () {
    playSong();
  })

  $('#nextbtn').on('click', function () {
    $('#nextbtn').addClass('active');
    setTimeout(() => {
      $('#nextbtn').removeClass('active')
    }, 3000)
    playing = false
    cur++
    if (cur > songs.length - 1) {
      cur = 0
    }
    $('#ampexPlayer').attr('src', songs[cur].src);
    audioContext.suspend().then(() => {
      playSong()
    })
  })

  $('.song-reel-img').on('click', function () {
    playing = false;
    var i = $(this).index();
    $('#ampexPlayer').attr('src', songs[i].src);
    audioContext.suspend().then(() => {
      playSong()
    })
  })

  $('#ampexPlayer').on('ended', function () {
    console.log('ended');
    playing = false;
    cur++
    if (cur > songs.length - 1) {
      cur = 0
    }
    $('#ampexPlayer').attr('src', songs[cur].src);
    audioContext.suspend().then(() => {
      playSong()
    })
  })

  var playSong = function () {
    // check if context is in suspended state (autoplay policy)
    if (audioContext.state === 'suspended' || audioContext.state === 'running') {
      audioContext.resume();
    }
    if (playing === false) {
      audioElement.play();
      playing = true;
      $('#playbtn').addClass('btn-playing');
      $('.reel').removeClass('paused').addClass('reels-playing playing');
      $('#roller').removeClass('paused').addClass('roller-playing playing');
      soundAnimation();
    } else if (playing === true) {
      audioElement.pause();
      playing = false;
      $('#playbtn').removeClass('btn-playing');
      $('.reel').removeClass('playing').addClass('reels-playing paused');
      $('#roller').removeClass('playing').addClass('roller-playing paused');
      cancelAnimationFrame(animId);
      zeigerWinkel = 300;
      $('#zeiger').css({
        transform: 'rotate(' + zeigerWinkel + 'deg)',
        transition: 'transform 0.7s'
      });
      speakerLevel = 1;
      $('.speaker').css({ transform: 'scale(' + this.speakerLevel + ',' + this.speakerLevel + ')' });
    }
  }
  var soundAnimation = function () {
    animId = requestAnimationFrame(soundAnimation);
    var dataArray = new Uint8Array(bufferLength);
    analyser.getByteFrequencyData(dataArray);
    var average = getAverageVolume(dataArray);
    speakerLevel = 1 + average / 5000
    zeigerWinkel = 300 + average / 0.8;
    $('#zeiger').css({ transform: 'rotate(' + zeigerWinkel + 'deg)', transition: 'transform 0.01s' });
    $('.speaker').css({ transform: 'scale(' + this.speakerLevel + ',' + this.speakerLevel + ')' });
  }
})



