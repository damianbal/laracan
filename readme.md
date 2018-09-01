# Laracan

Access Laravel's policies restfully and see if signed in user can do something with Laravel's model.

## Getting Started

```js
axios.get('http://your-laravel-app.com/laracan/Article/edit/3').then(resp => {
    if(resp.data.can) {
        // signed in user can edit article with id 3
    }
})
```

Article is a model 'App\\Article', and edit is Policies action, and of course optional id which in this case it is 3, and you also need to create
that policy 'ArticlePolicy' with method 'edit', to make it work.

### Installing

```sh
composer require damianbal\laracan
```

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

