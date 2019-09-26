<?php

namespace structural\bridge;

class Blurred extends Display {

    private $blurredRules = <<<CSS
		.content {
			filter: blur(5px);
		  	-webkit-filter: blur(5px);
		}
CSS;


    public function render (): string {

        $html = $this->content->getHtml();
        $css = $this->content->getCss();

        return <<<CONTENT
			$html;
			
			<style>
				$css	
				$this->blurredRules
			</style>
CONTENT;
    }
}