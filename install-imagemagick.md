install Imagemagick for Centos 6

1. Install ImageMagick package via YUM.
  yum install ImageMagick
2. Now install ImageMagick-devel
  yum install ImageMagick-devel
3. Install "php-pear" required for "pecl". It will install and compile ImageMagick with PHP for you.
  yum install php-pear
4. Now, you need to install ImageMagick using pecl
  pecl install imagick
A imagick.so file will be created under /usr/lib/php/modules/ directory. Now, edit the php configuration file /etc/php.ini and add the following line after the “extension_dir” directive
  extension = "imagick.so"
5. In php.ini file, search to extension_dir, uncomment it (delete ; at the beginning), then paste the location of modules
  extension_dir = "/usr/lib64/php/modules/"
or 
  extension_dir = "/usr/lib/php/modules/"

*tip: if you can't find module location, use find command
  find / -name imagick.so
6. service httpd restart
