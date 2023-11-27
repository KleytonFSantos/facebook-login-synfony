<?php

namespace App\Twig\Components\Sidebar;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
class Menu
{
    public string $path;
    public string $title;
    public string $icon;
}