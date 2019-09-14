<?php

namespace creational\factory_method;

class AudioBox extends Box {

	function getHtml (): string {
		return "<audio controls src='{$this->file->getFilePath()}' />";
	}
}
