# La vineria
Sito Catalogo dei migliori Vini.

## Steps
- Aggiunta la migration per la tabella dei vini.

---

## Suggest!

**Per lavorare sul progetto** 

1.  Scaricare tutte le dipendenze npm e composer con i comandi : 
```
npm i
```
```
composer install
```
2. Duplicare il file .env e generare la propria chiave con il comando :
```
php artisan key:generate
```
3. Creare il proprio db in locale
4. Collegare il db nel file `.env`
5. Lanciare il comando 
```
php artisan migrate
```

!!! Dare sempre ragione al boss


## Steps 2
- creato il seeder per aggiungere i vini dall API.

1.  eseguire la migrazione 
```
 php artisan migrate
```
2.  aggiungere i vini dall API
```
php artisan db:seed --class=WinesTableSeeder 
```
