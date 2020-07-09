## Changing of Vouchers in production

### Up and running
* Make sure you have php 7.4+ installed.
* Make sure you have Composer installed
* Make sure you have docker installed 
* Copy .env.example to .env file and edit values to have the correct user/pass for your DB instance

### Running for the first time
1. Run ```docker-compose up``` to install mysql and redis in a docker instance
2. Run the following commands from Command Prompt / Terminal: 
```
composer install (if running Windows add --ignore-platform-reqs) 
php artisan migrate
```

### Start the development server for testing
1. Run the following command from the Command Prompt / Terminal:
```
php artisan serve
```

## Testing the API
The API routes are structured as a traditional REST client (see routes/api.php for specifics):
* Orders can be found at ```/api/orders```
* OrderLines can be found at ```/api/orders/{orderId}/order-lines```
* Etc.

## The assignment

### Background

The solution is in use by roughly 4400 waiters across 1200 restaurants. There are two frontends dependant on the backend (an iOS app and a backoffice web application). the iOS app can be up to a week to get a change approved and rolled out. 

In addition, three 3rd party integrations are present that uses the same API, one of them using the the Voucher functionality, the two others only using the order line functionality.

### Current solution

The codebase is a condensed, simplified version of our current solution, only containing the API.

If a Voucher has been bought as part of an order, it is linked directly to the Order and the total is calculated with a combination of the Order Lines and the amount on the Voucher.

### Wanted functionality

The possibility to have more than one Voucher on the Order to allow buying Vouchers in bulk.

### Constraints

If at all possible the change in functionality should result in no downtime (the build pipeline supports this) in the frontend. There is no limit to the number of deployments.
 
 Approach and the technical solution is entirely up to you, the candidate given the constraints above.  
