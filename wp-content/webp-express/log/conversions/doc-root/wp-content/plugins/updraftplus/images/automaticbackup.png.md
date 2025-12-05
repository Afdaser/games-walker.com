WebP Express 0.21.1. Conversion triggered with the conversion script (wod/webp-on-demand.php), 2021-11-16 12:24:49

*WebP Convert 2.7.0*  ignited.
- PHP version: 7.4.16
- Server software: LiteSpeed

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/plugins/updraftplus/images/automaticbackup.png
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/automaticbackup.png.webp
- log-call-arguments: true
- converters: (array of 10 items)

The following options have not been explicitly set, so using the following defaults:
- auto-limit: true
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- encoding: "auto"
- quality: 85
- alpha-quality: 85
- near-lossless: 60
- metadata: "none"
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/plugins/updraftplus/images/automaticbackup.png
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/automaticbackup.png.webp
- encoding: "auto"
- quality: 85
- alpha-quality: 85
- near-lossless: 60
- metadata: "none"
- method: 6
- low-memory: true
- log-call-arguments: true
- use-nice: true
- try-common-system-paths: true
- try-supplied-binary-for-os: true
- command-line-options: ""

The following options have not been explicitly set, so using the following defaults:
- auto-limit: true
- sharp-yuv: true
- auto-filter: false
- preset: "none"
- size-in-percentage: null (not set)
- skip: false
- default-quality: 85
- max-quality: 85
- try-cwebp: true
- try-discovering-cwebp: true
- skip-these-precompiled-binaries: ""
- rel-path-to-precompiled-binaries: *****
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: version: *0.3.0*
We could get the version, so yes, a plain cwebp call works (spent 4 ms)
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 2 binaries (spent 14 ms)
- /bin/cwebp
- /usr/bin/cwebp
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 2 binaries (spent 0 ms)
- /usr/bin/cwebp
- /bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Linux)... We do. We in fact have 4
Found 4 binaries (spent 0 ms)
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-120-linux-x86-64
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64
Discovering cwebp binaries took: 19 ms

