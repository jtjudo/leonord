class youtubeVideoPlayer {
  constructor() {
    this.playButtons = document.querySelectorAll('.play-icon');

    this.init();
  }

  init() {
    this.playButtons.forEach(button => {
      button.addEventListener('click', (e) => {
        const playButton = e.target;

        const card = playButton.closest('.js-video-card');

        const {id} = card.dataset

        if (!id) {
          return;
        }

        this.openVideoById(id)
      })
    })
  }

  /** @param {string} id */
  openVideoById(id) {
    new Fancybox([
      {
        src: `<div class='iframeVideo'><iframe width=\"420\" height=\"315\"\n" +
          "src=\"https://www.youtube.com/embed/${id}\">\n" +
          "</iframe></div>`,
        type: "html",
      },
    ]);
  }
}


new youtubeVideoPlayer();

