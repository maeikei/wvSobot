.PHONY : all debug mount apache2
#mount tmpfs /tmp -t tmpfs -o size=64m
all:mount
debug:
mount:
	mkdir -p ./sobot/app/tmp/
	sudo mount tmpfs ./sobot/app/tmp/ -t tmpfs -o size=128m
	sudo chown www-data -R ./sobot/app/tmp/

apache2:
	sudo cp -rf ./apache2/sites-available/* /etc/apache2/sites-available/
	cd /etc/apache2/sites-enabled && sudo ln -sf ../sites-available/002-default.conf 002-default.conf
	sudo cp -f ./apache2/php5/apache2/php.ini /etc/php5/apache2/
	sudo a2enmod rewrite 
	sudo service apache2 restart
	sudo apt-get install php5-pgsql php5-cli
