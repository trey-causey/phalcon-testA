<?php namespace FormulaFantasy\Tests\Functional;

//use FormulaFantasy\Controllers\IndexController;
use PHPUnit\Framework\TestCase;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;

//use GuzzleHttp\Client;

class IndexControllerTest extends TestCase
{

    public function testIndex_HasUl()
    {
        if (extension_loaded('xdebug')) {
            ini_set('xdebug.cli_color', 1);
            ini_set('xdebug.collect_params', 0);
            ini_set('xdebug.dump_globals', 'on');
            ini_set('xdebug.show_local_vars', 'on');
            ini_set('xdebug.max_nesting_level', 100);
            ini_set('xdebug.var_display_max_depth', 4);
        }
        $client = new Client();
        $request = $client->request('GET', 'localhost:8989');
        $response = $request->filter('body > p');
        $this->assertCount(2, $response);
    }
}
