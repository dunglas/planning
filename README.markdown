About Planning
==============
Planning is a planning manager for associations. It allows members to create events and place himself on duty. It also has a directory of venues.

This is an experimental project from [Kévin Dunglas](http://lapin-blanc.net) designed to test Symfony2 and Doctrine 2. 

Install
=======
To configure your DB, edit your `/planning/config/config.xml`.

Create your database and tables:

    php planning/console doctrine:database:drop
    php planning/console doctrine:database:create
    php planning/console doctrine:schema:create

Generate the doctrine proxies:

    php planning/console doctrine:generate:proxies

Load fixtures:

    php planning/console doctrine:data:load
