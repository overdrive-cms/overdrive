<?php
/**
 * Created by IntelliJ IDEA.
 * User: adrian
 * Date: 01.02.15
 * Time: 12:49
 */

namespace modules\Core\Handlers;
use Illuminate\Config\Repository;
use Illuminate\Filesystem\Filesystem;
use Modules\Core\Installer;


class ModulesHandler extends \Caffeinated\Modules\Handlers\ModulesHandler implements \Countable {

    protected $installer;
    protected $config;
    protected $files;
    /**
     * Constructor method.
     *
     * @param \Illuminate\Filesystem\Filesystem $files
     * @param \Illuminate\Config\Repository     $config
     */
    public function __construct(Filesystem $files, Repository $config, Installer $installer)
    {
        $this->config = $config;
        $this->files  = $files;
        $this->installer = $installer;
    }

    /**
     *
     */
    public function install()
    {
        //
    }

    public function update()
    {
        //
    }

    public function uninstall()
    {
        //
    }
}