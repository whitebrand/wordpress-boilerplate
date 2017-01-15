<?php
namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Web\BaseController;

class AdminBaseController extends BaseController {

    public function __construct() {
        parent::__construct();
    }

    public function init() {
        $this->setMedia();
    }

    public function setMedia() {
        $this->addCSS( 'admin-base', APP_CSS_URL . '/admin.css', null, time() );

    }

    public function addCSS($handle, $src, $deps = array(), $ver = '1.0') {
        if( is_admin() ) {
            parent::addCSS($handle, $src, $deps, $ver);
        }
    }

    public function addJS($handle, $src, $deps = array(), $ver = '1.0', $in_footer = false) {
        if( is_admin() ) {
            parent::addJS($handle, $src, $deps, $ver, $in_footer);
        }
    }

}
