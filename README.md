# csv_read

A compact PHP function for reading items from a CSV file.

## Usage

### Read the items one at a time

```php
foreach (csv_read('input.csv') as $data) {
  // do something with $data
}
```

### Specify the column names

```php
foreach (csv_read('input.csv', ['id', 'title', 'count']) as $data) {
  // do something with $data
}
```

### Read all the items into an array

```php
$items = iterator_to_array(csv_read('input.csv'));
```
