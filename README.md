## About Flyweight Test

A study about the Flyweight structural pattern in Laravel:
For different results, change the migration files or the service file.
To see the difference beetween the to services UpdateVoucherInfo and UpdateVoucherInfoTwo, comment on Kernel.php file.

# 👷 Installation

``` git clone https://github.com/breno23augusto/laravel_flyweight_test.git```

Create your enviroment variables based on the examples of ```.env.example```

```cp .env.example .env```

After copying the examples, make sure to fill the variables with new values.

# 🏃 Getting Started

<b>On root directory run</b>

``docker-compose up -d``

<b>Go to src directory</b>

``cd src``

<b>Install the dependencies</b>

``composer install``

<b>Create the tables in your database</b>

```php artisan migrate:fresh --seed```

<b>Run the Schedule</b>

```php artisan schedule:work```

<b>Run the Schedule</b>

```Look at the src\storage\logs\MyLog.log or MyLog2.log```

## 🤔 Contributing

> To get started...

### Step 1

- 🍴 Fork this repo!

### Step 2

- 👯 Clone this repo to your local machine using `https://github.com/breno23augusto/laravel_flyweight_test.git`

### Step 3

- 🎋 Create your feature branch using `git checkout -b my-feature`

### Step 4

- ✅ Commit your changes using `git commit -m 'feat: My new feature'`;

### Step 5

- 📌 Push to the branch using `git push origin my-feature`;

### Step 6

- 🔃 Create a new pull request

After your Pull Request is merged, can you delete your feature branch.

---
# 📕 Conclusion

So far it has not been possible to identify the benefit of using the design pattern in Eloquent Models.

# 📕 License

Released in 2019.
This project is under the ***MIT license***
