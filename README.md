# Bulk-Audio-Video-duration-FFMPEG
Script for getting duration of audio/video files from a file containing list of url using php-ffmpeg.

1. Pre-requistes : php-ffmpeg package should be installed on system.
   Note :  This package has been deprecated for some reason. So find the package on sourceforge and install   
   accordingly 
   (http://www.sgo.es/forums/showthread.php?538-How-to-compile-your-own-version-of-ffmpeg-in-linux-(valid
   -for-both-mamba-and-mistika))
2. Specify the file path in ffmpg.php
3. Place the source file which contains the list of URL in same folder
4. Provide the ownership of www-data (for debian os)/ apache (red hat) to the whole project folder.
5. Open terminal and type tail -f log.txt 
6. Then run the script in browser.
7. In terminal you can see which all files are been processed.
