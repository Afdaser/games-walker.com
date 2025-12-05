WebP Express 0.19.0. Conversion triggered using bulk conversion, 2021-01-28 08:49:40

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.4.11
- Server software: LiteSpeed

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2021/01/Blok-prokhoda-bashnyami-i-armiyey.-1.jpg
- destination: [doc-root]/wp-content/uploads/2021/01/Blok-prokhoda-bashnyami-i-armiyey.-1.webp
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
- source: [doc-root]/wp-content/uploads/2021/01/Blok-prokhoda-bashnyami-i-armiyey.-1.jpg
- destination: [doc-root]/wp-content/uploads/2021/01/Blok-prokhoda-bashnyami-i-armiyey.-1.webp
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
- Executing: /usr/bin/cwebp -version 2>&1. Result: version: *0.3.0*
Binaries ordered by version number.
- cwebp: (version: 0.3.0)
- /bin/cwebp: (version: 0.3.0)
- /usr/bin/cwebp: (version: 0.3.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 0.3.0
Quality of source is 96. This is higher than max-quality, so using max-quality instead (80)
*The near-lossless option is not supported on this (rather old) version of cwebp- skipping it.* 
Trying to convert by executing the following command:
nice cwebp -metadata none -q 80 -alpha_q '85' -m 6 -low_memory '[doc-root]/wp-content/uploads/2021/01/Blok-prokhoda-bashnyami-i-armiyey.-1.jpg' -o '[doc-root]/wp-content/uploads/2021/01/Blok-prokhoda-bashnyami-i-armiyey.-1.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/uploads/2021/01/Blok-prokhoda-bashnyami-i-armiyey.-1.webp.lossy.webp'
File:      [doc-root]/wp-content/uploads/2021/01/Blok-prokhoda-bashnyami-i-armiyey.-1.jpg
Dimension: 800 x 600
Output:    114816 bytes Y-U-V-All-PSNR 38.14 41.69 41.27   39.00 dB
block count:  intra4: 1652
              intra16: 248  (-> 13.05%)
              skipped block: 105 (5.53%)
bytes used:  header:            397  (0.3%)
             mode-partition:   9125  (7.9%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |   28501 |   31698 |   24326 |    6075 |   90600  (78.9%)
 intra16-coeffs:  |     227 |     412 |    1865 |    1682 |    4186  (3.6%)
  chroma coeffs:  |    4037 |    3108 |    2509 |     826 |   10480  (9.1%)
    macroblocks:  |      22%|      29%|      29%|      18%|    1900
      quantizer:  |      27 |      21 |      16 |      11 |
   filter level:  |      12 |       7 |       4 |       0 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |   32765 |   35218 |   28700 |    8583 |  105266  (91.7%)

Success
Reduction: 62% (went from 298 kb to 112 kb)

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
- Executing: cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /bin/cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /usr/bin/cwebp -version 2>&1. Result: version: *0.3.0*
Binaries ordered by version number.
- cwebp: (version: 0.3.0)
- /bin/cwebp: (version: 0.3.0)
- /usr/bin/cwebp: (version: 0.3.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 0.3.0
*The near-lossless option is not supported on this (rather old) version of cwebp- skipping it.* 
Trying to convert by executing the following command:
nice cwebp -metadata none -q 80 -alpha_q '85' -lossless -m 6 -low_memory '[doc-root]/wp-content/uploads/2021/01/Blok-prokhoda-bashnyami-i-armiyey.-1.jpg' -o '[doc-root]/wp-content/uploads/2021/01/Blok-prokhoda-bashnyami-i-armiyey.-1.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/uploads/2021/01/Blok-prokhoda-bashnyami-i-armiyey.-1.webp.lossless.webp'
File:      [doc-root]/wp-content/uploads/2021/01/Blok-prokhoda-bashnyami-i-armiyey.-1.jpg
Dimension: 800 x 600
Output:    902794 bytes
Lossless-ARGB compressed size: 902794 bytes
  * Precision Bits: histogram=4 transform=3 cache=9

Success
Reduction: -196% (went from 298 kb to 882 kb)

Picking lossy
cwebp succeeded :)

Converted image in 2649 ms, reducing file size with 62% (went from 298 kb to 112 kb)
