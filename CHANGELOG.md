Changelog
=========

Version numbering follows the pattern: *[major].[minor].[miniscule]*. All numbers begin at 0 and are reset whenever a preceding number is changed. Version 1.0.0 is the first release

* **Major** updates have new or significantly altered features.
* **Minor** updates have slightly altered features and/or a more efficient code.
* **Miniscule** updates contain only small edits.


v0.3.1 | 2013-12-16
-------------------

+ Added class for checking for data. So far it only checks for tables, but it will be expanded as work progresses.


v0.3.0 | 2013-12-13
-------------------

A few major

Decided on a design pattern for the system. It will be written using the PAC (presentation-abstraction-control) design pattern since this makes the most sense for web applications. Each class will have its own file, named using the pattern "[type].[class].php". For example, the class "Database" will reside in the file "abstraction.database.php". All classes will be in the "system" folder. If this becomes cluttered, sub-folders for the types can be made.

Ditched support for PSR-0 since there is no kind of reasonable documentation for actually making it work and instead wrote my own autoloader. This will technically make the code non-compliant with higher PSR standards, but I will try to follow the PSR-1 and PSR-2 standards anyway.

Also reworked the database handler a bit. It now uses PDO with prepared statements and should be safe from injection.


v0.2.2 | 2013-12-11
-------------------

I'm currently rearranging to code so that it adheres to PSR-0, PSR-1 and PSR-2. This may take a few revisions to get right.


v0.2.1 | 2013-12-08
-------------------

Development is once again on its way...

* Made the database settings into a static function rather than a variable.
* Reworked a few things in the database and added some tables.


v0.2.0 | 2013-11-21
-------------------

- Ditched the yii framework since learning it became a mental block, standing in the way of me actually working on the project.


v0.1.1 | 2013-10-27
-------------------

* Initialized the webbapp through the yii framework.


v0.1.0 | 2013-10-25
-------------------

+ Added the yii framework.


v0.0.1 | 2013-10-24
-------------------

* Creation of repository and basic files.