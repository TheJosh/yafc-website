#!/bin/bash
#
#  This script is run every night on the web server
#

git pull

git submodule foreach git pull origin master

./generate_docs.sh

cp -r src/* ../public_html/
