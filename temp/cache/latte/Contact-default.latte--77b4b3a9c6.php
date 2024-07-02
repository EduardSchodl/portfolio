<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\coding_portfolio\app\UI\Contact/default.latte */
final class Template_77b4b3a9c6 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\coding_portfolio\\app\\UI\\Contact/default.latte';

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
    <address>
        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 5 */;
		echo '/images/profile_picture.jpg">

        <table>
            <tbody>
                <tr>
                    <th>Jméno:</th>
                    <td>Eduard Schödl</td>
                </tr>

                <tr>
                    <th>Telefon:</th>
                    <td>+420 737 391 067</td>
                </tr>

                <tr>
                    <th>Email:</th>
                    <td><a style="text-decoration: none;" href="mailto:eduard.schodl@gmail.com">eduard.schodl@gmail.com</a></td>
                </tr>

                <tr>
                    <th>Adresa:</th>
                    <td>Čeminy 129, 330 33, Plzeň-sever</td>
                </tr>

                <tr>
                    <th>GitHub:</th>
                    <td><a style="text-decoration: none;" href="https://github.com/EduardSchodl">Profil na GitHub</a></td>
                </tr>
            </tbody>
        </table>
    </address>';
	}


	/** n:block="title" on line 2 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '    <h1 style="display: none">Kontakt</h1>
';
	}
}
