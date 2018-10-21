#Análisis
1. Descomprimimos y abrimos un par de archivos. Al final de cada archivo tiene caracteres nulos.
2. Borramos todos los caracteres nulos 
``` bash
sed -i 's/\x0//g' $(find foobar/ -type f)
```
3. Por simple inspeccion nos damos cuenta que hay cosas que se repiten, como 'echo', '#!/bin/bash'
4. Contemos cuantos archivos hay en total
``` bash
find -type f | wc -l
```
Es un número alto
``` bash
18613

5. Busquemos cuantos elementos tienen 'echo'
``` bash
grep -r "echo" | wc -l 
```
Es un número alto de archivos que contienen **echo**
``` bash
18502
```
6. Cuantos archivos no tienen **echo** ni **#!/bin/bash**, posiblemente en uno de esos archivos este la respuesta
``` bash
grep -r -v "echo" | grep -v '#!/bin/bash'
```
Salida
``` bash
...
foobar/aatt/aaii/Phae5Iej:bGEgYmFuZGVyYSBubyBlc3RhIGVuIGVzdGUgYXJjaGl2bywgcGVybyBlc3RlIGFyY2hpdm8gdGllbmUgZWwgbWlzbW8gdGFtYW5vIHF1ZSBlbCBhcmNoaXZvIGRvbmRlIGVzdGEgbGEgYmFuZGVyYQ==
foobar/aatt/aaii/Phae5Iej:bGEgYmFuZGVyYSBubyBlc3RhIGVuIGVzdGUgYXJjaGl2bywgcGVybyBlc3RlIGFyY2hpdm8gdGllbmUgZWwgbWlzbW8gdGFtYW5vIHF1ZSBlbCBhcmNoaXZvIGRvbmRlIGVzdGEgbGEgYmFuZGVyYQ==
foobar/aatt/aaii/Phae5Iej:bGEgYmFuZGVyYSBubyBlc3RhIGVuIGVzdGUgYXJjaGl2bywgcGVybyBlc3RlIGFyY2hpdm8gdGllbmUgZWwgbWlzbW8gdGFtYW5vIHF1ZSBlbCBhcmNoaXZvIGRvbmRlIGVzdGEgbGEgYmFuZGVyYQ==
...
```
Se repite **foobar/aatt/aaii/Phae5Iej** en cada linea, podemos guardar toda la salida en un archivo y con nuestro editor de texto eliminar hasta **:**, para que nos quede solo el codigo.

``` bash
grep -r -v "echo" | grep -v '#!/bin/bash'  | cut -d ":" -f 2 | sort | uniq
```
Salida
``` bash
bGEgYmFuZGVyYSBubyBlc3RhIGVuIGVzdGUgYXJjaGl2bywgcGVybyBlc3RlIGFyY2hpdm8gdGllbmUgZWwgbWlzbW8gdGFtYW5vIHF1ZSBlbCBhcmNoaXZvIGRvbmRlIGVzdGEgbGEgYmFuZGVyYQ==
e
ech
SE0yMDE4ezZmMjdmNGIwYzQ5ZjUxMzVjYmQ3YjgzYzQyYzEzMTk0fQ==
```








