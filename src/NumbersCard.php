<?php

namespace Bissolli\NumbersCard;

use Laravel\Nova\Card;

class NumbersCard extends Card
{

    /**
     * The number to be shown on the card.
     *
     * @var int
     */
    public $number;

    /**
     * The title card.
     *
     * @var string
     */
    public $title;

    /**
     * TotalRecords constructor.
     *
     * @param int $number
     * @param string $title
     * @param string|null $width
     */
    public function __construct(int $number, ?string $title = null, ?string $width)
    {
        parent::__construct();

        $this->number = $number;
        $this->title = $title ?? __('Total');
        $this->width = $width ?? '1/3';
    }

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'nova-numbers-card';
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return array_merge([
            'width'   => $this->width,
            'number'   => $this->number,
            'title'   => $this->title,
        ], parent::jsonSerialize());
    }
}
