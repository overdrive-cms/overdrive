<?php
/**
 * Created by IntelliJ IDEA.
 * User: adrian
 * Date: 01.02.15
 * Time: 12:51
 */

namespace modules\Core\Handlers;


use Guzzle\Http\Client;
use Illuminate\Config\Repository;
use Illuminate\Filesystem\Filesystem;

/**
 * Class InstallationHandler
 * @package modules\Core\Handlers
 */
class InstallationHandler {

    protected $http;

    protected $files;

    protected $config;

    public function __construct(Repository $config, Filesystem $files, Client $http)
    {
        $this->files = $files;
        $this->config = $config;
        $this->http = $http;
    }

    public function installModule($uri)
    {
        //
    }

    public function installExtension($uri)
    {
        //
    }

    public function updateModule($module)
    {
        //
    }

    public function updateExtension($ext)
    {
        //
    }

    public function updateSystem()
    {
        //
    }

    public function requestServerFile($uri, $location)
    {
        //
    }

    public function checkForUpdates()
    {
        //
    }

    public function extractArchive($resource)
    {
        //
    }

    public function moveArchive($to)
    {
        //
    }

    public function dispatchRepository($uri)
    {
        //
    }
}