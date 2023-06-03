class AudioPlayer {
  constructor() {
    this.currentSong = null
    this.currentArtist = null
    this.currentArtwork = null
    this.songLength = null
    this.playlist = []
    this.previousSong = null
    this.nextSong = null
    this.playbackDevice = null
    this.shuffle = false
    this.repeat = false
    this.volume = 0
    this.currentTime = 0
    this.minimized = false
  }

  playSong(song) {
    this.currentSong = song

    this.displayArtistName(this.currentSong.artist)
    this.displayArtWork(this.currentSong.artwork)
  }

  //internal methods
  displayArtistName(artistName) {
    document.querySelector('.artist-name').innerHTML = artistName
  }

  displayArtWork(artwork) {}

  skipTrack() {
    const nextSong = this.getNextSong()

    this.playSong(nextSong)
  }

  getNextSong() {
    // finds the next song in the playlist if there is one
  }
}
