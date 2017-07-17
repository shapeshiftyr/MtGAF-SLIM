# MtG.AF

MtG Image utility utilizing Amazon S3.

## Install the Application

* `cp .env.example .env` and fill out DB info
* Download <http://mtgjson.com/json/AllSets.json.zip> and extract to `storage/`
* Run `php vendor/bin/phinx migrate -c config-phinx.php` from the project root to create the DB tables
* Run `php vendor/bin/phinx seed:run -c config-phinx.php` to seed the DB
* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writeable.

To run the application in development, you can also run this command. 

	php composer.phar start