<?

require '../vendor/autoload.php';

use \DI\Bridge\Slim\App as App;
use \DI\ContainerBuilder as ContainerBuilder;
use \OworksApi\Utils as Utils;

$app = new class() extends App {

    protected function configureContainer(ContainerBuilder $builder) {
        $path = '../private/config';
        $builder->useAnnotations(true);
        $builder->addDefinitions(__DIR__ . DIRECTORY_SEPARATOR . $path . DIRECTORY_SEPARATOR . 'config.php');
        $builder->addDefinitions(__DIR__ . DIRECTORY_SEPARATOR . $path . DIRECTORY_SEPARATOR . 'beans.php');
    }
};

Utils::initRoutes($app);

$app->run();
