<?php

require_once (FS_TEMPLATES . 'templateEngine.php');


/**
 * By extending the templateEngine class, we have created a template class that is specific to a
 * particular page or content type while still maintaining access to all of the class methods
 * defined in the base class.
 *
 * Class sampleTemplate
 */
class sampleTemplate extends templateEngine {

    /**
     * These are the data fields expected for this template. This
     * is a white list of fields.
     *
     * @var array
     */
    protected $whiteList = [];

    /**
     * The constructor will be used to save the HTML template to the $template class property.
     * The easiest way to do this is using HEREDOC format.
     *
     * sampleTemplate constructor.
     */
    public function __construct(){

        $temp = <<<HTML
    <h1>Sample Template</h1><p>This is where we put the html we want to render.</p>
    
HTML;
        $this->template = $temp;

    }

}