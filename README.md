Apidocs.ez.no documentation builder for eZP
===========================================

Requirements
------------
- php
- doxygen
- sami, phpdocumentor2 (installed via composer as part of ezpublishbuilder)
- a working shell and some related cli tools: git, tar, etc
  (see the documentation of the ezpublishbuilder tool for more details)

How to
------

The www dir should be inside the web server root (the index.html page assumes it is at the root of it. Use a vhost config for it to work).
The build dir should be outside of it for security.

Download and install ezpublishbuilder in build/ezpublishbuilder

To have daily rebuilt docs, schedule via crontab execution of the build_daily.sh script

To build docs for one release, use build_release.sh

Docs can be built two ways:
- for github master, the process is automatic (eg. sources will be updated the docs generated)
- for releases, the process is semi-automatic: releases have to be downloaded and unzipped in the right folder by hand, then docs generated via script

Folder structure
----------------

    |
    |- build
    |  |- ezpublishbuilder
    |     |- ...	
    |  |- source            folder for source code
    |  |- patches
    |  |- <tool>            optionally, other tools for the build: doxygen, docblox, ...
    |
    |- www
    |  |- downloads         a copy of all GPL versions of eZ is stored here for ease of retrieval
    |  |- community         a copy of an old svn repo, moved here for BC purposes
    |  |- <tool>
    |     |- <branch/release>
    |     |- trunk
