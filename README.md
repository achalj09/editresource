# Laravel Nova Edit Custom Field.
Some time you uses, Custom Tool for creating and Updating Custom Page using Custom Tool

So if you want Edit resource button as an custom link Field.

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
