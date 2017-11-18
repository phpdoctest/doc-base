# Read Me

## Read this first

This directory contains source files and a setup for converting
PHP's XML documentation into presentation formats like HTML and
RTF. You should not have to bother with this unless you are
writing documentation yourself, or if you simply are curious
about how the XML stuff works.

If you just want to read the documentation, look at: http://www.php.net/docs.php

## How to write PHPDoc files

If you are interested in information about how to
set up the tools needed, how to work with Git and
DocBook on Linux or Windows, or what conventions you
should follow when writing phpdoc files, please refer
to the PHP Documentation HOWTO.

You can read the HOWTO online at http://doc.php.net/tutorial/

If you are already working with the phpdoc module,
then you can find its XML source in the howto directory
of the module, and build it yourself with:

```bash
phd -d .manual.xml
```

However, PhD is a separate project which can be read about here: http://wiki.php.net/doc/phd

## Quick Reference

### Source checkout

a. Fork the repository of the language you want to contribute to on [GitHub](https://github.com/phpdoctest)
b. Check out the source

```bash
git checkout git://github.com:[your github-username]/[language you want to contribute to].git
git remote add upstream https://github.com/phpdoctest/[language you want to contribute to].git
```

c. Check out the doc-base repository with the different tools

```bash
git checkout https://github.com/phpdoctest/doc-base.git
```

That will leave you with a folder ```[language you want to contribute to]```
which contains the source-files for the documentation and a folder ```doc-base```
that contains the different tools and resources used in all languages.

### Edits

a. Bring everything up to date and create a new branch

```
cd [language you want to contribute to]
git fetch upstream
git checkout -b [branchname] upstream/master
```

b. Make the change.  Use spaces not tabs.  Be sure to carefully watch your whitespace!
c. Look at your unified diff, make sure it looks right and that whitespace changes aren't mixed in:

```bash
git diff path/to/file.xml
```

d. Make sure no errors are present, so at the command line in your phpdoc source directory run:

```bash
cd ..
php doc-base/configure.php
```

    Always ```php configure.php``` before commit!

e. Commit your changes

```
git add path/to/file.xml
git commit
git push origin branchname
```

f. Open a PullRequest on GitHub for your changes to be merged directly into the main repository.


Read the HOWTO for more information.  After reading the HOWTO, email the phpdoc
mailing list (phpdoc@lists.php.net) with questions and concerns.

### new functions

    a) Copy an existing xml file or use a skeleton from the HOWTO.
       Rename and place it into the appropriate directory.

    b) Edit.  Be sure no leftover text exists.  No tabs either.

    c) Now test locally before commit by first running
       (php configure.php)

    d) git add add path/to/yourfile.xml

    e) git commit

    Note that the version numbers are taken care of elsewhere (don't worry
    about them)

### some popular tags and entities

    <filename>          filenames
    <constant>          constants
    <varname>           variables
    <parameter>         a function's parameter/argument
    <function>          functions, this links to function pages or bolds if
                        already on the function's page.  it also adds ().

    <literal>           teletype/mono-space font <tt>
    <emphasis>          italics
    <example>           see HOWTO, includes many other tags.
    <link>              internal manual links
                        <link linkend="language.variables">variables</link>

    <link>              external links via global.ent
                        <link xlink:href="&spec.cookies;">mmm cookies</link>

    <type>              types, this links to the given types manual
                        page: <type>object</type> -> php.net/types.object


    &return.success;    see: language-snippets.ent
    &true;              <constant>TRUE</constant>
    &false;             <constant>FALSE</constant>
    &php.ini;           <filename>php.ini</filename>

    Be sure to check out globals.ent and language-snippets.ent for
    more information for entities and urls.

---------------------------------------------------------------------------
