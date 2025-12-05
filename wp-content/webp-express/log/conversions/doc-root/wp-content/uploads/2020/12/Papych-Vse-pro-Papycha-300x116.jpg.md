WebP Express 0.19.0. Conversion triggered with the conversion script (wod/webp-on-demand.php), 2020-12-11 11:29:19

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.4.11
- Server software: LiteSpeed

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2020/12/Papych-Vse-pro-Papycha-300x116.jpg
- destination: [doc-root]/wp-content/uploads/2020/12/Papych-Vse-pro-Papycha-300x116.webp
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
- source: [doc-root]/wp-content/uploads/2020/12/Papych-Vse-pro-Papycha-300x116.jpg
- destination: [doc-root]/wp-content/uploads/2020/12/Papych-Vse-pro-Papycha-300x116.webp
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
- Executing: cwebp -version 2>&1. Result: version: *0.3.0*
We could get the version, so yes, a plain cwebp call works
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 2 binaries: 
- /bin/cwebp
- /usr/bin/cwebp
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
- Executing: cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /bin/cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /usr/bin/cwebp -version 2>&1. Result: *Exec failed* (return code: 254)
Binaries ordered by version number.
- cwebp: (version: 0.3.0)
- /bin/cwebp: (version: 0.3.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 0.3.0
Quality of source is 82. This is higher than max-quality, so using max-quality instead (80)
*The near-lossless option is not supported on this (rather old) version of cwebp- skipping it.* 
Trying to convert by executing the following command:
cwebp -metadata none -q 80 -alpha_q '85' -m 6 -low_memory '[doc-root]/wp-content/uploads/2020/12/Papych-Vse-pro-Papycha-300x116.jpg' -o '[doc-root]/wp-content/uploads/2020/12/Papych-Vse-pro-Papycha-300x116.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/uploads/2020/12/Papych-Vse-pro-Papycha-300x116.webp.lossy.webp'
File:      [doc-root]/wp-content/uploads/2020/12/Papych-Vse-pro-Papycha-300x116.jpg
Dimension: 300 x 116
Output:    3172 bytes Y-U-V-All-PSNR 41.80 45.93 46.10   42.81 dB
block count:  intra4: 123
              intra16: 29  (-> 19.08%)
              skipped block: 2 (1.32%)
bytes used:  header:             36  (1.1%)
             mode-partition:    613  (19.3%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |     547 |     741 |     439 |     200 |    1927  (60.8%)
 intra16-coeffs:  |       0 |       0 |      65 |     125 |     190  (6.0%)
  chroma coeffs:  |      87 |     104 |     112 |      74 |     377  (11.9%)
    macroblocks:  |       9%|      21%|      28%|      40%|     152
      quantizer:  |      27 |      24 |      20 |      14 |
   filter level:  |      12 |       8 |       5 |       3 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |     634 |     845 |     616 |     399 |    2494  (78.6%)

Success
Reduction: 46% (went from 5865 bytes to 3172 bytes)

Converting to lossless
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: version: *0.3.0*
We could get the version, so yes, a plain cwebp call works
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 2 binaries: 
- /bin/cwebp
- /usr/bin/cwebp
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
- Executing: cwebp -version 2>&1
*Warning: exec(): Unable to fork [cwebp -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Cwebp.php, line 426, PHP 7.4.11 (Linux)* 


*Warning: exec(): Unable to fork [cwebp -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Cwebp.php, line 426, PHP 7.4.11 (Linux)* 

. Result: *Exec failed* (return code: -1)
- Executing: /bin/cwebp -version 2>&1
*Warning: exec(): Unable to fork [/bin/cwebp -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Cwebp.php, line 426, PHP 7.4.11 (Linux)* 


*Warning: exec(): Unable to fork [/bin/cwebp -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Cwebp.php, line 426, PHP 7.4.11 (Linux)* 

. Result: *Exec failed* (return code: -1)
- Executing: /usr/bin/cwebp -version 2>&1
*Warning: exec(): Unable to fork [/usr/bin/cwebp -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Cwebp.php, line 426, PHP 7.4.11 (Linux)* 


*Warning: exec(): Unable to fork [/usr/bin/cwebp -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Cwebp.php, line 426, PHP 7.4.11 (Linux)* 

. Result: *Exec failed* (return code: -1)

**Error: ** **None of the cwebp files can be executed (failure code: -1)** 
None of the cwebp files can be executed (failure code: -1)
cwebp failed in 10401 ms

*Trying: vips* 

**Error: ** **Required Vips extension is not available.** 
Required Vips extension is not available.
vips failed in 0 ms

*Trying: imagemagick* 

*Warning: exec(): Unable to fork [convert -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/ImageMagick.php, line 60, PHP 7.4.11 (Linux)* 


*Warning: exec(): Unable to fork [convert -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/ImageMagick.php, line 60, PHP 7.4.11 (Linux)* 


*Warning: exec(): Unable to fork [convert -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/ImageMagick.php, line 60, PHP 7.4.11 (Linux)* 


*Warning: exec(): Unable to fork [convert -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/ImageMagick.php, line 60, PHP 7.4.11 (Linux)* 


**Error: ** **imagemagick is not installed (cannot execute: "convert")** 
imagemagick is not installed (cannot execute: "convert")
imagemagick failed in 0 ms

*Trying: graphicsmagick* 

*Warning: exec(): Unable to fork [gm -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/GraphicsMagick.php, line 49, PHP 7.4.11 (Linux)* 


*Warning: exec(): Unable to fork [gm -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/GraphicsMagick.php, line 49, PHP 7.4.11 (Linux)* 


*Warning: exec(): Unable to fork [gm -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/GraphicsMagick.php, line 49, PHP 7.4.11 (Linux)* 


*Warning: exec(): Unable to fork [gm -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/GraphicsMagick.php, line 49, PHP 7.4.11 (Linux)* 


*Warning: exec(): Unable to fork [gm -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/GraphicsMagick.php, line 49, PHP 7.4.11 (Linux)* 


**Error: ** **gmagick is not installed** 
gmagick is not installed
graphicsmagick failed in 98 ms

*Trying: ffmpeg* 

*Warning: exec(): Unable to fork [ffmpeg -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/FFMpeg.php, line 52, PHP 7.4.11 (Linux)* 


*Warning: exec(): Unable to fork [ffmpeg -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/FFMpeg.php, line 52, PHP 7.4.11 (Linux)* 


*Warning: exec(): Unable to fork [ffmpeg -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/FFMpeg.php, line 52, PHP 7.4.11 (Linux)* 


*Warning: exec(): Unable to fork [ffmpeg -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/FFMpeg.php, line 52, PHP 7.4.11 (Linux)* 


*Warning: exec(): Unable to fork [ffmpeg -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/FFMpeg.php, line 52, PHP 7.4.11 (Linux)* 


*Warning: exec(): Unable to fork [ffmpeg -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/FFMpeg.php, line 52, PHP 7.4.11 (Linux)* 


**Error: ** **ffmpeg is not installed (cannot execute: "ffmpeg")** 
ffmpeg is not installed (cannot execute: "ffmpeg")
ffmpeg failed in 0 ms

*Trying: wpc* 

**Error: ** **Missing URL. You must install Webp Convert Cloud Service on a server, or the WebP Express plugin for Wordpress - and supply the url.** 
Missing URL. You must install Webp Convert Cloud Service on a server, or the WebP Express plugin for Wordpress - and supply the url.
wpc failed in 0 ms

*Trying: ewww* 

**Error: ** **Missing API key.** 
Missing API key.
ewww failed in 103 ms

*Trying: imagick* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2020/12/Papych-Vse-pro-Papycha-300x116.jpg
- destination: [doc-root]/wp-content/uploads/2020/12/Papych-Vse-pro-Papycha-300x116.webp
- default-quality: 70
- encoding: "auto"
- log-call-arguments: true
- max-quality: 80
- metadata: "none"
- quality: "auto"

The following options have not been explicitly set, so using the following defaults:
- alpha-quality: 85
- auto-filter: false
- low-memory: false
- method: 6
- skip: false

The following options were supplied but are ignored because they are not supported by this converter:
- near-lossless
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Quality of source is 82. This is higher than max-quality, so using max-quality instead (80)
Reduction: 46% (went from 5865 bytes to 3174 bytes)

Converting to lossless
Reduction: -379% (went from 5865 bytes to 28080 bytes)

Picking lossy
imagick succeeded :)

Converted image in 54704 ms, reducing file size with 46% (went from 5865 bytes to 3174 bytes)
