<?php

declare(strict_types=1);

namespace App\UI\Portfolio;

use Nette;
use Nette\Application\UI\Form;


final class PortfolioPresenter extends Nette\Application\UI\Presenter
{
    public function __construct(private Nette\Database\Explorer $database)
    {
    } 

    protected function getProjects()
    {
        return $this->database->table('projects');
    }

    public function renderDefault(int $page = 1)
    {
        $projects = $this->getProjects();

		$lastPage = 0;
		$this->template->projects = $projects->page($page, 3, $lastPage);
        

		$this->template->page = $page;
		$this->template->lastPage = $lastPage;
    }
}
