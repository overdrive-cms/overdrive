# Static Pages Module

The Static Pages module is just a really simple module for displaying static content on the site. The data of a page is stored in a database. Besides its content a page has a unique url from which the Module dispatches the content and displays it. If a page  could not be found a 404 Error will be thrown.

For Example if a user browses to the url `/about` the StaticPages module will run a query against the database and tries to find an entry that matches the `url` column. If found it will be displayed on the site.

TODO:
- option to store sites in files instead database only
- theme support
- Add Methods to add/update & delete pages
- drafts und public pages
- soft deletes
- page layouts

To see it in action run in command line:
`php artisan module:migrate StaticPages`
and
`php artisan module:seed StaticPages`

Then go to `overdrive.app/static` to see all static page entries. For a single page use the url-parameter as slug (`overdrive.app/about`)