<?php

require_once (FS_TEMPLATES . 'templateEngine.php');


class mainHeaderTemplate extends templateEngine
{

    /**
     * This is the html code that makes up the template.  This will
     * be unique to and set in eacb instance of the class
     *
     * @var null
     */

    public function __construct()
    {
        $temp = <<<HTML
        <!doctype html>
            <html lang="en">
            <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            
                <!-- Custom styles for this template -->
                <link href="/assets/css/styles.css" rel="stylesheet">
            
            
                <title>Resort Reviews</title>
            </head>
            <body>
            <nav class="navbar navbar-dark bg-dark navbar-expand-md bg-faded justify-content-center">
                <a href="/" class="navbar-brand d-flex w-50 mr-auto"><img src="/assets/images/resort_reviews.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="collapsingNavbar3">
                    <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="#">All Resorts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Admin</a>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <main role="main">
            
                <!-- Main jumbotron for a primary marketing message or call to action -->
                <div class="jumbotron">
                    <div class="container">
                        <h1 class="display-3">Resort Reviews</h1>
                        <p>An unbiased look at the great ski resorts of North America.  Let us help you find the perfect place to ski and stay.</p>
                        <p><a class="btn btn-outline-light btn-sm" href="#" role="button">Featured Review &raquo;</a></p>
                    </div>
                </div>
HTML;

        $this->template = $temp;

    }
}