# Publikacja strony na hostingu CyberFolks (krok po kroku)

Poniższa instrukcja zakłada, że chcesz opublikować statyczną/PHP stronę z tego repozytorium (plik `index.php` w katalogu głównym).

## 1) Utwórz lub wybierz hosting
1. Zaloguj się do panelu CyberFolks.
2. Wybierz usługę hostingu, na której ma działać strona.

## 2) Dodaj domenę lub subdomenę
1. W panelu hostingu dodaj domenę (np. `impetleasing.pl`) lub subdomenę (np. `www.impetleasing.pl`).
2. Zanotuj katalog docelowy (najczęściej `public_html` albo wskazany katalog domeny).

## 3) Skonfiguruj DNS domeny
1. W ustawieniach domeny ustaw rekordy DNS zgodnie z instrukcją CyberFolks.
2. Najczęściej będzie to:
   - zmiana serwerów nazw (nameserverów) na te z panelu CyberFolks, **albo**
   - ustawienie rekordów A/AAAA na adres IP hostingu.
3. Poczekaj na propagację DNS (zwykle od kilku minut do kilku godzin).

## 4) Wgraj pliki strony
1. Połącz się z hostingiem przez FTP/SFTP (np. FileZilla) lub użyj menedżera plików w panelu.
2. Wgraj **zawartość repozytorium** (pliki i katalogi takie jak `index.php`, `assets/`, `includes/`, `templates/`) do katalogu docelowego domeny.
3. Upewnij się, że `index.php` znajduje się w katalogu głównym domeny.

## 5) Ustawienia PHP i wysyłka maili
1. Upewnij się, że hosting ma włączoną obsługę PHP.
2. Jeśli formularz kontaktowy ma wysyłać e-maile, sprawdź konfigurację w `includes/config.php`.

## 6) SSL (HTTPS)
1. W panelu CyberFolks włącz certyfikat SSL (np. Let's Encrypt).
2. Po aktywacji sprawdź, czy strona otwiera się pod `https://`.

## 7) Test końcowy
1. Otwórz stronę w przeglądarce.
2. Sprawdź:
   - czy działa nawigacja,
   - czy ładuje się CSS (`assets/css/style.css`),
   - czy działa formularz kontaktowy.

---

Jeśli chcesz, mogę dopisać instrukcję **deployu z Git** (np. auto‑deploy z GitHub) albo przygotować checklistę SEO po publikacji.
