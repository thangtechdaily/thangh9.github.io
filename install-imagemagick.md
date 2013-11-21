# Install Imagemagick on Centos 6

1. Install ImageMagick package via YUM.
  
  <code>yum install ImageMagick</code>

2. Now install ImageMagick-devel
  
  <code>yum install ImageMagick-devel</code>

3. Install "php-pear" required for "pecl". It will install and compile ImageMagick with PHP for you.
  
  <code>yum install php-pear

4. Now, you need to install ImageMagick using pecl
  
 <code>pecl install imagick</code>

	A imagick.so file will be created under /usr/lib/php/modules/ directory. Now, edit the php configuration file /etc/php.ini and add the following line after the “extension_dir” directive
  
  <code>extension = "imagick.so"</code>
  
5. In php.ini file, search to extension_dir, uncomment it (delete ; at the beginning), then paste the location of modules
  
  <code>extension_dir = "/usr/lib64/php/modules/"</code>

	or 
  
  <code>extension_dir = "/usr/lib/php/modules/"</code>
  

	*tip: if you can't find module location, use find command
  
  <code>find / -name imagick.so</code>
  
6. <code>service httpd restart</code>
