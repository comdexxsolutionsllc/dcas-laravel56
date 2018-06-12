#!/usr/bin/env bash
brew tap homebrew/homebrew-php
brew unlink php71
brew install php72 --with-argon2
brew install php72-xdebug
brew install php72-imagick
brew install php72-redis
