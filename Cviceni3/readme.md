# PVA4 - Programování a vývoj aplikací

## Cvičení 03: Formuláře a jejich zpracování

### 1. Formulář

Název souboru: `formular.php`

Vytvořte script generující HTML stránku s formulářem. Jako vzor můžete použít HTML z minulého cvičení. Od uživatele vyžadujte zadání jména, příjmení, věk a email a heslo.
Po odeslání formuláře zobrazte všechny hodnoty uživateli ve formátu:
Do formuláře bylo zadáno:

- Vaše jméno: _Jméno Příjmeni_
- Věk: _1_
- Emailová adresa: _muj@email.com_
- Heslo: _xyz_

--

### 2. Celní řízení

Název souboru: `celniRizeni.php`

Vytvořte skript generující html stránku. V jejím obsahu umístěte formulář, který bude počítat dph a clo dle zadané hodnoty zboží.
Od uživatele si vyžádejte název zboží a jeho hodnotu. Sazbu DPH si bude sám volit. Pro zjednodušení uvažujte DPH ve výši 15% nebo 21% a clo 2%. Poplatek za celní zpracování činí 90 Kč.

Výsledek zobrazte v tomto formátu:

- Název zboží: _abc_
- Sazba DPH: x %
- DPH: _x_ Kč
- Clo: _x_ Kč
- Celkové náklady k úhradě za dovoz: _x_ Kč
- Náklady na pořízení: _x_ Kč

--

### 3. Článek

Název souboru: `clanek.php`

Vytvořte stránku s formulářem, který bude přenášet data prostřednictvím URL. Účelem formuláře bude výběr jazykové mutace a článku.

Implementujte s využitím rozevíracího seznamu výběr z jazyků: čeština, angličtina, němčina, polština, ruština a maďarština.
Pro zjednodušení uvažujme články:

- `ID 1` Fuckupy v IT
- `ID 2` Domácí automatizace
- `ID 3` Umělá inteligence v domácnosti

Na stránce po odeslání zobrazte uživateli:

- Zvolená jazyková mutace: _hodnota_
- ID článku: _hodnota_
