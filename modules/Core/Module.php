<?php namespace Modules\Core;
use \Caffeinated\Modules\Modules;
use Countable;

/**
 * Class Module
 * Extends the Caffeinated/Modules Class with un/install functionality.
 * For more details see: http://codex.caffeinated.ninja/modules/master/
 *
 * @package Modules\Core
 */
class Module extends Modules implements Countable {

    /**
     * TODO:
     * installs a module from a github/packagist repo or a zip-file into the filesystem.
     * 1. load module-Zip
     * 2. Create Namespaced Module Folder (By checking out the module.json)
     * 3. Extract Module into folder
     * 4. publish all assets inot the public directory (namespaced)
     * 4. Run migrations (php artisan module:migrate ModuleName)
     * 5. (optionla) Run Seeds (php artisan module:seed ModuleName)
     */
    public function install() {
        //
    }

    /**
     * TODO:
     * removes a module from the filesystem and database permanently.
     * 1. roll back all migrations (php artisan module:migrate-reset ModuleName)
     * 2. Delete all assets that might would have been published into the public directory
     * 3. Delete the modules folder
     */
    public function uninstall() {
        //
    }


}