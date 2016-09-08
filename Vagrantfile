# -*- mode: ruby -*-
# vi: set ft=ruby :
Vagrant.configure(2) do |config|
  config.vm.box = "ubuntu/trusty64"
  config.vm.network 'forwarded_port', guest: 80, host: 3000
  config.vm.synced_folder ".", "/var/www/html", :mount_options => ["dmode=777", "fmode=666"]
  config.vm.hostname = "mscpublic"

  config.vm.provision "shell", inline: <<-SHELL
    apt-get update
    apt-get -y install php5-common libapache2-mod-php5 php5-cli
    gem install sass
    rm /var/www/html/index.html
    echo "alias watch-your-sass='sass --watch /var/www/html/assets/stylesheets:/var/www/html/assets/css'" >> /home/vagrant/.bashrc
    sed -i '13i<Directory /var/www/html>\\nAllowOverride all\\n</Directory>' /etc/apache2/sites-available/000-default.conf
    sed -i '480idisplay_errors = on' /etc/php5/apache2/php.ini
    a2enmod rewrite
    service apache2 restart


    echo "\n\n"
    echo '|-------------------------|'
    echo '|To get the server going: |'
    echo '|$ vagrant ssh            |'
    echo '|$ watch-your-sass        |'
    echo '|-------------------------|'
  SHELL
end
