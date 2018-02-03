#!/bin/bash

echo "------------------------------"
echo "|  kampusfund installation   |"
echo "------------------------------"

echo "installing dependency manager from composer"
echo "do not break (^ctrl+c) this process!!!"
echo "please standby and drink your coffea... <%>"
composer install > dummy.log 2>&1
echo "."
echo "."
echo "seeking error from log file"
cat dummy.log| grep "resolve hostname" > /dev/null;
echo "."
status=$(echo $?)
echo "status value = $status"
echo "."
if [ "$status" = "0" ];then 
	echo "."
	echo "you got an some error"
  echo "try to ceck your connectivity" 
else 
  echo "."
  echo "."
	echo "done installation" 
fi
rm -f dummy.log

echo "."
echo "."

echo "copying .env.example to .env"
cp .env.example .env
echo "done"
echo "opening environment and configure database connection"
nano .env
echo "done configure environment"

echo "."
echo "."

echo "generating app-key..	"
php artisan key:generate

echo "."
echo "."

echo "migrating table to database.."
php artisan migrate
echo "migrating done!"

echo "."
echo "."

echo "try to running server locally.."
php artisan serve	

echo "."
echo "."

firefox localhost:8000
echo "all done successfull run kampusfund"

echo "."
echo "|------------------|"
echo "|credit by : Abas_ |"
echo "|------------------|"
