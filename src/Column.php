<?php

namespace MichaelDrennen\ConsoleTable;

class Column {

    const LEFT  = 'left';
    const RIGHT = 'right';

    protected string $name;
    protected int    $width;
    protected string $alignment;

    public function __construct( string $name, int $width = 20, string $alignment = self::LEFT ) {
        $this->name      = $name;
        $this->width     = $width;
        $this->alignment = $alignment;
    }
}