<?php namespace Modules\Core;
use \Caffeinated\Modules\Modules;
use Countable;
use \Storage;

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
     * installs a module from a github/packagist/bitbucket repo or a zip-file into the filesystem.
     * 1. load module-Zip
     * 2. Create Namespaced Module Folder (By checking out the module.json)
     * 3. Extract Module into folder
     * 4. publish all assets into the public directory (namespaced)
     * 4. Run migrations (php artisan module:migrate ModuleName)
     * 5. (optional) Run Seeds (php artisan module:seed ModuleName)
     */
    public function install($url) {
        return $file = $this->load($url);
        /*$temp = 'downloads/modules/zip/module.zip';
        Storage::put($temp, $file);

        $zippy = \Alchemy\Zippy\Zippy::load();
        $archive = $zippy->open(storage_path($temp));
        $archive->extract(storage_path('downloads/modules/test'));*/
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

    /**
     * Checks if a given Url is a Github Repository
     * @param $url
     * @return bool
     */
    public function isGithub($url) {
        $match = [];

        preg_match("/(github\.com)\/([\w\-\d\.]+)\/([\w\-\d\.\:]+)(\.git)/", $url, $match);

        if(isset($match[1]) && $match[1] == 'github.com') {
            return true;
        }
        return false;
    }

    /**
     * Checks if the given parameter is a zip-file
     * @param $file
     * @return bool
     */
    public function isZipFile($file) {
        return false;
    }

    /**
     * Checks if the given url is a repository on Packagist
     * @param $url
     * @return bool
     */
    public function isPackagist($url) {
        return false;
    }

    /**
     * Loads the actual remote File.
     * @param $url
     */
    public function load($url) {
        $type = camel_case('get_'.$this->detectRepoType($url).'_repo');
        return $this->$type($url);
    }

    /**
     * Load the file from remote.
     * @param $type
     * @param $file
     */
    public function loadFile($type, $file) {
        //
    }

    /**
     * Detects which Type of Repository is used.
     * @param $url
     * @return string describing which repository Type is used (git, packagist, bitbucked, zip file...)
     */
    public function detectRepoType($url) {
        if($this->isGithub($url)) {
            return 'github';
        }
        elseif($this->isPackagist($url)) {
            return 'packagist';
        }
        elseif($this->isZipFile($url)) {
            return 'zip';
        }
        else {
            return false;
        }
    }

    /**
     * Loads the given Repository's master.zip file from Github.com
     * TODO: refactor & optimize!
     * For now this script only executes a shell command using 'git clone'.
     * Should be done using a zip file being downloaded and extracted to
     * the desired location.
     * @param $url
     * @return mixed
     */
    public function getGithubRepo($url) {
        $path = storage_path('downloads/modules');
        exec("git clone $url $path");
        return "'git clone $url $path' executed'";
        /*if($this->isGithub($url)) {
            $url = preg_replace("/(github\.com)\/([\w\-\d\.]+)\/([\w\-\d\.\:]+)(\.git)/", "$1/$2/$3", $url);
            $path = '/archive/master.zip';
            $file = file_get_contents($url.$path);
            return $file;
        }
        return false;*/
    }

}