cd ../../mysql/bin
echo 'Tiep tuc nhan enter'
mysql -uroot -p -e "CREATE DATABASE bh279_bookstore"


pause
echo 'Tiep tuc nhan enter'
cd ../../htdocs/bookstore
php artisan migrate 
php artisan db:seed
echo 'Success!!! Welcome to Bookstore'
start http://localhost/bookstore
pause
