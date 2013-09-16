#!/bin/sh

### update script for pubsvn: build docs from github sources 
### @author g. giunta
### @version $Id$

# modified on 2013.5.2: we only rebuild trunk every nite, using pakefile

PHP=/usr/local/php-5.4.19/bin/php
#TOOLS="doxygen sami phpdoc"
TOOLS="doxygen sami"
DOCSROOT=../www/trunk

cd ezpublishbuilder
$PHP pakefile.php update-source --user-config-file=../options-ezpublish-user.yaml
cd ..

# back up docs from last build
# this also avoids the very verbose output from pake when doing the equivalent thing of removing old docs
for TOOL in $TOOLS
do
    if [ -d $DOCSROOT/LS/$TOOL/html ]; then
       [ -d $DOCSROOT/LS/$TOOL/html_prev ] && rm -rf $DOCSROOT/LS/$TOOL/html_prev
       mv $DOCSROOT/LS/$TOOL/html $DOCSROOT/LS/$TOOL/html_prev
    fi
    if [ -d $DOCSROOT/NS/$TOOL/html ]; then
       [ -d $DOCSROOT/NS/$TOOL/html_prev ] && rm -rf $DOCSROOT/NS/$TOOL/html_prev
       mv $DOCSROOT/NS/$TOOL/html $DOCSROOT/NS/$TOOL/html_prev
    fi
done

cd ezpublishbuilder

# this avoids the very verbose output from pake when doing the equivalent thing
rm -rf build/sami_cache

# note: we have to use 4X here and not LS because repo layout is not the same as release layout
$PHP pakefile.php generate-apidocs-4X --user-config-file=../options-ezpublish-user.yaml --sourcedir=../source/trunk/legacy --docsdir=../../www/trunk/LS --option.docs.include_sources=1 --option.version.alias=Trunk

rm -rf build/sami_cache

$PHP pakefile.php generate-apidocs-NS --user-config-file=../options-ezpublish-user.yaml --sourcedir=../source/trunk/kernel --docsdir=../../www/trunk/NS --option.docs.include_sources=1 --option.version.alias=Trunk

cd ..

# restore last build if generation failed
for TOOL in $TOOLS
do
    if [ ! -d $DOCSROOT/LS/$TOOL/html ]; then
       [ -d $DOCSROOT/LS/$TOOL/html_prev ] && mv $DOCSROOT/LS/$TOOL/html_prev $DOCSROOT/LS/$TOOL/html
    fi
    if [ ! -d $DOCSROOT/NS/$TOOL/html ]; then
       [ -d $DOCSROOT/NS/$TOOL/html_prev ] && mv $DOCSROOT/NS/$TOOL/html_prev $DOCSROOT/LS/$TOOL/html
    fi
done
