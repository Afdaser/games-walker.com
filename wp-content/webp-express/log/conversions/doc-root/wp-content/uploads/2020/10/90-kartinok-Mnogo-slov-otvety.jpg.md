WebP Express 0.19.0. Conversion triggered with the conversion script (wod/webp-realizer.php), 2020-12-09 21:04:09

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.23
- Server software: LiteSpeed

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2020/10/90-kartinok-Mnogo-slov-otvety.jpg
- destination: [doc-root]/wp-content/uploads/2020/10/90-kartinok-Mnogo-slov-otvety.webp
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

**Error: ** **exec() is not enabled.** 
exec() is not enabled.
cwebp failed in 2 ms

*Trying: vips* 

**Error: ** **Required Vips extension is not available.** 
Required Vips extension is not available.
vips failed in 1 ms

*Trying: imagemagick* 

**Error: ** **exec() is not enabled.** 
exec() is not enabled.
imagemagick failed in 0 ms

*Trying: graphicsmagick* 

**Error: ** **exec() is not enabled.** 
exec() is not enabled.
graphicsmagick failed in 0 ms

*Trying: ffmpeg* 

**Error: ** **exec() is not enabled.** 
exec() is not enabled.
ffmpeg failed in 0 ms

*Trying: wpc* 

**Error: ** **Missing URL. You must install Webp Convert Cloud Service on a server, or the WebP Express plugin for Wordpress - and supply the url.** 
Missing URL. You must install Webp Convert Cloud Service on a server, or the WebP Express plugin for Wordpress - and supply the url.
wpc failed in 80 ms

*Trying: ewww* 

**Error: ** **Missing API key.** 
Missing API key.
ewww failed in 1 ms

*Trying: imagick* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2020/10/90-kartinok-Mnogo-slov-otvety.jpg
- destination: [doc-root]/wp-content/uploads/2020/10/90-kartinok-Mnogo-slov-otvety.webp
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
Quality of source is 100. This is higher than max-quality, so using max-quality instead (80)
Reduction: 86% (went from 80 kb to 11 kb)

Converting to lossless
Reduction: -39% (went from 80 kb to 111 kb)

Picking lossy
imagick succeeded :)

Converted image in 9792 ms, reducing file size with 86% (went from 80 kb to 11 kb)
