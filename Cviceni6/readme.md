# PVA4 - Programování a vývoj aplikací

## Lekce 06: Funkce, Null, Require a Include

## Obsah

### 1. Index

1. Do souboru `index.php` integrujte obsahové soubory `templ_header` a `templ_footer` a "sestavte" výslednou webovou stránku.

### 2. Functions - showMenu

Práce v souboru `functions.php`, sekce `Functions`

1. Deklarujte funkci `showMenu`, která bude obsahovat menu aplikace. Pro vzhled menu využijte přiložený zdrojový kód.
2. Pomocí funkce showMenu zobrazte uživateli menu.

```
<header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">EduCover</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link" href="#">Home</a>
        <a class="nav-link" href="#">About Me</a>
        <a class="nav-link" href="#">Contact</a>
      </nav>
    </div>
  </header>
```

### 3. Config

1. V souboru `config` deklarujte proměnnou `author` s Vaším jménem.
2. Upravte hlavičku html stránky a zobrazte v meta tagu Vaše jméno za využití hodnoty z souboru `config`.

### 4. Functions - showAuthor

1. Deklarujte funkci `showAuthor`. Funkce bude mít vstupní parametr name. Vstupní parametr bude proměnná author z souboru `config` a `rok`.

   Výstup fce bude odpovídat tvaru `used by _author_, PVA4 _rok_` např. `used by Adam Fišer, PVA4 2021`.

2. Funkci použijte k zobrazení v souboru `templ_footer` namísto komentáře `<!-- here -->`.

### 5. Menu

Upravte funkci `showMenu` využtím cyklu tak, aby položky byly automaticky generovány dle hodnot pole.  
Klíč pole odkazuje na cílovou stránku a hodnota prvku pole se bude zobrazovat uživateli.

Deklarace pole:

```
$aMenu = array(
                "about_me" => "About me",
                "contact"  => "Contact",
                "hobbies"  => "Hobbies",
                "school"   => "School"
                "work"     => "My work"
                "photos"   => "Photos"
                );
```

### 5. Označení aktuální stránky

Upravte funkci menu způsobem, aby byla označena aktivní položka menu. Aktivní položku nastavíte css styl `active`. Ostatní položky je mít nebudou.

Aktivní položka menu je určena prostřednictvím parametru 'page' přicházející z URL. Hodnota odpovídá klíči pole.

Například pro hodnotu `...?active=hobbies` zobrazíte jako aktivní menu Hobbies.
