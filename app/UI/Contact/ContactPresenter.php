<?php

declare(strict_types=1);

namespace App\UI\Contact;

use Nette;


final class ContactPresenter extends Nette\Application\UI\Presenter
{
    public function renderDefault()
    {
        $this->template->title = "Kontakt";
    }
}
