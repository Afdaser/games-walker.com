WebP Express 0.19.0. Conversion triggered with the conversion script (wod/webp-on-demand.php), 2020-12-11 11:29:23

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.4.11
- Server software: LiteSpeed

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2020/09/free_fire-300x169.jpeg
- destination: [doc-root]/wp-content/uploads/2020/09/free_fire-300x169.webp
- log-call-arguments: true
- converters: (array of 10 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- default-quality: 70
- encoding: "auto"
- max-quality: 80
- metadata: "none"
- near-lossless: 60
- quality: "auto"
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2020/09/free_fire-300x169.jpeg
- destination: [doc-root]/wp-content/uploads/2020/09/free_fire-300x169.webp
- default-quality: 70
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- max-quality: 80
- metadata: "none"
- method: 6
- near-lossless: 60
- quality: "auto"
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- alpha-quality: 85
- auto-filter: false
- preset: "none"
- size-in-percentage: null (not set)
- skip: false
- rel-path-to-precompiled-binaries: *****
- try-cwebp: true
- try-discovering-cwebp: true
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1
*Warning: exec(): Unable to fork [cwebp -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Cwebp.php, line 426, PHP 7.4.11 (Linux)* 


*Warning: exec(): Unable to fork [cwebp -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Cwebp.php, line 426, PHP 7.4.11 (Linux)* 

. Result: *Exec failed* (return code: -1)
Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)

*Warning: exec(): Unable to fork [which -a cwebp 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Helpers/BinaryDiscovery.php, line 77, PHP 7.4.11 (Linux)* 


*Warning: exec(): Unable to fork [which -a cwebp 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Helpers/BinaryDiscovery.php, line 77, PHP 7.4.11 (Linux)* 


*Warning: exec(): Unable to fork [whereis -b cwebp 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Helpers/BinaryDiscovery.php, line 55, PHP 7.4.11 (Linux)* 


*Warning: exec(): Unable to fork [whereis -b cwebp 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Helpers/BinaryDiscovery.php, line 55, PHP 7.4.11 (Linux)* 

Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Linux)... We do. We in fact have 3
**Binary checksum of supplied binary is invalid! Did you transfer with FTP, but not in binary mode? File:[doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64. Expected checksum: 1603b07b592876dd9fdaa62b44aead800234c9474ff26dc7dd01bc0f4785c9c6. Actual checksum:19221442a28f396e32e5ae5652a5e0a1410568fae1026286276eafdb9822a4da.** 
**Binary checksum of supplied binary is invalid! Did you transfer with FTP, but not in binary mode? File:[doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static. Expected checksum: ab96f01b49336da8b976c498528080ff614112d5985da69943b48e0cb1c5228a. Actual checksum:e53b80f5d3237a0969330821aa4e5f3bdabb75d31589044d29fa6c2750edc071.** 
**Binary checksum of supplied binary is invalid! Did you transfer with FTP, but not in binary mode? File:[doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64. Expected checksum: 916623e5e9183237c851374d969aebdb96e0edc0692ab7937b95ea67dc3b2568. Actual checksum:a0524111d3d216a93cc0505142d1e2b20d1aa698f6b5ce660d870ee9b70705a1.** 
Found 0 binaries
Detecting versions of the cwebp binaries found
- Executing: /usr/bin/cwebp -version 2>&1. Result: version: *0.3.0*
Binaries ordered by version number.
- /usr/bin/cwebp: (version: 0.3.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 0.3.0
Quality of source is 82. This is higher than max-quality, so using max-quality instead (80)
*The near-lossless option is not supported on this (rather old) version of cwebp- skipping it.* 
Trying to convert by executing the following command:
nice /usr/bin/cwebp -metadata none -q 80 -alpha_q '85' -m 6 -low_memory '[doc-root]/wp-content/uploads/2020/09/free_fire-300x169.jpeg' -o '[doc-root]/wp-content/uploads/2020/09/free_fire-300x169.webp.lossy.webp' 2>&1 2>&1
Exec failed (return code: 254)

**Error: ** **Failed converting. Check the conversion log for details.** 
Failed converting. Check the conversion log for details.
cwebp failed in 7199 ms

*Trying: vips* 

**Error: ** **Required Vips extension is not available.** 
Required Vips extension is not available.
vips failed in 0 ms

*Trying: imagemagick* 

**Error: ** **imagemagick is not installed (cannot execute: "convert")** 
imagemagick is not installed (cannot execute: "convert")
imagemagick failed in 999 ms

*Trying: graphicsmagick* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2020/09/free_fire-300x169.jpeg
- destination: [doc-root]/wp-content/uploads/2020/09/free_fire-300x169.webp
- default-quality: 70
- encoding: "auto"
- log-call-arguments: true
- max-quality: 80
- metadata: "none"
- quality: "auto"
- use-nice: true

The following options have not been explicitly set, so using the following defaults:
- alpha-quality: 85
- low-memory: false
- method: 6
- skip: false

The following options were supplied but are ignored because they are not supported by this converter:
- near-lossless
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Version: GraphicsMagick 1.3.34 2019-12-24 Q16 
Quality of source is 82. This is higher than max-quality, so using max-quality instead (80)
using nice
Executing command: nice gm convert -quality '80' -define webp:lossless=false -define webp:alpha-quality=85 -strip -define webp:method=6 '[doc-root]/wp-content/uploads/2020/09/free_fire-300x169.jpeg' 'webp:[doc-root]/wp-content/uploads/2020/09/free_fire-300x169.webp.lossy.webp' 2>&1
success
Reduction: 33% (went from 15 kb to 10 kb)

Converting to lossless
Version: GraphicsMagick 1.3.34 2019-12-24 Q16 
using nice
Executing command: nice gm convert -quality '80' -define webp:lossless=true -define webp:alpha-quality=85 -strip -define webp:method=6 '[doc-root]/wp-content/uploads/2020/09/free_fire-300x169.jpeg' 'webp:[doc-root]/wp-content/uploads/2020/09/free_fire-300x169.webp.lossless.webp' 2>&1
success
Reduction: -329% (went from 15 kb to 64 kb)

Picking lossy
graphicsmagick succeeded :)

Converted image in 50010 ms, reducing file size with 33% (went from 15 kb to 10 kb)
