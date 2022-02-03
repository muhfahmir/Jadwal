# Jadwal
projek ini berkaitan denga menggunakan multi database dan docker. project ini merupakan tugas akhir dari mata kuliah praktikum Cloud computing

## Requiremnts
- Docker
- mysql
- codeigniter 3

## How to use
1. Download file projek ini atau melakukan clone dengan cara 
``` 
git clone https://github.com/muhfahmir/jadwal.git
```
2. membuat 2 database sesuai dengan yang anda inginkan
3. settings nama database pada file confignya
```
application\config\database.php
```
jika dibuka file database.php, akan terlihat seperti berikut
```
$db['default'] = array(
	'dsn'	=> '',
	//'hostname' => 'localhost',
	'hostname' => 'db1_jadwal',
	'username' => 'root',
	//'password' => '',
	'password' => 'ptcc',
	'database' => 'jadwal',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
	$db['jadwal_users'] = array(
	'dsn'	=> '',
	//'hostname' => 'localhost',
	'hostname' => 'db2_users',
	'username' => 'root',
	//'password' => '',
	'password' => 'ptcc',
	'database' => 'jadwal_users',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
```
4. melakukan import database dari file yang berada di folder db, sesuaikan dengan namanya.
```
jadwal.sql => untuk db jadwal
jadwal_users => untuk db jadwal_users
```
5. setelah itu anda dapat membukanya di localhost tempat anda menyimpan projek ini




###################
What is CodeIgniter
###################

CodeIgniter is an Application Development Framework - a toolkit - for people
who build web sites using PHP. Its goal is to enable you to develop projects
much faster than you could if you were writing code from scratch, by providing
a rich set of libraries for commonly needed tasks, as well as a simple
interface and logical structure to access these libraries. CodeIgniter lets
you creatively focus on your project by minimizing the amount of code needed
for a given task.

*******************
Release Information
*******************

This repo contains in-development code for future releases. To download the
latest stable release please visit the `CodeIgniter Downloads
<https://codeigniter.com/download>`_ page.

**************************
Changelog and New Features
**************************

You can find a list of all changes for each release in the `user
guide change log <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/changelog.rst>`_.

*******************
Server Requirements
*******************

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************

Please see the `installation section <https://codeigniter.com/user_guide/installation/index.html>`_
of the CodeIgniter User Guide.

*******
License
*******

Please see the `license
agreement <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.

*********
Resources
*********

-  `User Guide <https://codeigniter.com/docs>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community Slack Channel <https://codeigniterchat.slack.com>`_

Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_
or via our `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.

***************
Acknowledgement
***************

The CodeIgniter team would like to thank EllisLab, all the
contributors to the CodeIgniter project and you, the CodeIgniter user.
