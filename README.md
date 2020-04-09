# hashids-integer
Este paquete es una copia del puete de [amamarul](https://github.com/amamarul/integer-hashids).

This package is a copy of the [amamarul](https://github.com/amamarul/integer-hashids) bridge.

Con este paquete se pueden construir un string aleatorio a partir de un array de numeros enteros.

With this package you can build a random string from an array of integers.

## Instalacion

### Composer require
``` bash
$ composer require furiosojack/hashids-integer
```

## Uso  
  - salt: is a phrase string.
  - minLength: Number min of characters you need
  - alphabet: you can set any character to make the hash, but if you want integer hashid keep the same ('0123456789').
  - prefix: if you want a prefixed hashid you can add the prefix, if not you can omit it or delete the parameter.
  - prefix-separator: If you use a prefix maybe do you want to use a prefix separator. If not leave empty ('').
  
 ``` php
    use FuriosoJack\HashidsInteger\Core\HashidsInteger;

     $hashers = new HashidsInteger("{/SvFtGNUZNw'aT$/'.t",10,"1234567890");
     $dcode = $hashers->encode([1,579144]);   
    // output: 49274776074

    $hashers = new HashidsInteger("{/SvFtGNUZNw'aT$/'.t",10,"abcdefghijklmnopq");
    $output = $hashers->encode([4,2]);
    //output: kjngeqfbgd

    $hashers = new HashidsInteger("{/SvFtGNUZNw'aT$/'.t",10,"abcdefghijklmnopq","hash");
    $output = $hasers->encode([4,2,15,21]);
    //output:hash-npfeiemcbq
    
    $hashers->decode("hash-npfeiemcbq");
    //output: array(4,2,15,21)
    
  ```

 