<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\coding_portfolio\app\UI/@layout.latte */
final class Template_7471af5d57 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\coding_portfolio\\app\\UI/@layout.latte';

	public const Blocks = [
		['scripts' => 'blockScripts'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">

	<title>';
		if ($this->hasBlock('title')) /* line 7 */ {
			$this->renderBlock('title', [], function ($s, $type) {
				$ʟ_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('stripHtml', $ʟ_fi, $s));
			}) /* line 7 */;
			echo ' ';
		} else /* line 7 */ {
			echo ' Webpage ';
		}
		echo '</title>
	<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 8 */;
		echo '/styles/css.css">
	<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 9 */;
		echo '/styles/contacts.css">
</head>

<body>
';
		foreach ($flashes as $flash) /* line 13 */ {
			echo '	<div';
			echo ($ʟ_tmp = array_filter(['flash', $flash->type])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 13 */;
			echo '>';
			echo LR\Filters::escapeHtmlText($flash->message) /* line 13 */;
			echo '</div>
';

		}

		echo '
	<header>
		<div>
			<h1 id="title">Eduard Schödl</h1>
			<p id="title">Software developer</p>
		</div>

		<nav>
			<ul class="navList">
				<li class="listItems"><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:')) /* line 23 */;
		echo '"';
		echo ($ʟ_tmp = array_filter([$presenter->isLinkCurrent('Home:') ? 'active' : null])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 23 */;
		echo ' aria-current="page">Hlavní stránka</a></li>
				<li class="listItems"><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Portfolio:')) /* line 24 */;
		echo '"';
		echo ($ʟ_tmp = array_filter([$presenter->isLinkCurrent('Portfolio:') ? 'active' : null])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 24 */;
		echo ' aria-current="page">Portfolio</a></li>
				<li class="listItems"><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('About:')) /* line 25 */;
		echo '"';
		echo ($ʟ_tmp = array_filter([$presenter->isLinkCurrent('About:') ? 'active' : null])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 25 */;
		echo ' aria-current="page">O mně</a></li>
				<li class="listItems"><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Contact:')) /* line 26 */;
		echo '"';
		echo ($ʟ_tmp = array_filter([$presenter->isLinkCurrent('Contact:') ? 'active' : null])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 26 */;
		echo ' aria-current="page">Kontakt</a></li>
			</ul>
		</nav>
	</header>


';
		$this->renderBlock('content', [], 'html') /* line 32 */;
		echo "\n";
		$this->renderBlock('scripts', get_defined_vars()) /* line 34 */;
		echo '</body>
</html>
';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['flash' => '13'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block scripts} on line 34 */
	public function blockScripts(array $ʟ_args): void
	{
		echo '	<script src="https://unpkg.com/nette-forms@3/src/assets/netteForms.js"></script>
';
	}
}
