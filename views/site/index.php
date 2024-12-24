<div class="site-index" style="height: 100vh; margin: 0; padding: 0; overflow: hidden; position: relative;">
    <video
            id="video-player"
            autoplay
            loop
            muted
            style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: 1;">
        <source src="<?= Yii::getAlias('@web/videos/videoplayback.mp4') ?>" type="video/mp4">
        Browserul tău nu suportă redarea video.
    </video>

    <div style="
        position: absolute;
        bottom: 20px;
        left: 20px;
        z-index: 2;">
        <button id="unmute-button" style="
            background-color: black;
            color: white;
            font-size: 1rem;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;">
            Activează Sunetul
        </button>
    </div>

    <script>
        const video = document.getElementById('video-player');
        const unmuteButton = document.getElementById('unmute-button');

        unmuteButton.addEventListener('click', () => {
            video.muted = false; // Dezactivează mute
            video.play(); // Pornește videoclipul
            unmuteButton.style.display = 'none'; // Ascunde butonul după activare
        });
    </script>
</div>