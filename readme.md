# Projeter
Project manager for recurring and usual bussiness processes

## Dependencies
* Laravel 4
* [Beanstalkd](http://kr.github.io/beanstalkd/)
* pheanstalk (PHP Lib for Beanstalkd)

## Instructions
Run

    sudo apt-get install beanstalkd
    php composer.phar install
    php composer.phar dump

You need to start Beanstalkd service:

	sudo vim /etc/default/beanstalkd
    > START yes     # uncomment

Then `sudo service beanstalkd start`