Detecting versions of the cwebp binaries found (except supplied binaries)
- Executing: cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /bin/cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /usr/bin/cwebp -version 2>&1. Result: version: *0.3.0*
Detecting versions took: 104 ms
Binaries ordered by version number.
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-120-linux-x86-64: (version: 1.2.0)
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64: (version: 1.1.0)
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static: (version: 1.0.3)
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64: (version: 0.6.1)
- cwebp: (version: 0.3.0)
- /bin/cwebp: (version: 0.3.0)
- /usr/bin/cwebp: (version: 0.3.0)
Starting conversion, using the first of these. If that should fail, the next will be tried and so on.
Checking checksum for supplied binary: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-120-linux-x86-64
Checksum test took: 392 ms
Creating command line options for version: 1.2.0
Bypassing auto-limit (it is only active for jpegs)
Quality: 85. 
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
nice [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-120-linux-x86-64 -metadata none -q 85 -alpha_q '85' -sharp_yuv -m 6 -low_memory '[doc-root]/wp-content/plugins/updraftplus/images/automaticbackup.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/automaticbackup.png.webp.lossy.webp' 2>&1

*Output:* 
nice: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-120-linux-x86-64: Permission denied

Executing cwebp binary took: 101 ms

Exec failed (return code: 126)
Note: You can prevent trying this precompiled binary, by setting the "skip-these-precompiled-binaries" option to "cwebp-120-linux-x86-64"
Checking checksum for supplied binary: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64
Checksum test took: 301 ms
Creating command line options for version: 1.1.0
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
nice [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64 -metadata none -q 85 -alpha_q '85' -sharp_yuv -m 6 -low_memory '[doc-root]/wp-content/plugins/updraftplus/images/automaticbackup.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/automaticbackup.png.webp.lossy.webp' 2>&1

*Output:* 
nice: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64: Permission denied

Executing cwebp binary took: 96 ms

Exec failed (return code: 126)
Note: You can prevent trying this precompiled binary, by setting the "skip-these-precompiled-binaries" option to "cwebp-110-linux-x86-64"
Checking checksum for supplied binary: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static
Checksum test took: 404 ms
Creating command line options for version: 1.0.3
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
nice [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static -metadata none -q 85 -alpha_q '85' -sharp_yuv -m 6 -low_memory '[doc-root]/wp-content/plugins/updraftplus/images/automaticbackup.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/automaticbackup.png.webp.lossy.webp' 2>&1

*Output:* 
nice: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static: Permission denied

Executing cwebp binary took: 196 ms

Exec failed (return code: 126)
Note: You can prevent trying this precompiled binary, by setting the "skip-these-precompiled-binaries" option to "cwebp-103-linux-x86-64-static"
Checking checksum for supplied binary: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64
Checksum test took: 299 ms
Creating command line options for version: 0.6.1
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
nice [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64 -metadata none -q 85 -alpha_q '85' -sharp_yuv -m 6 -low_memory '[doc-root]/wp-content/plugins/updraftplus/images/automaticbackup.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/automaticbackup.png.webp.lossy.webp' 2>&1

*Output:* 
nice: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64: Permission denied

Executing cwebp binary took: 4 ms

Exec failed (return code: 126)
Note: You can prevent trying this precompiled binary, by setting the "skip-these-precompiled-binaries" option to "cwebp-061-linux-x86-64"
Creating command line options for version: 0.3.0
*Ignoring near-lossless option (requires cwebp 0.5)* 
*Ignoring sharp-yuv option (requires cwebp 0.6)* 
Trying to convert by executing the following command:
nice cwebp -metadata none -q 85 -alpha_q '85' -m 6 -low_memory '[doc-root]/wp-content/plugins/updraftplus/images/automaticbackup.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/automaticbackup.png.webp.lossy.webp' 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/automaticbackup.png.webp.lossy.webp'
File:      [doc-root]/wp-content/plugins/updraftplus/images/automaticbackup.png
Dimension: 220 x 220
Output:    3484 bytes Y-U-V-All-PSNR 47.25 44.92 44.86   46.31 dB
block count:  intra4: 76
              intra16: 120  (-> 61.22%)
              skipped block: 114 (58.16%)
bytes used:  header:            164  (4.7%)
             mode-partition:    383  (11.0%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |      76 |     778 |     657 |      27 |    1538  (44.1%)
 intra16-coeffs:  |       0 |       0 |      22 |       3 |      25  (0.7%)
  chroma coeffs:  |      74 |     775 |     486 |      10 |    1345  (38.6%)
    macroblocks:  |       1%|      15%|      24%|      58%|     196
      quantizer:  |      20 |      18 |      16 |      12 |
   filter level:  |       9 |       5 |       4 |       0 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |     150 |    1553 |    1165 |      40 |    2908  (83.5%)

Executing cwebp binary took: 596 ms

Success
Reduction: 74% (went from 13 kb to 3 kb)

Converting to lossless
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: version: *0.3.0*
We could get the version, so yes, a plain cwebp call works (spent 200 ms)
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 2 binaries (spent 1005 ms)
- /bin/cwebp
- /usr/bin/cwebp
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 2 binaries (spent 0 ms)
- /usr/bin/cwebp
- /bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Linux)... We do. We in fact have 4
Found 4 binaries (spent 0 ms)
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-120-linux-x86-64
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64
Discovering cwebp binaries took: 1205 ms

Detecting versions of the cwebp binaries found (except supplied binaries)
- Executing: cwebp -version 2>&1
*Warning: exec(): Unable to fork [cwebp -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Cwebp.php, line 576, PHP 7.4.16 (Linux)* 


*Warning: exec(): Unable to fork [cwebp -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Cwebp.php, line 576, PHP 7.4.16 (Linux)* 

. Result: *Exec failed* (return code: -1)
- Executing: /bin/cwebp -version 2>&1
*Warning: exec(): Unable to fork [/bin/cwebp -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Cwebp.php, line 576, PHP 7.4.16 (Linux)* 


*Warning: exec(): Unable to fork [/bin/cwebp -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Cwebp.php, line 576, PHP 7.4.16 (Linux)* 

. Result: *Exec failed* (return code: -1)
- Executing: /usr/bin/cwebp -version 2>&1
*Warning: exec(): Unable to fork [/usr/bin/cwebp -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Cwebp.php, line 576, PHP 7.4.16 (Linux)* 


*Warning: exec(): Unable to fork [/usr/bin/cwebp -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Cwebp.php, line 576, PHP 7.4.16 (Linux)* 

. Result: *Exec failed* (return code: -1)
Detecting versions took: 4 ms
Binaries ordered by version number.
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-120-linux-x86-64: (version: 1.2.0)
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64: (version: 1.1.0)
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static: (version: 1.0.3)
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64: (version: 0.6.1)
Starting conversion, using the first of these. If that should fail, the next will be tried and so on.

*Warning: exec(): Unable to fork [nice 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/ConverterTraits/ExecTrait.php, line 26, PHP 7.4.16 (Linux)* 


*Warning: exec(): Unable to fork [nice 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/ConverterTraits/ExecTrait.php, line 26, PHP 7.4.16 (Linux)* 

Checking checksum for supplied binary: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-120-linux-x86-64
Checksum test took: 294 ms
Creating command line options for version: 1.2.0
Trying to convert by executing the following command:
[doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-120-linux-x86-64 -metadata none -q 85 -alpha_q '85' -near_lossless 60 -sharp_yuv -m 6 -low_memory '[doc-root]/wp-content/plugins/updraftplus/images/automaticbackup.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/automaticbackup.png.webp.lossless.webp' 2>&1

*Output:* 
sh: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-120-linux-x86-64: Permission denied

Executing cwebp binary took: 97 ms

Exec failed (return code: 126)
Note: You can prevent trying this precompiled binary, by setting the "skip-these-precompiled-binaries" option to "cwebp-120-linux-x86-64"
Checking checksum for supplied binary: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64
Checksum test took: 300 ms
Creating command line options for version: 1.1.0
Trying to convert by executing the following command:
[doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64 -metadata none -q 85 -alpha_q '85' -near_lossless 60 -sharp_yuv -m 6 -low_memory '[doc-root]/wp-content/plugins/updraftplus/images/automaticbackup.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/automaticbackup.png.webp.lossless.webp' 2>&1

*Output:* 
sh: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64: Permission denied

Executing cwebp binary took: 4 ms

Exec failed (return code: 126)
Note: You can prevent trying this precompiled binary, by setting the "skip-these-precompiled-binaries" option to "cwebp-110-linux-x86-64"
Checking checksum for supplied binary: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static
Checksum test took: 502 ms
Creating command line options for version: 1.0.3
Trying to convert by executing the following command:
[doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static -metadata none -q 85 -alpha_q '85' -near_lossless 60 -sharp_yuv -m 6 -low_memory '[doc-root]/wp-content/plugins/updraftplus/images/automaticbackup.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/automaticbackup.png.webp.lossless.webp' 2>&1

*Output:* 
sh: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static: Permission denied

Executing cwebp binary took: 95 ms

Exec failed (return code: 126)
Note: You can prevent trying this precompiled binary, by setting the "skip-these-precompiled-binaries" option to "cwebp-103-linux-x86-64-static"
Checking checksum for supplied binary: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64
Checksum test took: 102 ms
Creating command line options for version: 0.6.1
Trying to convert by executing the following command:
[doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64 -metadata none -q 85 -alpha_q '85' -near_lossless 60 -sharp_yuv -m 6 -low_memory '[doc-root]/wp-content/plugins/updraftplus/images/automaticbackup.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/automaticbackup.png.webp.lossless.webp' 2>&1

*Output:* 
sh: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64: Permission denied

Executing cwebp binary took: 97 ms

Exec failed (return code: 126)
Note: You can prevent trying this precompiled binary, by setting the "skip-these-precompiled-binaries" option to "cwebp-061-linux-x86-64"

**Error: ** **Failed converting. Check the conversion log for details.** 
Failed converting. Check the conversion log for details.
cwebp failed in 5220 ms

*Trying: vips* 

**Error: ** **Required Vips extension is not available.** 
Required Vips extension is not available.
vips failed in 1 ms

*Trying: imagemagick* 

**Error: ** **imagemagick is not installed (cannot execute: "convert")** 
imagemagick is not installed (cannot execute: "convert")
imagemagick failed in 96 ms

*Trying: graphicsmagick* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/plugins/updraftplus/images/automaticbackup.png
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/automaticbackup.png.webp
- encoding: "auto"
- quality: 85
- alpha-quality: 85
- metadata: "none"
- log-call-arguments: true
- use-nice: true

The following options have not been explicitly set, so using the following defaults:
- auto-limit: true
- method: 6
- sharp-yuv: true
- auto-filter: false
- low-memory: false
- preset: "none"
- skip: false
- default-quality: 85
- max-quality: 85

The following options were supplied but are ignored because they are not supported by this converter:
- near-lossless
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Version: GraphicsMagick 1.3.36 20201226 Q16 
Bypassing auto-limit (it is only active for jpegs)
Quality: 85. 
using nice
Executing command: nice gm convert -quality '85' -define webp:lossless=false -define webp:alpha-quality=85 -define webp:use-sharp-yuv=true -strip -define webp:method=6 '[doc-root]/wp-content/plugins/updraftplus/images/automaticbackup.png' 'webp:[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/automaticbackup.png.webp.lossy.webp' 2>&1
success
Reduction: 74% (went from 13 kb to 3 kb)

Converting to lossless
Version: GraphicsMagick 1.3.36 20201226 Q16 
using nice
Executing command: nice gm convert -quality '85' -define webp:lossless=true -define webp:alpha-quality=85 -define webp:use-sharp-yuv=true -strip -define webp:method=6 '[doc-root]/wp-content/plugins/updraftplus/images/automaticbackup.png' 'webp:[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/automaticbackup.png.webp.lossless.webp' 2>&1
success
Reduction: 28% (went from 13 kb to 9 kb)

Picking lossy
graphicsmagick succeeded :)

Converted image in 11320 ms, reducing file size with 74% (went from 13 kb to 3 kb)
