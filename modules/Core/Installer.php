<?php
/**
 * Created by IntelliJ IDEA.
 * User: adrian
 * Date: 01.02.15
 * Time: 12:33
 */

namespace Modules\Core;


use Illuminate\Config\Repository;
use Illuminate\Filesystem\Filesystem;
use modules\Core\Handlers\InstallationHandler;

class Installer {
    protected $handler;
    protected $files;
    protected $config;

    public function __construct(InstallationHandler $handler, Repository $config, Filesystem $files)
    {
        $this->handler = $handler;
        $this->files = $files;
        $this->config = $config;
    }
    /**
     * Installs a module
     * @param $resource
     */
    public function newModule($resource)
    {
        $this->handler->installModules($resource);
    }

    /**
     * Installs a plugin
     * @param $resource
     */
    public function plugin($resource)
    {
        //
    }
}