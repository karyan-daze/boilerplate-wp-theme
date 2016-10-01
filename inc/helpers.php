<?php
/**
 * Helper file for functions for the queries
 *
 * count_columns
 *
 */


/**
 * count columns is often used for counting the columns during a query.
 * returns the class that will be set
*/


function count_columns($count){


    switch ($count) {

        case '1':

            $class = 'container-fluid';

            break;

        case '2':

            $class = 'col-md-6';

            break;

        case '3':

            $class = 'col-md-4';

            break;

        case '4':

            $class = 'col-md-3';

            break;
        case '0';
            $class = 'col-md-12';

            break;
    }

    return $class;
}