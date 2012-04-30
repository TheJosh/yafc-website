yafc-website
============

Website of www.yafc-ftp.com

This repo has a submodule of the main source (in the directory "yafc").
You need to init and update the submodule to get the docs.
The script `get_submodules.sh` will do this for you.

The yafc manual is generated using `generate_docs.sh`. It puts it's stuff
into the "src" directory. You will need the program `texi2html` for this
to all work correctly.
