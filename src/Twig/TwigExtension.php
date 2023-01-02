<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;


class TwigExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('initial', [$this, 'initialFilter'], ['is_safe' => ['html']]),
            new TwigFilter('bold', [$this, 'boldFilter'], ['is_safe' => ['html']]),
            new TwigFilter('phone', [$this, 'phoneFilter'], ['is_safe' => ['html']]),
        ];
    }

    public function initialFilter($content): string
    {
        return substr($content, 0, 1) . '. ';
    }

    public function boldFilter($content): string
    {
        return '<b>' . $content . '</b>';
    }

    public function phoneFilter($content): string
    {
        return '0' . substr($content, 0, 1) . ' ' . substr($content, 1, 2) . ' ' . substr($content, 3, 2) . ' ' . substr($content, 5, 2) . ' ' . substr($content, 7, 2);
    }
}
