<?

namespace OworksApi;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \DI\Bridge\Slim\App;

/**
 * Description of Utils
 *
 */
class Utils {

    public static function initRoutes(App $app) {

        $app->get('/{name}', function (Request $request, Response $response, $name) {
            //  $name = $request->getAttribute('name');
            $response->getBody()->write("Hello, " . $name);

            return $response;
        });
    }

}
