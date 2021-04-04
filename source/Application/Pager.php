<?php


namespace Source\Application;


use CoffeeCode\Paginator\Paginator;


/**
 * Class Pager
 * @package Source\Application
 * @author Heráclito Thiago
 */
class Pager extends Paginator
{

    /**
     * Pager constructor.
     * @param string $link
     * @param string|null $title
     * @param array|null $first
     * @param array|null $last
     */
    public function __construct(string $link, ?string $title = null, ?array $first = null, ?array $last = null)
    {
        parent::__construct($link, $title, $first, $last);
    }
}