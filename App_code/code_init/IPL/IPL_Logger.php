<?php
/**
 * CodeIgniter Extended
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT )
 *
 * Copyright (c ) 2014 - 2015, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software" ), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package     CodeIgniter Extended
 * @author      EllisLab Dev Team
 * @copyright   Copyright (c ) 2017, Data Comp Research
 * @license     http://opensource.org/licenses/MIT    MIT License
 * @link        http://ci-ext.dev.escrita-virtual.pt
 * @since       Version 3.0.0
 * @filesource
 */
defined( 'SYS_CORE_PATH' ) OR exit( 'No direct script access allowed' ) ;

/**
 * Exceptions Class
 *
 * @package     CodeIgniter
 * @subpackage  Libraries
 * @category    Exceptions
 * @author      EllisLab Dev Team
 * @link        http://codeigniter.com/user_guide/libraries/exceptions.html
 */
class IPL_Logger
{
    /**
     * Nesting level of the output buffering mechanism
     *
     * @var     int
     */
    public $ob_level ;

    /**
     * List of available error levels
     *
     * @var     array
     */
    public $levels = array(
                            E_ERROR             =>  'Error',
                            E_WARNING           =>  'Warning',
                            E_PARSE             =>  'Parsing Error',
                            E_NOTICE            =>  'Notice',
                            E_CORE_ERROR        =>  'Core Error',
                            E_CORE_WARNING      =>  'Core Warning',
                            E_COMPILE_ERROR     =>  'Compile Error',
                            E_COMPILE_WARNING   =>  'Compile Warning',
                            E_USER_ERROR        =>  'User Error',
                            E_USER_WARNING      =>  'User Warning',
                            E_USER_NOTICE       =>  'User Notice',
                            E_STRICT            =>  'Runtime Notice'
                          ) ;

    /**
     * Class constructor
     *
     * @return  void
     */
    public function __construct()
    {
        $this->ob_level = ob_get_level() ;
        // Note: Do not log messages from this constructor.
    }

    // --------------------------------------------------------------------

    /**
     * Exception Logger
     *
     * Logs PHP generated error messages
     *
     * @param   int     $severity       Log level
     * @param   string  $message        Error message
     * @param   string  $filepath       File path
     * @param   int     $line           Line number
     * 
     * @return  void
     */
    public function log_exception( $severity, $message, $filepath, $line )
    {
        $severity = isset( $this->levels[ $severity ] )
            ?   $this->levels[ $severity ]
            :   $severity
            ;
        log_message( 'error', 'CI_Extended->Severity: ' . $severity . ' --> ' . $message . ' ' . $filepath . ' ' . $line ) ;
    }

}
