<p align="center">
    <h1 align="center">Vertilogic - Backend Test</h1>
</p>

### Built With
* [Laravel](https://laravel.com/)

## Requirements
* PHP => 7.1x
* Postman => [Download](https://www.getpostman.com/downloads/)
* MYSQL Database

## Getting Started
* Clone this Repo
```bash
git clone https://github.com/DanyAdhi/yumfood/
```
* generate .env files
```bash
cp .env.example .env
```
* edit necessary configuration 
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE= your database
DB_USERNAME= your database username
DB_PASSWORD= your database password
```
* install composer
```bash
open this directory on cmd and write composer install
```
* run migration
```bash
php artisan migrate:fresh --seed
```

* start the server

```bash
php artisan serve
```


### Read All Vendor
* Url : /vendors
* Method : GET

### Read Vendor By ID
* Url : /vendors/{vendorId}
* Method : GET


### Create Vendor

* Url : /vendor
* Method : POST
* Body :

```json
{
	"name":"Alfa Cafe",
	"logo":"https://image.freepik.com/free-vector/gradient-logo-template-with-abstract-shape_23-2148204210.jpg"
}
```

### Update Vendor

* Url : /vendor/{vendorId}
* Method : PUT
* Body :

```json
{
	"name":"Beta Cafe",
	"logo":"https://image.freepik.com/free-vector/gradient-logo-template-with-abstract-shape_23-2148204210.jpg"
}
```
### Delete Vendor

* Url : /vendor/{vendorId}
* Method : DELETE



### Read All Menu
* Url : /menus
* Method : GET

### Read All Menu for the specific vendor
* Url : /menu/{vendorId}
* Method : GET

### Read One Menu for the specific vendor
* Url : /menu/{vendorId}/{menuId}
* Method : GET


### Read All Order
* Url : /order
* Method : GET


### Create Order
* Url : /order
* Method : POST
* Body :

```json
{
	"total_order": "50000",
	"user_id": "1",
	"message": "Extra nasi dan sambal",
	"detail" :
        [
            { "order_id" : 1, "menu_id": 5, "price":2500, "quantity":2},
            { "order_id" : 1, "menu_id": 10, "price":4000, "quantity":3}
	    ]
}
```
