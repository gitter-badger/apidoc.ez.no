PUBSVN documentation builder for eZP
====================================

Requirements
------------
. php
. doxygen
. sami
. a working shell and some related cli tools
(see the documentation of the ezpublishbuilder tool for more details)

How to
------

The www dir should be inside the web server root (the index.html page assumes it is at the root of it. Use a vhost config for it to work).
The build dir should be outside of it for security.

Download and install ezpublishbuilder in build/

Check out https://github.com/joekepley/ezpubreleasepage in www/

To have daily rebuilt docs, schedule via crontab execution of the build_daily.sh script

To build docs for one release, use build_release.sh

Docs can be built two ways:
- for github master, the process is automatic (eg. sources will be updated the docs generated)
- for releases, the process is semi-automatic: releases have to be downloaded and unzipped in the right folder by hand, then docs generated via script
