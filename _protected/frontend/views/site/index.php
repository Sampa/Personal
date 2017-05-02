<?php
use sampa\gallery\Gallery;
/* @var $this yii\web\View */
$this->title = Yii::t('app', Yii::$app->name);
?>
<?php $items = [
    [
    'title' => 'Sintel',
    'href' => 'http://media.w3.org/2010/05/sintel/trailer.mp4',
    'type' => 'video/mp4',
    'poster' => 'http://media.w3.org/2010/05/sintel/poster.png'
    ],
    [
    'title' => 'Big Buck Bunny',
    'href' => 'http://upload.wikimedia.org/wikipedia/commons/7/75/Big_Buck_Bunny_Trailer_400p.ogg',
    'type' => 'video/ogg',
    'poster' => 'http://upload.wikimedia.org/wikipedia/commons/thumb/7/70/Big.Buck.Bunny.-.Opening.Screen.png/' .
    '800px-Big.Buck.Bunny.-.Opening.Screen.png'
    ]
];
    $focks = [
        [
            'url' => '/uploads/noodle.html',
            'src' => 'noodle.html',
            'options' =>[
                'title' => 'FOCKS',
                'type' => 'text/html'
            ],
        ],
        [

            'title' => 'TOMATO TEST',
            'href' => '/uploads/tomato.html',
            'type' => 'text/html'
        ]
    ];
    echo Gallery::widget(['items' => $focks]);
?>

<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully installed Yii2 improved application template</p>

        <p><a class="btn btn-lg btn-success" href="http://www.freetuts.org/tutorial/view?id=6">Read our tutorial</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-3">
                <h3>Yii documentation</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h3>Yii forum</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h3>Yii extensions</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h3>Freetuts.org</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.freetuts.org/">Freetuts.org &raquo;</a></p>
            </div>
        </div>

    </div>
</div>

