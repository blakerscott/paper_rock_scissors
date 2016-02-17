<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_results", function() use($app) {
        $my_RockPaperScissors = new RockPaperScissors;
        $check_results = $my_RockPaperScissors->playGame($_GET['playerone'], $_GET['playertwo']);
        return $app['twig']->render('rps_results.html.twig', array('result' => $check_results));
    });

		$app->get('/view_computer_results', function() use($app) {
				$my_RockPaperScissors = new RockPaperScissors;
				$check_results = $my_RockPaperScissors->playComputer($_GET['playerhuman']);
				return $app['twig']->render('computer_results.html.twig', array('computer_result' => $check_results));
		});

    return $app;
?>
