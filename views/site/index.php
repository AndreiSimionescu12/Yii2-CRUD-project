<?php

/** @var yii\web\View $this */

$this->title = 'Universitatea Ștefan cel Mare';
?>
<div class="site-index" style="height: 100vh; margin: 0; padding: 0; overflow: hidden; position: relative;">
    <!-- Video pe tot ecranul -->
    <iframe
            width="100%"
            height="100%"
            src="https://www.youtube.com/embed/XMYjA6gOMxI?si=T8Cu-URW1p4Jb_io&autoplay=1&mute=1&loop=1&playlist=XMYjA6gOMxI"
            title="Universitatea Ștefan cel Mare"
            frameborder="0"
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen>
    </iframe>

    <!-- Overlay cu umbră -->
    <div style="
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Umbră semi-transparentă */
        z-index: 2;">
    </div>
</div>