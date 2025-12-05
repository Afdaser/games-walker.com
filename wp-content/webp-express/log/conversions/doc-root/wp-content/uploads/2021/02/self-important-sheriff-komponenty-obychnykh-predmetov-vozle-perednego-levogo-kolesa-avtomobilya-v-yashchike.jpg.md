WebP Express 0.19.0. Conversion triggered using bulk conversion, 2021-02-28 17:26:52

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.4.11
- Server software: LiteSpeed

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2021/02/self-important-sheriff-komponenty-obychnykh-predmetov-vozle-perednego-levogo-kolesa-avtomobilya-v-yashchike.jpg
- destination: [doc-root]/wp-content/uploads/2021/02/self-important-sheriff-komponenty-obychnykh-predmetov-vozle-perednego-levogo-kolesa-avtomobilya-v-yashchike.webp
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
- source: [doc-root]/wp-content/uploads/2021/02/self-important-sheriff-komponenty-obychnykh-predmetov-vozle-perednego-levogo-kolesa-avtomobilya-v-yashchike.jpg
- destination: [doc-root]/wp-content/uploads/2021/02/self-important-sheriff-komponenty-obychnykh-predmetov-vozle-perednego-levogo-kolesa-avtomobilya-v-yashchike.webp
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
Quality set to same as source: 50
*The near-lossless option is not supported on this (rather old) version of cwebp- skipping it.* 
Trying to convert by executing the following command:
nice cwebp -metadata none -q 50 -alpha_q '85' -m 6 -low_memory '[doc-root]/wp-content/uploads/2021/02/self-important-sheriff-komponenty-obychnykh-predmetov-vozle-perednego-levogo-kolesa-avtomobilya-v-yashchike.jpg' -o '[doc-root]/wp-content/uploads/2021/02/self-important-sheriff-komponenty-obychnykh-predmetov-vozle-perednego-levogo-kolesa-avtomobilya-v-yashchike.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/uploads/2021/02/self-important-sheriff-komponenty-obychnykh-predmetov-vozle-perednego-levogo-kolesa-avtomobilya-v-yashchike.webp.lossy.webp'
File:      [doc-root]/wp-content/uploads/2021/02/self-important-sheriff-komponenty-obychnykh-predmetov-vozle-perednego-levogo-kolesa-avtomobilya-v-yashchike.jpg
Dimension: 960 x 540
Output:    24550 bytes Y-U-V-All-PSNR 38.77 43.61 42.50   39.78 dB
block count:  intra4: 917
              intra16: 1123  (-> 55.05%)
              skipped block: 252 (12.35%)
bytes used:  header:            136  (0.6%)
             mode-partition:   4623  (18.8%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    1705 |    5294 |    5692 |    1124 |   13815  (56.3%)
 intra16-coeffs:  |       0 |      92 |    1216 |    2422 |    3730  (15.2%)
  chroma coeffs:  |     108 |     563 |     961 |     584 |    2216  (9.0%)
    macroblocks:  |       1%|      10%|      30%|      58%|    2040
      quantizer:  |      52 |      49 |      42 |      34 |
   filter level:  |      24 |      15 |      11 |       7 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    1813 |    5949 |    7869 |    4130 |   19761  (80.5%)

Success
Reduction: 34% (went from 36 kb to 24 kb)

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
nice cwebp -metadata none -q 50 -alpha_q '85' -lossless -m 6 -low_memory '[doc-root]/wp-content/uploads/2021/02/self-important-sheriff-komponenty-obychnykh-predmetov-vozle-perednego-levogo-kolesa-avtomobilya-v-yashchike.jpg' -o '[doc-root]/wp-content/uploads/2021/02/self-important-sheriff-komponenty-obychnykh-predmetov-vozle-perednego-levogo-kolesa-avtomobilya-v-yashchike.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/uploads/2021/02/self-important-sheriff-komponenty-obychnykh-predmetov-vozle-perednego-levogo-kolesa-avtomobilya-v-yashchike.webp.lossless.webp'
File:      [doc-root]/wp-content/uploads/2021/02/self-important-sheriff-komponenty-obychnykh-predmetov-vozle-perednego-levogo-kolesa-avtomobilya-v-yashchike.jpg
Dimension: 960 x 540
Output:    322198 bytes
Lossless-ARGB compressed size: 322198 bytes
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=4 transform=3 cache=1

Success
Reduction: -770% (went from 36 kb to 315 kb)

Picking lossy
cwebp succeeded :)

Converted image in 2563 ms, reducing file size with 34% (went from 36 kb to 24 kb)
