<?php

if (!defined('INSITE')) die('Sorry, you are not valid user to access this file');

/**
 * 
 * Class Config
 *
 * PHP version 5.3.13
 *
 * MIT License
 *
 *
 * Permission is hereby granted, free of charge, to any person
 * obtaining a copy of this software and associated documentation
 * files (the "Software"), to deal in the Software without
 * restriction, including without limitation the rights to use,
 * copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NON INFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 *
 * @category PHP Class
 * @package Config
 * @author Neeraj Singh <neeraj.singh@lbi.co.in>
 * @copyright 2013-14 The PHP Group Of DigitasLBi India
 * @license http://www.php.net/license/3_01.txt PHP License 3.01
 * @version 1.3 Beta
 */
/* Class Config Start */

class Config {

    /**
     * DATABASE SETTINGS
     *
     * using _ (underscore )to make it as protected/safe
     */
    const _SERVER = 'MY-SAFE-SERVER-NAME';
    const _USER = 'MY-SAFE-DB-USER';
    const _PASSWORD = 'MY-SAFE-DB-PASSWORD';
    const _DATABASE = 'MY-DB-NAME';

    /**
     * SITE SETTINGS
     *
     * not starting with _ (underscore) so
     * it will available for jCofig
     */
    const TITLE = 'This is jConfig Page Title';
    const DESCRIPTION = 'This is jConfig Page Description';
    const KEYWORDS = 'This is jConfig Page Keywords';

    /**
     * Returns all public access class constant with value
     * as an array data who not started with _ (underscore)
     *
     * @return array
     */
    public function getConfigData() {
        // get all const of class
        $configConstant = new ReflectionClass(__CLASS__);
        // return all public/unprotected constant data
        return @array_flip(array_filter(array_flip($configConstant->getConstants()), function($array) {
                            return $array[0] != '_';
                        }));
    }

}

/* Class Config End */
