WebP Express 0.19.0. Conversion triggered using bulk conversion, 2020-12-14 13:19:20

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.4.11
- Server software: LiteSpeed

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2020/12/Kak-nastroit-Unturned1.jpg
- destination: [doc-root]/wp-content/uploads/2020/12/Kak-nastroit-Unturned1.webp
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
- source: [doc-root]/wp-content/uploads/2020/12/Kak-nastroit-Unturned1.jpg
- destination: [doc-root]/wp-content/uploads/2020/12/Kak-nastroit-Unturned1.webp
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
Quality of source is 90. This is higher than max-quality, so using max-quality instead (80)
*The near-lossless option is not supported on this (rather old) version of cwebp- skipping it.* 
Trying to convert by executing the following command:
nice cwebp -metadata none -q 80 -alpha_q '85' -m 6 -low_memory '[doc-root]/wp-content/uploads/2020/12/Kak-nastroit-Unturned1.jpg' -o '[doc-root]/wp-content/uploads/2020/12/Kak-nastroit-Unturned1.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/uploads/2020/12/Kak-nastroit-Unturned1.webp.lossy.webp'
File:      [doc-root]/wp-content/uploads/2020/12/Kak-nastroit-Unturned1.jpg
Dimension: 1920 x 1080
Output:    25200 bytes Y-U-V-All-PSNR 50.23 51.46 50.83   50.51 dB
block count:  intra4: 925
              intra16: 7235  (-> 88.66%)
              skipped block: 6054 (74.19%)
bytes used:  header:            272  (1.1%)
             mode-partition:   7701  (30.6%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    1326 |    5884 |    4674 |     813 |   12697  (50.4%)
 intra16-coeffs:  |       0 |       5 |     191 |    1486 |    1682  (6.7%)
  chroma coeffs:  |      16 |    1038 |    1004 |     761 |    2819  (11.2%)
    macroblocks:  |       0%|       2%|       8%|      89%|    8160
      quantizer:  |      27 |      26 |      23 |      19 |
   filter level:  |      12 |       7 |       6 |       4 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    1342 |    6927 |    5869 |    3060 |   17198  (68.2%)

Success
Reduction: 73% (went from 91 kb to 25 kb)

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
nice cwebp -metadata none -q 80 -alpha_q '85' -lossless -m 6 -low_memory '[doc-root]/wp-content/uploads/2020/12/Kak-nastroit-Unturned1.jpg' -o '[doc-root]/wp-content/uploads/2020/12/Kak-nastroit-Unturned1.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/uploads/2020/12/Kak-nastroit-Unturned1.webp.lossless.webp'
File:      [doc-root]/wp-content/uploads/2020/12/Kak-nastroit-Unturned1.jpg
Dimension: 1920 x 1080
Output:    264062 bytes
Lossless-ARGB compressed size: 264062 bytes
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=5 transform=3 cache=0

Success
Reduction: -184% (went from 91 kb to 258 kb)

Picking lossy
cwebp succeeded :)

Converted image in 10538 ms, reducing file size with 73% (went from 91 kb to 25 kb)
