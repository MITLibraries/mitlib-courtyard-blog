[![Build Status](https://travis-ci.org/MITLibraries/mitlib-courtyard-blog.svg)](https://travis-ci.org/MITLibraries/mitlib-courtyard-blog)
[![Code Climate](https://codeclimate.com/github/MITLibraries/mitlib-courtyard-blog/badges/gpa.svg)](https://codeclimate.com/github/MITLibraries/mitlib-courtyard-blog)

Mitlib-Courtyard-Blog
======

Mitlib-Courtyard-Blog is a child WordPress theme for use on internally-facing blogs at the MIT Libraries. It has been created by [Matt Bernhardt](https://github.com/matt-bernhardt) to extend the [Mitlib-Courtyard](https://github.com/MITLibraries/mitlib-courtyard) base theme.

## A note for developers and contributors:

Pull requests are evaluated by Travis-CI for syntax errors and security flaws using relevant sections of the WordPress Coding Standards. They are also evaluated by CodeClimate using static code analysis and linting provided by PHPCS and PHPMD. We expect that contributors are running those tools locally, or otherwise ensuring that pull requests conform to those standards. We have included the `codesniffer.local.xml` configuration for local use, which is typically invoked by the following command:

```
phpcs -psvn . --standard=./codesniffer.local.xml --extensions=php --report=source --report=full
```
