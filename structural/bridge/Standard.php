<?php

namespace structural\bridge;

class Standard extends Display {

	public function render (): string {

		$html = $this->content->getHtml();
		$css = $this->content->getCss();

		return <<<CONTENT
			$html;
			
			<style>
				$css	
			</style>
CONTENT;
	}

}