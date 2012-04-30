#!/bin/bash
#
# Generate various manual docs
#

command -v texi2html >/dev/null 2>&1 || { echo >&2 "I require texi2html but it's not installed.  Aborting."; exit 1; }

texi2html \
	--prefix yafc \
	--subdir src/manual \
	--split chapter \
	--css-ref="../manual.css" \
	--top-file="index.html" \
	yafc/doc/yafc.texi
