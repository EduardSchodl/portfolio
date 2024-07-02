<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\coding_portfolio\app\UI\Portfolio/default.latte */
final class Template_c1340b13b6 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\coding_portfolio\\app\\UI\\Portfolio/default.latte';

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


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['project' => '5'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('title', get_defined_vars()) /* line 2 */;
		echo '
    <section class="projectsBody">
';
		foreach ($projects as $project) /* line 5 */ {
			echo '        <article class="projectArticle">
            <h1>';
			echo LR\Filters::escapeHtmlText($project->title) /* line 6 */;
			echo '</h1>

            <p>';
			echo LR\Filters::escapeHtmlText($project->content) /* line 8 */;
			echo '</p>

            <h3>Použité jazyky: ';
			echo LR\Filters::escapeHtmlText($project->ref('languages')->language) /* line 10 */;
			echo '</h3>

            <a href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($project->link)) /* line 12 */;
			echo '" target="_blank" rel="noreferrer noopener">Odkaz na GitHub</a>
        </article>
';

		}

		echo '    </section>

    <div class="pagination">
';
		if ($page > 1) /* line 17 */ {
			echo '            <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('default', [1])) /* line 18 */;
			echo '">První</a>
            &nbsp;|&nbsp;
            <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('default', [$page - 1])) /* line 20 */;
			echo '">Předchozí</a>
            &nbsp;|&nbsp;
';
		}
		echo '
        Stránka ';
		echo LR\Filters::escapeHtmlText($page) /* line 24 */;
		echo ' z ';
		echo LR\Filters::escapeHtmlText($lastPage) /* line 24 */;
		echo '

';
		if ($page < $lastPage) /* line 26 */ {
			echo '            &nbsp;|&nbsp;
            <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('default', [$page + 1])) /* line 28 */;
			echo '">Další</a>
            &nbsp;|&nbsp;
            <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('default', [$lastPage])) /* line 30 */;
			echo '">Poslední</a>
';
		}
		echo '    </div>

    <style>
        .projectArticle{
            background-color: lime;
            display: flex;
            margin-bottom: 10px;
            padding: 15px;
            flex-direction: column;
        }

        .projectsBody{
            display: flex;
            gap: 10px;
        }

        .pagination{
            text-align: center;
        }
    </style>';
	}


	/** n:block="title" on line 2 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '    <h1 style="display: none">Portfolio</h1>
';
	}
}
