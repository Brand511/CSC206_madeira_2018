<?php
require_once(FS_TEMPLATES . 'templateEngine.php');

class highlightedResortsTemplate extends templateEngine
{

    /**
     * These are the data fields expected for this template. This
     * is a white list of fields.
     *
     * @var array
     */
    protected $whiteList = ['id', 'title', 'content', 'image'];

    public function __construct(){

        $temp = <<<HTML

        <div class="col-md-4" >
            <h2 >{{title}}</h2 >
            <img class="w-90" src = "/assets/images/{{image}}" >
            <p >{{content}}</p >
            <p ><a class="btn btn-secondary" href = "/fullReview.php?id={{id}}" role = "button" > Full Review &raquo;</a ></p >
        </div >

HTML;

        $this->template = $temp;
    }

}

?>

