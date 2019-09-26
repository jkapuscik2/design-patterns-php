<?php

namespace structural\bridge;

class Video extends Content {

    public function getCss (): string {
        return <<<VID
		.content {
			width: 100%; 
		}
		video::-webkit-media-controls-start-playback-button {
            display: none;
		}
VID;
    }

    public function getHtml (): string {
        return "<video class='content' src='$this->filePath' autoplay muted loop></video>";
    }
}