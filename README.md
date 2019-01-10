# Stealth Cookie Stealer (DRAFT)

When you read about XSS you see a lot of example (almost all of them) saying it can be used to steal session cookies for full account takeover but none of those provide a single real world example for stealing cookie while maintaining stealth so I wrote these script and server side code to steal cookie and notify you.

## Files
- `a.js` - JavaScript file contain code for stealing cookie.
- `b.php` - `base.php` PHP file for saving cookie
- `c.php` - `curl.php` For sending notification using curl (SMS, Firebase, etc)
- `d.php` - `database.php` Database config

## Your TODO
- Rename `*.example.*` to `*.*`. (If you feel confused then you're not ready)
- Update URL in `a.js`.
- Update Database details in `d.php`.


## Table Creation Query
```sql
CREATE TABLE `db`.`cookies` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
`cookie` VARCHAR( 4096 ) NOT NULL,
`domain` VARCHAR( 1024 ) NOT NULL
);
```

**NOTE: PRs are always welcome**

## Author
Ravindra Sisodia
