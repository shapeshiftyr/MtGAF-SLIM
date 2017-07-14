# MtG.AF

MtG Image utility utilizing Amazon S3.

## Install the Application

* `cp .env.example .env` and fill out DB info
* Import `storage/sets.sql` and `storage/cards.sql` to your DB.
* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writeable.

To run the application in development, you can also run this command. 

	php composer.phar start

Run this command to run the test suite

	php composer.phar test
