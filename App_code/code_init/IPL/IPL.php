<?php
/**
 * CodeIgniter Extended
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT )
 *
 * Copyright (c ) 2017, Data Comp Research
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
 * @package     CodeIgniter
 * @author      EllisLab Dev Team
 * @copyright   Copyright (c ) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/ )
 * @copyright   Copyright (c ) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/ )
 * @license     http://opensource.org/licenses/MIT      MIT License
 * @link        http://ci-ext.dev.escrita-virtual.pt
 * @since       Version 3.0.0
 * @filesource
 */
defined( 'SYS_CORE_PATH' ) OR exit( 'No direct script access allowed' ) ;

/**
 * IPL Class Interface
 *
 * This class implements the IPL (Initial Program Load) for the CodeIgniter
 * Extended.
 *
 * @package     CodeIgniter Extended
 * @subpackage  Bootstrap
 * @category    Libraries
 * @author      EllisLab Dev Team
 * @link        http://codeigniter.com/user_guide/general/controllers.html
 */
interface IPL_Interface
{
    /**
     * Get the IPL class singleton object
     *
     * @static
     * 
     * @return  object
     */
    public static function &get_instance() ;

}


/**
 * IPL Class
 *
 * This class implements the IPL (Initial Program Load) for the CodeIgniter
 * Extended.
 *
 * @package     CodeIgniter Extended
 * @subpackage  Bootstrap
 * @category    Libraries
 * @author      EllisLab Dev Team
 * @link        http://codeigniter.com/user_guide/general/controllers.html
 */
class IPL implements IPL_interface
{

    /**
     * Reference to the SYS_CORE singleton
     *
     * @var     object
     */
    private static $instance ;


    /**
     * Class constructor
     *
     * @return  void
     */
    public function __construct()
    {
        self::$instance =& $this;

/**
        // Assign all the class objects that were instantiated by the
        // bootstrap file (CodeIgniter.php ) to local class variables
        // so that CI can run as one big super object.
        foreach( is_loaded() as $var => $class )
        {
            $this->$var =& load_class( $class );
        }

        $this->load =& load_class( 'Loader', 'core' );
        $this->load->initialize();
        log_message( 'info', 'Controller Class Initialized' );
 */
    }

    // --------------------------------------------------------------------

    /**
     * Get the IPL class singleton object
     *
     * @static
     * 
     * @return  object
     */
    public static function &get_instance()
    {
        return  self::$instance ;
    }

}
