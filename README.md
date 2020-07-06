## Changing of Vouchers in production

### Up and running

* Make sure you have php 7.4+ installed.
* Make sure you have Composer installed
* You need Redis running on the standard port (6379)
* You need MySQL running on the standard port (3306) 
* Edit the .env file to have the correct user/pass for your DB instance

### Running for the first time
1. Create a database on MySQL called `qo_candidate_vouchers`
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

## The assignment

### Current solution

If a Voucher has been bought as part of an order, it is linked directly to the Order and the total is calculated with a combination of the Order Lines and the amount on the Voucher.

### Wanted functionality

The possibility to have more than one Voucher on the Order to allow buying Vouchers in bulk.

