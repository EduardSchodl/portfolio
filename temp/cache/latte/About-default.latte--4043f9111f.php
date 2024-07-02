<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\coding_portfolio\app\UI\About/default.latte */
final class Template_4043f9111f extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\coding_portfolio\\app\\UI\\About/default.latte';

	public const Blocks = [
		['content' => 'blockContent', 'title' => 'blockTitle'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('title', get_defined_vars()) /* line 2 */;
		echo '
    <section class="mainBody">
        <article>
            <p>
                
            </p>
        </article>
    </section>';
	}


	/** n:block="title" on line 2 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '    <h1 style="display: none">O mně</h1>
';
	}
}
