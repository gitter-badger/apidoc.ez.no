#!/bin/sh

### update script for pubsvn: build docs from local sources (a copy of a release version)
### @author G. Giunta
### @version $Id$

# options:
# enterprise version (as opposite to CP)
enterprise= 

# parse cli options
while getopts e option
do
    case $option in
    e)    enterprise=1;;
    ?)    printf "Usage: %s: releasename [-e]\n    Use -e for EE releases\n" $0
          exit 2;;
    esac
done
shift $(($OPTIND - 1))

# single param: name of the  release
CPVER=$1

#tools
PHP=/usr/local/php-5.4.19/bin/php
TOOLS="doxygen sami phpdoc"

#deployment dirs
DOCSROOT=../www

echo [`date`] "Building release $CPVER"

# @todo parse release name to ascertain if it has to be EE or not
if [ ! -z "$enterprise" ]; then
    echo "EE release assumed"
else
    echo "CP release assumed"
fi

if [ ! -d source/$CPVER/kernel ]; then
    echo "Sources not found in source/$CPVER"
    exit 1
fi

# back up docs from last build
# this also avoids the very verbose output from pake when doing the equivalent thing of removing old docs
for TOOL in $TOOLS
do
    if [ -d $DOCSROOT/$TOOL/$CPVER ]; then
       [ -d $DOCSROOT/$TOOL//{$CPVER}__prev ] && rm -rf $DOCSROOT/$TOOL/{$CPVER}_prev
       mv $DOCSROOT/$TOOL/$CPVER $DOCSROOT/$TOOL//{$CPVER}__prev
    fi
done

if [ ! -z "$enterprise" ]; then
    enterprise="--option.ezpublish.name="
fi

cd ezpublishbuilder

# this avoids the very verbose output from pake when doing the equivalent thing
rm -rf build/sami_cache

$PHP pakefile.php generate-apidocs-4X $CPVER --user-config-file=../options-ezpublish-user.yaml --sourcedir=../source/$CPVER $enterprise \
     --option.docs.doxygen.dir=../$DOCSROOT/doxygen/$CPVER --option.docs.sami.dir=../$DOCSROOT/sami/$CPVER --option.docs.phpdoc.dir=../$DOCSROOT/phpdoc/$CPVER \
     --option.docs.doxygen.zipdir=../$DOCSROOT/doxygen/$CPVER --option.docs.sami.zipdir=../$DOCSROOT/sami/$CPVER --option.docs.phpdoc.zipdir=../$DOCSROOT/phpdoc/$CPVER \
     --option.docs.name_suffix.4x_stack= --option.ezpublish.name=
     
cd ..

# restore last build if generation failed
for TOOL in $TOOLS
do
    if [ ! -d $DOCSROOT/$TOOL/$CPVER ]; then
       [ -d $DOCSROOT/$TOOL//{$CPVER}__prev ] && mv $DOCSROOT/$TOOL//{$CPVER}__prev $DOCSROOT/$TOOL/$CPVER
    fi
done

