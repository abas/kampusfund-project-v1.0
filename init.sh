#!/bin/bash

echo "------------------------------"
echo "|  kampusfund installation   |"
echo "------------------------------"

echo "installing dependency manager from composer..."
composer install

echo ""
echo ""
echo "done installation"

echo ""
echo ""

echo "copying .env.example to .env"
cp .env.example .env
echo "done"
echo "opening environment and configure database connection"
nano .env
echo "done configure environment"

echo ""
echo ""

echo "generating app-key"
php artisan key:generate

echo ""
echo ""

echo "try to running server locally.."
php artisan server

echo ""
echo ""

firefox localhost:8000
echo "all done successfull run kampusfund"

echo ""
echo "|------------------|"
echo "|credit by : Abas_ |"
echo "|------------------|"
