<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
class RedirectLink
{
    public string $message;
    public string $link;
    public string $text;
}