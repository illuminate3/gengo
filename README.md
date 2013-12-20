Gengo
=======


## About

> gengo |　gen sounds like ken but with a g, go is just like the english go
>
> Japanese characters 言語
>
> noun Gengo

> Gengo roughly translates to language or speech. However, you'd hear "gaikokugo" (foreign land language) or "eigo" (English)
> used instead of the more encompassing "gengo" used in daily usage.
> [　This is my own (this package author's) translation　]

Gengo is a list of 185 languages. Both ISO-639-1 and ISO-639-3 codes are included. 27 language translations have been added based
on wikipedia's matrix and my own list of Japanese translations. All translations are saved to a mysql database.


## Version
0.2.0


## Requirements
laravel

MySQL database

# Packages
* "illuminate/support": "4.0.x"      // Need to make sure laravel exists, 4.1 should work too.


## Installation

1.)
Add to the app.php providers list

```
'Illuminate3\Gengo\GengoServiceProvider',
```


2.)
Gengo comes with a few handy commands that are available in artisan.

```
gengo
  gengo:install        run migration (2 tables), seed tables
```

Run "gengo:install" from artisan to install and to start using gengo.


## Usage
At the moment, only migrations and seeds exist.

I've included a status column but all statuses are set to '0' at the moment since I did not want to assume that users
will speak a certain language or not.

## Future
I'm working on an admin interface to allow easy editing of the languages and to allow status changes.
Following that will be an interface so that you can just call a function to create drop downs and such.


## Projects used to create Gengo
[Paul Scott's Language Codes](http://paulscott.co.za/blog/iso-639-1-language-codes/ "Paul Scott's Language Codes")

[Wikipedia's Language Matrix](http://en.wikipedia.org/wiki/ISO_639-1_language_matrix "Wikipedia's Language Matrix")


## Notice
Some languages may be mangled, screwed up, botched or just destroyed by my text editor (BBEdit),
mysql (using Sequel Pro for dumps), or even my spread sheet editor (Libre office). Could also have just been a
bad copy/paste job too :P

Anyway, I'd really appreciate help from those of you who speak other languages besides English.

## Pull Requests
Please send a pull requests so that I can fill out the missing language translations or to make corrections.