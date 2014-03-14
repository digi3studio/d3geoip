d3geoip
=====

A very simple class to load GeoIP data.  Different vendor could support different types of data, e.g. Cities, Countries, ZIP code.
Currently we only use MaxMind

- Get the /src/* file from the MaxMind API https://github.com/maxmind/geoip-api-php
- Put the /src/* files to /vendor/maxmind/API
- Download the Binary data from MaxMind, name it as GeoIP.data and put it in /vendor/maxmind/GeoIP-data