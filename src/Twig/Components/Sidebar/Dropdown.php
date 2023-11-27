<?php

namespace App\Twig\Components\Sidebar;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
class Dropdown
{
    public string $title;
    public array $dropdownMenu;
}