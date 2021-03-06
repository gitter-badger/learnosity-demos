<?php
include_once '../../config.php';
include_once 'includes/header.php';
?>

<div class="jumbotron section">
    <div class="pull-right toolbar">
        <ul class="list-inline">
            <li data-toggle="tooltip" data-original-title="Visit the documentation"><a href="http://docs.learnosity.com/itemsapi/" title="Documentation"><span class="glyphicon glyphicon-book"></span></a></li>
            <li data-toggle="tooltip" data-original-title="Next demo"><a href="../assess/"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></li>
        </ul>
    </div>
    <h1>Items API</h1>
    <div class="section-intro">
        <p>Learnosity's <b>Items API</b> provides a simple way to access content from the Learnosity item bank to pull in activities and assessments from the author
        site’s data store that can be embedded in your pages. It leverages the <a href="../questions/index.php">Questions API</a> and the
        <a href="../assess/index.php">Assess API</a> as appropriate.</p>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Assess</h2>
                </div>
                <div class="panel-body">
                    <p>With the flick of a switch make the items into an assessment. Truly write once - use anywhere.</p>
                    <p class="text-right">
                        <a class="btn btn-primary btn-md" href="./itemsapi_assess.php">Demo</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Inline</h2>
                </div>
                <div class="panel-body">
                    <p>Display items from the Learnosity item bank in no time with the Items API. The Items API builds on the Questions API's power and makes it quicker to integrate.</p>
                    <p class="text-right">
                        <a class="btn btn-primary btn-md" href="./itemsapi_inline.php">Demo</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Adaptive Assessment</h2>
                </div>
                <div class="panel-body">
                    <p>A dynamic assessment that adapts to the user's ability in real time.</p>
                    <p class="text-right">
                        <a class="btn btn-primary btn-md" href="./itemsapi_adaptive.php">Demo</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Branching Assessment</h2>
                </div>
                <div class="panel-body">
                    <p>A branching assessment that adapts which testlet to show a user based on performance.</p>
                    <p class="text-right">
                        <a class="btn btn-primary btn-md" href="./itemsapi_branching.php">Demo</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Worked Solutions (hints)</h2>
                </div>
                <div class="panel-body">
                    <p>Shows examples of using inline hints for questions.</p>
                    <p class="text-right">
                        <a class="btn btn-primary btn-md" href="./itemsapi_workedsolutions.php">Demo</a>
                    </p>
                </div>
            </div>
        </div>
            <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Formative Distractor Rationale</h2>
                </div>
                <div class="panel-body">
                    <p>Shows examples of instant feedback to students, as they attempt questions.</p>
                    <p class="text-right">
                        <a class="btn btn-primary btn-md" href="./itemsapi_distractors.php">Demo</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Activities</h2>
                </div>
                <div class="panel-body">
                    <p>Shows examples of loading assessments using activities authored in the Learnosity item bank.</p>
                    <p class="text-right">
                        <a class="btn btn-primary btn-md" href="./itemsapi_activities.php">Demo</a>
                    </p>
                </div>
            </div>
        </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Accessibility</h2>
                    </div>
                    <div class="panel-body">
                        <p>Showcases the Accessibility panel that allows students to configure accessibility options during an assessment.</p>
                        <p class="text-right">
                            <a class="btn btn-primary btn-md" href="./itemsapi_accessibility.php">Demo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'includes/footer.php';
