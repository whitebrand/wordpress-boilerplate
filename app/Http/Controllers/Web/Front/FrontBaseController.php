<?php
namespace App\Http\Controllers\Web\Front;

use App\Http\Controllers\Web\BaseController;

class FrontBaseController extends BaseController {

    protected $title;
    protected $description;
    protected $template;

    public function __construct() {
        parent::__construct();

    }

    /*
     * Initialize header
     */
    public function initHeader() {
        $title = $this->title;

        add_filter( 'wp_title', function() use ($title) {

            return $title . ' - ' . get_bloginfo( 'name', 'display' );
        });
    }

    /*
     * Set page title
     *
     */
    public function setTitle( $title ) {
        global $post;

        $this->title = $post->post_title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    /*
     * Set page description
     *
     */
    public function setDescription( $description ) {
        $this->description = $description;
    }

    /*
     * Set page template
     *
     */
    public function setTemplate( $template ) {
        $this->template = $template;
    }

    public function getTemplate() {
        return $this->template;
    }

    public function setMedia() {
        parent::setMedia();

        // App resources
        $this->addCSS( 'app', APP_CSS_URL . '/app.css', null, time() );
        $this->addJS( 'app', APP_JS_URL . '/app.js', array( 'jquery' ), time() );
    }

    public function addCSS($handle, $src, $deps = array(), $ver = '1.0') {
        if( ! is_admin() ) {
            parent::addCSS($handle, $src, $deps, $ver);
        }
    }

    public function addJS($handle, $src, $deps = array(), $ver = '1.0', $in_footer = false) {
        if( ! is_admin() ) {
            parent::addJS($handle, $src, $deps, $ver, $in_footer);
        }
    }

    /*
     *
     *
     */
    public function setBodyClasses( ) {
        // TODO: base css classes (bootstrap, etc)
    }

    public function addBodyClass( $class_name ) {
        add_filter( 'body_class', function( $classes ) use ( $class_name ) {
            $classes[] = $class_name;

            return $classes;
        });
    }

    /*
     * Render template with data
     *
     */
    public function renderView() {
        $this->initHeader();
        $this->setMedia();
        $this->setBodyClasses();

        if( ! empty( $this->template) ) {
            include __VIEWS_DIR__ . '/' . $this->template . '.php';
        }
    }

}
