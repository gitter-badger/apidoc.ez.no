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
TOOLS="doxygen sami"

#deployment dirs
DOCSROOT=../www

echo [`date`] "Building release $CPVER"

# @todo parse release name to ascertain if it has to be EE or not
if [ ! -z "$enterprise" ]; then
    echo "EE release assumed"
else
    echo "CP release assumed"
fi

if [ ! -d source/$CPVER/ezpublish_legacy -o ! -d source/$CPVER/vendor/ezsystems/ezpublish-kernel ]; then
    echo "Sources not found in source/$CPVER/ezpublish_legacy or source/$CPVER/vendor/ezsystems/ezpublish-kernel"
    exit 1
fi

# back up docs from last build
# this also avoids the very verbose output from pake when doing the equivalent thing of removing old docs
for TOOL in $TOOLS
do
    if [ -d $DOCSROOT/$TOOL/$CPVER/LS ]; then
       [ -d $DOCSROOT/$TOOL/$CPVER/LS_prev ] && rm -rf $DOCSROOT/$TOOL/$CPVER/LS_prev
       mv $DOCSROOT/$TOOL/$CPVER/LS $DOCSROOT/$TOOL/$CPVER/LS_prev
    fi
    if [ -d $DOCSROOT/$TOOL/$CPVER/NS ]; then
       [ -d $DOCSROOT/$TOOL/$CPVER/NS_prev ] && rm -rf $DOCSROOT/$TOOL/$CPVER/NS_prev
       mv $DOCSROOT/$TOOL/$CPVER/NS $DOCSROOT/$TOOL/$CPVER/NS_prev
    fi
done

if [ ! -z "$enterprise" ]; then
    enterprise="--option.ezpublish.name="
fi

cd ezpublishbuilder

# this avoids the very verbose output from pake when doing the equivalent thing
rm -rf build/sami_cache

$PHP pakefile.php generate-apidocs-LS $CPVER --user-config-file=../options-ezpublish-user.yaml --sourcedir=../source/$CPVER/ezpublish_legacy $enterprise \
     --option.docs.doxygen.dir=../$DOCSROOT/doxygen/$CPVER/LS --option.docs.sami.dir=../$DOCSROOT/sami/$CPVER/LS \
     --option.docs.doxygen.zipdir=../$DOCSROOT/doxygen/$CPVER --option.docs.sami.zipdir=../$DOCSROOT/sami/$CPVER

rm -rf build/sami_cache

$PHP pakefile.php generate-apidocs-NS $CPVER --user-config-file=../options-ezpublish-user.yaml  --sourcedir=../source/$CPVER/vendor/ezsystems/ezpublish-kernel $enterprise \
     --option.docs.doxygen.dir=../$DOCSROOT/doxygen/$CPVER/NS --option.docs.sami.dir=../$DOCSROOT/sami/$CPVER/NS \
     --option.docs.doxygen.zipdir=../$DOCSROOT/doxygen/$CPVER --option.docs.sami.zipdir=../$DOCSROOT/sami/$CPVER

cd ..

# restore last build if generation failed
for TOOL in $TOOLS
do
    if [ ! -d $DOCSROOT/$TOOL/$CPVER/LS ]; then
       [ -d $DOCSROOT/$TOOL/$CPVER/LS_prev ] && mv $DOCSROOT/$TOOL/$CPVER/LS_prev $DOCSROOT/$TOOL/$CPVER/LS
    fi
    if [ ! -d $DOCSROOT/$TOOL/$CPVER/NS ]; then
       [ -d $DOCSROOT/$TOOL/$CPVER/NS_prev ] && mv $DOCSROOT/$TOOL/$CPVER/NS_prev $DOCSROOT/$TOOL/$CPVER/NS
    fi
done
