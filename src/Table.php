<?php

namespace MichaelDrennen\ConsoleTable;

class Table {

    protected int   $width;
    protected array $columns;


    public function __construct( int $width = 80 ) {
        $this->width = $width;
    }

    public function addColumn( string $name, int $width, string $alignment = Column::LEFT ): void {
        $this->columns[ $name ] = new Column( $name, $width, $alignment );
    }

    public function addRow(): void {

    }
}