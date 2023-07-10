<?php

namespace App\Structural\Bridge;

final readonly class Blurred extends Display
{
    public function render(): string
    {
        $html = $this->content->getHtml();
        $css = $this->content->getCss();

        return <<<CONTENT
			$html;
			
			<style>
				$css
				.content {
                    filter: blur(5px);
                    -webkit-filter: blur(5px);
		        }
			</style>
CONTENT;
    }
}
