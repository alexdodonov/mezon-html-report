# Mezon HTML report generator

## Pros and cons

Mezon HTML report generator allows you to create reports in a simple and pretty way. This tool also shortens time wich you spend on coding.

This package is a part of [Mezon Framework](https://github.com/alexdodonov/mezon)

## Installation

Just type:

```bash
composer require mezon/html-report
```

## Usage

Lets start from creating object of the report generator:

```php
$report = new Html();
```

And since that moment we can add elements to the head or body:

```php
// not that stylesheets are not validated, it is totally on your side
$report->head()->style()->selector('p')->css('color', 'red');
$report->head()->style()->selector('div')->css('color', 'green');;

$report->body()->p('Hello!');
$report->body()->div('World!');

// here we get HTML code in the variable $result
$result = $report->compile();
```

## More complex examples

This example shows that every call creates new tag (except `html` and `body`). So if you want to add multyple tags then you need to store tag into variable:

```php
$table = $report->table();
$row = $table->tr();

$row->td()->innerHtml('#1');
$row->td()->innerHtml('Legolas');

$row->td()->innerHtml('#2');
$row->td()->innerHtml('Frodo');

$row->td()->innerHtml('#3');
$row->td()->innerHtml('Aragorn');
```

## Supported tags

For now you can use following tags:

- body
- div
- h1
- h2
- h3
- h4
- h5
- head
- p
- strong
- style
- table
- td
- tr

## Inner HTML

If you need more tags, you can use innerHtml like in the example below:

```php
$report->body()->innerHtml('<script>alert(1);</scrip>');
```