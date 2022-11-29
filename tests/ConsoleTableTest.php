<?php

use PHPUnit\Framework\TestCase;


class ConsoleTableTest extends TestCase {

    /**
     * @test
     */
    public function shouldDisplayTable() {

        $table = new \MichaelDrennen\ConsoleTable\ConsoleTable();

        $table->addColumn( 'id', 10 );
        $table->addColumn( 'name', 20 );
        $table->addColumn( 'age', 4, MichaelDrennen\ConsoleTable\ConsoleTable::right );

        $table->addRow( 1, 'Mike', 43 );
        $table->addRow( 2, 'Katie', 29 );

        $table->render();
    }


}