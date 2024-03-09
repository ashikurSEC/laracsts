<?php 

require_once 'index.view.php';

/**
 * Undocumented function
 *
 * @return void
 */
function test_project() {
    return 'Hello';
}

/**
 * Calculate summation
 *
 * @param integer $a
 * @param integer $b
 * @return integer
 */
function get_some(int $a, int $b): int {
    return $a + $b;
}