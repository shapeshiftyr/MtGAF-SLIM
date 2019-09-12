# MtG.AF

MtG Image utility utilizing Amazon S3.

## Summary

MtGAF (www.mtg.af) was a quick and dirty service to directly link card images for my other projects. In the aftermath of mtgimage.com getting shut down, I wanted a private service to simplify and centralize images. This was also a learning experience in the Slim Framework, as I was not interested in Laravel's Lumen and Laravel core was far too large for this project.

## Install the Application

* `cp .env.example .env` and fill out DB info
* Download <http://mtgjson.com/json/AllSets.json.zip> and extract to `storage/`
* Run `php vendor/bin/phinx migrate -c config-phinx.php` from the project root to create the DB tables
* Run `php vendor/bin/phinx seed:run -c config-phinx.php` to seed the DB
* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writeable.

To run the application in development, you can also run this command. 

	php composer.phar start
