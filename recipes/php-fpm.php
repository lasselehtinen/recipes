<?php
/* (c) Lasse Lehtinen <lasse.lehtinen@iki.fi>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Restart php-fpm
 */
task('php-fpm:restart', function () {
    run('service php-fpm restart');
})->desc('Restarting php-fpm processe');

/**
 * Reload php-fpm
 */
task('php-fpm:reload', function () {
    run('service php-fpm reload');
})->desc('Reloading php-fpm processe');