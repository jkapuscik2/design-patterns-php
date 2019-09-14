<?php

namespace creational\factory_method;

class FileItem {

	private $type;
	private $filePath;

	const TYPE_IMG = 'image';
	const TYPE_VIDEO = 'video';
	const TYPE_AUDIO = 'audio';

	public function __construct (string $type, string $filePath) {
		$this->type = $type;
		$this->filePath = $filePath;
	}

	public function getType (): string {
		return $this->type;
	}

	public function getFilePath (): string {
		return $this->filePath;
	}
}