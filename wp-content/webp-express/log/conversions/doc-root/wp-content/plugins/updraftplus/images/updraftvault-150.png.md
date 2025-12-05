WebP Express 0.21.1. Conversion triggered with the conversion script (wod/webp-on-demand.php), 2021-11-16 12:24:52

*WebP Convert 2.7.0*  ignited.
- PHP version: 7.4.16
- Server software: LiteSpeed

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/plugins/updraftplus/images/updraftvault-150.png
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/updraftvault-150.png.webp
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
- source: [doc-root]/wp-content/plugins/updraftplus/images/updraftvault-150.png
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/updraftvault-150.png.webp
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
We could get the version, so yes, a plain cwebp call works (spent 5 ms)
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 2 binaries (spent 98 ms)
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
Discovering cwebp binaries took: 103 ms

Detecting versions of the cwebp binaries found (except supplied binaries)
- Executing: cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /bin/cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /usr/bin/cwebp -version 2>&1. Result: version: *0.3.0*
Detecting versions took: 296 ms
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
Checksum test took: 504 ms
Creating command line options for version: 1.2.0
Bypassing auto-limit (it is only active for jpegs)
Quality: 85. 
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
nice [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-120-linux-x86-64 -metadata none -q 85 -alpha_q '85' -sharp_yuv -m 6 -low_memory '[doc-root]/wp-content/plugins/updraftplus/images/updraftvault-150.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/updraftvault-150.png.webp.lossy.webp' 2>&1

*Output:* 
nice: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-120-linux-x86-64: Permission denied

Executing cwebp binary took: 195 ms

Exec failed (return code: 126)
Note: You can prevent trying this precompiled binary, by setting the "skip-these-precompiled-binaries" option to "cwebp-120-linux-x86-64"
Checking checksum for supplied binary: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64
Checksum test took: 399 ms
Creating command line options for version: 1.1.0
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
nice [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64 -metadata none -q 85 -alpha_q '85' -sharp_yuv -m 6 -low_memory '[doc-root]/wp-content/plugins/updraftplus/images/updraftvault-150.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/updraftvault-150.png.webp.lossy.webp' 2>&1

*Output:* 
nice: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64: Permission denied

Executing cwebp binary took: 101 ms

Exec failed (return code: 126)
Note: You can prevent trying this precompiled binary, by setting the "skip-these-precompiled-binaries" option to "cwebp-110-linux-x86-64"
Checking checksum for supplied binary: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static
Checksum test took: 503 ms
Creating command line options for version: 1.0.3
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
nice [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static -metadata none -q 85 -alpha_q '85' -sharp_yuv -m 6 -low_memory '[doc-root]/wp-content/plugins/updraftplus/images/updraftvault-150.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/updraftvault-150.png.webp.lossy.webp' 2>&1

*Warning: exec(): Unable to fork [nice [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static -metadata none -q 85 -alpha_q '85' -sharp_yuv -m 6 -low_memory '[doc-root]/wp-content/plugins/updraftplus/images/updraftvault-150.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/updraftvault-150.png.webp.lossy.webp' 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Cwebp.php, line 250, PHP 7.4.16 (Linux)* 


*Warning: exec(): Unable to fork [nice [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static -metadata none -q 85 -alpha_q '85' -sharp_yuv -m 6 -low_memory '[doc-root]/wp-content/plugins/updraftplus/images/updraftvault-150.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/updraftvault-150.png.webp.lossy.webp' 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Cwebp.php, line 250, PHP 7.4.16 (Linux)* 

Executing cwebp binary took: 2 ms

Exec failed (return code: -1)
Note: You can prevent trying this precompiled binary, by setting the "skip-these-precompiled-binaries" option to "cwebp-103-linux-x86-64-static"
Checking checksum for supplied binary: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64
Checksum test took: 295 ms
Creating command line options for version: 0.6.1
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
nice [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64 -metadata none -q 85 -alpha_q '85' -sharp_yuv -m 6 -low_memory '[doc-root]/wp-content/plugins/updraftplus/images/updraftvault-150.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/updraftvault-150.png.webp.lossy.webp' 2>&1

*Warning: exec(): Unable to fork [nice [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64 -metadata none -q 85 -alpha_q '85' -sharp_yuv -m 6 -low_memory '[doc-root]/wp-content/plugins/updraftplus/images/updraftvault-150.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/updraftvault-150.png.webp.lossy.webp' 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Cwebp.php, line 250, PHP 7.4.16 (Linux)* 


*Warning: exec(): Unable to fork [nice [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64 -metadata none -q 85 -alpha_q '85' -sharp_yuv -m 6 -low_memory '[doc-root]/wp-content/plugins/updraftplus/images/updraftvault-150.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/updraftvault-150.png.webp.lossy.webp' 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Cwebp.php, line 250, PHP 7.4.16 (Linux)* 

Executing cwebp binary took: 2 ms

Exec failed (return code: -1)
Note: You can prevent trying this precompiled binary, by setting the "skip-these-precompiled-binaries" option to "cwebp-061-linux-x86-64"
Creating command line options for version: 0.3.0
*Ignoring near-lossless option (requires cwebp 0.5)* 
*Ignoring sharp-yuv option (requires cwebp 0.6)* 
Trying to convert by executing the following command:
nice cwebp -metadata none -q 85 -alpha_q '85' -m 6 -low_memory '[doc-root]/wp-content/plugins/updraftplus/images/updraftvault-150.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/updraftvault-150.png.webp.lossy.webp' 2>&1

*Warning: exec(): Unable to fork [nice cwebp -metadata none -q 85 -alpha_q '85' -m 6 -low_memory '[doc-root]/wp-content/plugins/updraftplus/images/updraftvault-150.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/updraftvault-150.png.webp.lossy.webp' 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Cwebp.php, line 250, PHP 7.4.16 (Linux)* 


*Warning: exec(): Unable to fork [nice cwebp -metadata none -q 85 -alpha_q '85' -m 6 -low_memory '[doc-root]/wp-content/plugins/updraftplus/images/updraftvault-150.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/updraftvault-150.png.webp.lossy.webp' 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Cwebp.php, line 250, PHP 7.4.16 (Linux)* 

Executing cwebp binary took: 2 ms

Exec failed (return code: -1)
Creating command line options for version: 0.3.0
*Ignoring near-lossless option (requires cwebp 0.5)* 
*Ignoring sharp-yuv option (requires cwebp 0.6)* 
Trying to convert by executing the following command:
nice /bin/cwebp -metadata none -q 85 -alpha_q '85' -m 6 -low_memory '[doc-root]/wp-content/plugins/updraftplus/images/updraftvault-150.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/updraftvault-150.png.webp.lossy.webp' 2>&1

*Warning: exec(): Unable to fork [nice /bin/cwebp -metadata none -q 85 -alpha_q '85' -m 6 -low_memory '[doc-root]/wp-content/plugins/updraftplus/images/updraftvault-150.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/updraftvault-150.png.webp.lossy.webp' 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Cwebp.php, line 250, PHP 7.4.16 (Linux)* 


*Warning: exec(): Unable to fork [nice /bin/cwebp -metadata none -q 85 -alpha_q '85' -m 6 -low_memory '[doc-root]/wp-content/plugins/updraftplus/images/updraftvault-150.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/updraftvault-150.png.webp.lossy.webp' 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Cwebp.php, line 250, PHP 7.4.16 (Linux)* 

Executing cwebp binary took: 95 ms

Exec failed (return code: -1)
Creating command line options for version: 0.3.0
*Ignoring near-lossless option (requires cwebp 0.5)* 
*Ignoring sharp-yuv option (requires cwebp 0.6)* 
Trying to convert by executing the following command:
nice /usr/bin/cwebp -metadata none -q 85 -alpha_q '85' -m 6 -low_memory '[doc-root]/wp-content/plugins/updraftplus/images/updraftvault-150.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/updraftvault-150.png.webp.lossy.webp' 2>&1

*Warning: exec(): Unable to fork [nice /usr/bin/cwebp -metadata none -q 85 -alpha_q '85' -m 6 -low_memory '[doc-root]/wp-content/plugins/updraftplus/images/updraftvault-150.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/updraftvault-150.png.webp.lossy.webp' 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Cwebp.php, line 250, PHP 7.4.16 (Linux)* 


*Warning: exec(): Unable to fork [nice /usr/bin/cwebp -metadata none -q 85 -alpha_q '85' -m 6 -low_memory '[doc-root]/wp-content/plugins/updraftplus/images/updraftvault-150.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/updraftvault-150.png.webp.lossy.webp' 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Cwebp.php, line 250, PHP 7.4.16 (Linux)* 

Executing cwebp binary took: 2 ms

Exec failed (return code: -1)

**Error: ** **Failed converting. Check the conversion log for details.** 
Failed converting. Check the conversion log for details.
cwebp failed in 2697 ms

*Trying: vips* 

**Error: ** **Required Vips extension is not available.** 
Required Vips extension is not available.
vips failed in 1 ms

*Trying: imagemagick* 

*Warning: exec(): Unable to fork [convert -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/ImageMagick.php, line 91, PHP 7.4.16 (Linux)* 


*Warning: exec(): Unable to fork [convert -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/ImageMagick.php, line 91, PHP 7.4.16 (Linux)* 


*Warning: exec(): Unable to fork [convert -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/ImageMagick.php, line 91, PHP 7.4.16 (Linux)* 


*Warning: exec(): Unable to fork [convert -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/ImageMagick.php, line 91, PHP 7.4.16 (Linux)* 


**Error: ** **imagemagick is not installed (cannot execute: "convert")** 
imagemagick is not installed (cannot execute: "convert")
imagemagick failed in 2 ms

*Trying: graphicsmagick* 

*Warning: exec(): Unable to fork [gm -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/GraphicsMagick.php, line 47, PHP 7.4.16 (Linux)* 


*Warning: exec(): Unable to fork [gm -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/GraphicsMagick.php, line 47, PHP 7.4.16 (Linux)* 


*Warning: exec(): Unable to fork [gm -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/GraphicsMagick.php, line 47, PHP 7.4.16 (Linux)* 


*Warning: exec(): Unable to fork [gm -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/GraphicsMagick.php, line 47, PHP 7.4.16 (Linux)* 


*Warning: exec(): Unable to fork [gm -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/GraphicsMagick.php, line 47, PHP 7.4.16 (Linux)* 


**Error: ** **gmagick is not installed** 
gmagick is not installed
graphicsmagick failed in 2 ms

*Trying: ffmpeg* 

*Warning: exec(): Unable to fork [ffmpeg -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/FFMpeg.php, line 54, PHP 7.4.16 (Linux)* 


*Warning: exec(): Unable to fork [ffmpeg -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/FFMpeg.php, line 54, PHP 7.4.16 (Linux)* 


*Warning: exec(): Unable to fork [ffmpeg -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/FFMpeg.php, line 54, PHP 7.4.16 (Linux)* 


*Warning: exec(): Unable to fork [ffmpeg -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/FFMpeg.php, line 54, PHP 7.4.16 (Linux)* 


*Warning: exec(): Unable to fork [ffmpeg -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/FFMpeg.php, line 54, PHP 7.4.16 (Linux)* 


*Warning: exec(): Unable to fork [ffmpeg -version 2&gt;&amp;1] in [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/FFMpeg.php, line 54, PHP 7.4.16 (Linux)* 


**Error: ** **ffmpeg is not installed (cannot execute: "ffmpeg")** 
ffmpeg is not installed (cannot execute: "ffmpeg")
ffmpeg failed in 94 ms

*Trying: wpc* 

**Error: ** **Missing URL. You must install Webp Convert Cloud Service on a server, or the WebP Express plugin for Wordpress - and supply the url.** 
Missing URL. You must install Webp Convert Cloud Service on a server, or the WebP Express plugin for Wordpress - and supply the url.
wpc failed in 2 ms

*Trying: ewww* 

**Error: ** **Missing API key.** 
Missing API key.
ewww failed in 1 ms

*Trying: imagick* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/plugins/updraftplus/images/updraftvault-150.png
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/plugins/updraftplus/images/updraftvault-150.png.webp
- encoding: "auto"
- quality: 85
- alpha-quality: 85
- near-lossless: 60
- metadata: "none"
- log-call-arguments: true

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
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
ImageMagic API version (full): ImageMagick 7.0.10-10 Q16 x86_64 2020-07-09 https://imagemagick.org
ImageMagic API version (just the number): 7.0.10-10
Imagic extension version: 3.4.4
*Note: near-lossless is not supported in your version of ImageMagick. ImageMagic >= 7.0.10-54 is required* 
Bypassing auto-limit (it is only active for jpegs)
Quality: 85. 
Reduction: 8% (went from 6382 bytes to 5860 bytes)

Converting to lossless
ImageMagic API version (full): ImageMagick 7.0.10-10 Q16 x86_64 2020-07-09 https://imagemagick.org
ImageMagic API version (just the number): 7.0.10-10
Imagic extension version: 3.4.4
*Note: near-lossless is not supported in your version of ImageMagick. ImageMagic >= 7.0.10-54 is required* 
Reduction: 61% (went from 6382 bytes to 2484 bytes)

Picking lossless
imagick succeeded :)

Converted image in 13694 ms, reducing file size with 61% (went from 6382 bytes to 2484 bytes)
