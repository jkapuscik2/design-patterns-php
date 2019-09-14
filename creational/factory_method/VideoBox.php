<?php

namespace creational\factory_method;

class VideoBox extends Box {

	function getHtml (): string {
		return "<video autoplay loop src='{$this->file->getFilePath()}' />";
	}
}
