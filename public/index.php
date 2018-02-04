<?php

    /* 	Start-up activities prior to loading the page content.  This will make a connection
     *	to the database and start a session.
     */
    require_once($_SERVER['DOCUMENT_ROOT'] . '/../includes/application_includes.php');

    // Include the template files needed for the page
    require_once(FS_TEMPLATES . 'mainHeaderTemplate.php');
    require_once(FS_TEMPLATES . 'highlightedResortsTemplate.php');
    require_once(FS_TEMPLATES . 'mainFooterTemplate.php');


    // Load page header
    $header = new mainHeaderTemplate();
    echo $header->renderStatic();

?>
        <div class="container" >
        <!--Example row of columns-->
        <div class="row">

<?php
            // Load mocked up page content
            $resorts = [
                        ['id' => 1,
                            'title' => 'Killington',
                            'content' => "Killington is known for its diversity of terrain and grooming expertise, providing skiers and riders of all ability levels a choice of wide-open groomed cruisers, narrow classic New England runs, moguls, steeps and gladed skiing areas. Killington also offers multiple terrain features for snowboarders and freeskiers, including Bear Mountain’s signature terrain parks.",
                            'image' => 'killington.jpg'
                        ],
                        ['id' => 2,
                            'title' => 'Aspen',
                            'content' => "At Aspen Mountain you can ski down the same runs that hosted last year's World Cup finals, ride through gladed powder stashes, chase after the snowcat-towed Oasis Champagne Bar, or put together one quad-burning top-to-bottom after another. And all of this is just steps away from downtown Aspen. No wonder this mountain is a legend.",
                            'image' => 'aspen.jpg'
                        ],
                        ['id' => 3,
                            'title' => 'Whistler',
                            'content' => "There is an indisputable draw, an irresistible allure, a pull so strong that skiers and snowboarders the world over gravitate to these famed peaks.",
                            'image' => 'whistler.jpg'
                        ]
                    ];

            $content = new highlightedResortsTemplate();
            echo $content->data($resorts)->renderList();
?>
        </div>
        <hr>
    </div> <!-- /container -->

<?php

    // Load page header
    $footer = new mainFooterTemplate();
    echo $footer->renderStatic();