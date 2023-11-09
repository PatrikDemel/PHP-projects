[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-24ddc0f5d75046c5622901739e7c5dd533143b0c8e959d652212380cedb1ea36.svg)](https://classroom.github.com/a/urPjdBhn)

# PVA4 - Programování a vývoj aplikací

## Opakování 1 var6

Čas na odevzdání: 40 minut. Rozhodným časem je čas na githubu.

**Soubory uložte a odešlete do repozitáře**
Řešení, které nebude přístupné v repozitáři je považováno jako neodevzdané.

## Obsah

### 1. Metody GET a POST (6 body)

Do souboru `otazka_1.php`
a) popište formou víceřádkového komentáře k čemu slouží metody GET a POST, jaký je mezi nimi rozdíl a příklad použití.
b) Definujte proměnnou vstup s libovolnou číselnou hodnotou. Proveďte konverzi na datový typ podporující zadání desetinných míst.
c) Je-li v souboru syntaktická chyba, opravte ji do validního php scriptu.

### 2. Deklarace (8 body)

- V souboru `otazka_2.php`:

- Deklarujte proměnnou `price`, `ean`, `name` a `group`
- Za využití výše definovaných proměnných deklarujte proměnnou product jenž bude obsahovat složeniny `name` a `group`, oddělovač zpětné lomítko.
- Zobrazte uživateli zprávu dle očekávaného výstupu 'Product SuperComputer \ Server, ean 48978246, cena ve výši 351000 Kč.' Název produktu a cena bude tučně.
- Upravte výstup tak, aby ean bylo hypertextový odkaz vedoucí na stránku http://devserver.local/index.php?product=X kde x je ean. Např. `http://devserver.local/index.php?product=48978246`

### 3. Oprava souboru (6)

- Opravte funkčnost souboru`otazka_3.php`.
- Úkolem skriptu je provést uhradu faktury. Faktura je vedena v EUR, platbu proveďte v CZK.
- Číslo faktury a její výši platby zadá uživatel prostřednictvím formuláře. Zobrazte uživateli v CZK výsledek zbývající nezaplacené částky po provedené platbě.
- Pro přepočet použijte kurz 24,68 Kč/EUR
