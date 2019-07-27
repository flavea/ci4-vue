# CodeIgniter - Vue.js Starter
> Initial packages to create SPA website with CodeIgniter 4 dan Vue.js. For CodeIgniter 3, check [here](https://github.com/flavea/ci-vue-starter) or [here](https://github.com/andriannus/ci-vue-starter)

## Limitation
Currently only works with hash route mode.

## Detail
1. [CodeIgniter 4](https://github.com/codeigniter4/CodeIgniter4). I don't include some CI4 folders here: contributing, test, user_guide_src, .github
2. [Vue.js 2.6.10](https://vuejs.org) with webpack template
3. Node.js (> 6.0.0) and npm (> 3.0.0)

## How to Run

1. Copy env and rename it as .env. Set the environment to development, uncomment other variables to set url and database.

2. Set your application url on `app/Config/App.php`

3. Setup Database
For this example, we use mySQL. First, create a mySQL database and then setup your database connection by editing `app/Config/Database.php` or use the env file.

4. Run migrations and seed.
```
# ci4-vue

php spark migrate:latest -g default && sudo php spark db:seeder BookSeeder
```

5. Install `node_modules` on `ci4-vue/client`
```
# ci4-vue/client

npm install
```

6. Development
In this step, we are developing the vue app, codeigniter is not running or used yet. To run this, use the following command (Administrator access might be needed).
```
# ci4-vue/client

npm run dev
```

7. Production
After developing the vue app, we can build the app and then run codeigniter

```
# ci4-vue/client

npm run build
```

this will generate `dist` folder and `app/Views/index.php` file. To run, visit: `{host}/ci4-vue/`

## Other
1. All of above commands are run on `CMD` (Windows) or `terminal` on Linux/Mac
2. Contoller `Api/books` (using database) and `Api/ping` (not using database) is just an example of REST Controller. We are using filters to limit access to those apis. To update the filters, edit `app/Config/Filters.php` and the filters code are in `app/Filters`
3. For Axios, you can edit the base URL in `client/main.js`
