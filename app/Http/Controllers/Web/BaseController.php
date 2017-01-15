<?php
namespace App\Http\Controllers\Web;

class BaseController {

    protected $data;

    public function __construct() {

    }

    /*
     *
     *
     */
    public function setMedia() {
        // TODO: jquery, bootstrap, etc
    }

    /*
     * Add js resource
     *
     */
    public function addJS( $handle, $src, $deps = array(), $ver = '1.0', $in_footer = false ) {
        wp_enqueue_script( __APP_PREFIX__ . $handle, $src, $deps, $ver, $in_footer );
    }

    /*
     * Add css resource
     *
     */
    public function addCSS( $handle, $src, $deps = array(), $ver = '1.0' ) {
        wp_enqueue_style( __APP_PREFIX__ . $handle, $src, $deps, $ver );
    }

    public function __get($name) {
        if(array_key_exists( $name, $this->data ) ) {
            return $this->data[$name];
        }

        return null;
    }

    public function __isset($name) {
        return isset($this->data[$name]);
    }

}
