# Laravel Nova Edit Custom Field.
In Laravel Nova, when you use Custom Tool for creating/editing/updating Custom Page,

you might need "Edit Resource Button" with edit SVG icon as custom link field.



# Install using

```php
composer require achalj09/editresource
```

# Use in resources 

```php
use Achalj09\Editresource\Editresource;


Editresource::make('Edit','edit')
  ->details([
      'href' => function () {
          return "../../createjobs/{$this->id}/edit";
      },
      'text' => function () {
          return 'edit';
      },
  ])->onlyOnIndex()
  ->canSee(function ($request) {
      return $request->user()->can('Update Jobs', $this);
}),
```

# Output

![alt Sample Image](https://github.com/achalj09/editresource/blob/master/resources/images/sample-image.png)
