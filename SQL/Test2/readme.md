# PVA4 - Programování a vývoj aplikací
## Opakování 2 - Podmínky, Cykly, Pole

Čas na odevzdání: 45 minut. Rozhodným časem je čas na githubu.
Celkem 19 bodů + 3 bonusy

**Soubory uložte a odešlete do repozitáře**
Řešení, které nebude přístupné v repozitáři je považováno jako neodevzdané.

Řešení vypracujte do souboru `reseni.php`. 

Jednotlivé úkoly na sebe sice obsahově navazují, ale jejich vypracování není podmíněno. Pokud si s nějakou částí nebudete vědět rady, v klidu ji přeskočte popř. vypracujte alespoň částečně. Každý úkol je hodnocen individuálně dle předem stanovených kritérií.

## Obsah

### 1. Pole (4b)

Deklarujte dvojrozměrné pole `listEmployee`. Klíče definujte dle názvu sloupců tabulky 
```
Osobní číslo    | Zaměstnanec       | Odměna    | Manager  | Pohlaví
77918           | Petr Novák        | 500       | 99101    | M
90171           | Jana Dvořáková    | 600       | 77918    | Z
98172           | Ludmila Cyklická  | 800       | 41718    | Z
```

### 2. calcSumOfBonus (6b)
* Deklarujte funkci `calcSumOfBonus` se všemi náležitostmi. Funkce bude vracet součet vyplacených odměn. Jako podklad použijte pole `listEmployee`.
* Očekávaný výstup:
  
  `Pro vyplacení odměn bude zapotřebí alokovat: ??? Kč`


### 3. Cyklus a podmínka (5b)
* Pomocí cyklu a podmínky nalezněte v poli `listEmployee` všechny ženy s odměnou menší než 1000 Kč. 
* Pokud zaměstnanec v poli nebude nalezen, zobrazte uživateli zprávu _Nenalezeno_. Jméno každého zaměstnance zobrazte

### 4. Dotaz (8b)
V souboru `query.sql` sestavte dotaz do databáze. Schéma databáze je v zobrazeno v příloze `dbschema`.

* Zobrazené sloupce budou `název produktu`, `cena`, `popis` a `název výrobce` 
* Dotaz bude zobrazovat jen výrobky, které mají více než 1000 kliknutí a počet zobrazení v uzavřeném intervalu 1000 - 10000 .





