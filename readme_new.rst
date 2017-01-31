############################
What is CodeIgniter Extended
############################

CodeIgniter is an Application Development Framework - a toolkit - for people
who build web sites using PHP.
Its goal is to enable you to develop projects much faster than you could if
you were writing code from scratch, by providing a rich set of libraries for
commonly needed tasks, as well as a simple interface and logical structure
to access these libraries.
CodeIgniter lets you creatively focus on your project by minimizing the amount
of code needed for a given task.

So, based on the coded of CodeIgniter, CodeIgniter Extended makes some few basic
changes to CodedIgniter code, in order to mantain ALL CodeIgniter features but
at the same time, achieve some new features:

--> Total separation of:
	-->	Application Directory
	-->	System Code Directory (only static code, no configuration data)
	-->	Instance Data Directory (where all instance data is stored under)
-->	Heirarchical View System, with the folowing features:
	-->	Separation of STATIC content and Dynamin content
	-->	Template based
--> Rich set of directory constants (no need for runtime directory gessing)


*******************
Release Information
*******************

This repo contains in-development code for future releases.
To download the latest stable release please visit the `CodeIgniter Extended 
Downloads <http://ci-extended.dev.escrita-virtual.pt/download>`_ page.


**************************
Changelog and New Features
**************************

You can find a list of all changes for each release in the `user
guide change log <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/changelog.rst>`_.


*******************
Server Requirements
*******************

PHP version 5.4 or newer is recommended.

It should work on 5.2.4 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.


************
Installation
************

Please see the `installation section <http://www.codeigniter.com/user_guide/installation/index.html>`_
of the CodeIgniter User Guide.

*******
License
*******

Please see the `license
agreement <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.


*********
Resources
*********

-  `User Guide <http://www.codeigniter.com/docs>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community IRC <http://www.codeigniter.com/irc>`_

Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_
or via our `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.


***************
Acknowledgement
***************

The CodeIgniter team would like to thank EllisLab, all the
contributors to the CodeIgniter project and you, the CodeIgniter user.