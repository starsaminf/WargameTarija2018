$ docker pull donkeysharp/ballena:latest
latest: Pulling from donkeysharp/ballena
4fe2ade4980c: Pull complete
aafeeeb6e759: Pull complete
3c4b6e0459cd: Pull complete
Digest: sha256:b3a09e448823276c166fb9fbd10d594776fc5db569ed5bcb4b8184335d788978
Status: Downloaded newer image for donkeysharp/ballena:latest
$ docker run -it donkeysharp/ballena:latest /bin/sh
/ # ls
bin    etc    lib    mnt    root   sbin   sys    usr
dev    home   media  proc   run    srv    tmp    var
/ # cd /root
~ # ls
~ # ls lha
ls: lha: No such file or directory
~ # ls -lha
total 20
drwx------    1 root     root        4.0K Oct 21 13:32 .
drwxr-xr-x    1 root     root        4.0K Oct 21 13:32 ..
-rw-------    1 root     root          30 Oct 21 13:32 .ash_history
-rw-r--r--    2 root     root          21 Oct 15 03:09 .bashrc
~ # nano .bashrc
/bin/sh: nano: not found
~ # cat  .bashrc
bash_completion
exit
~ # cat /usr/bin/bas
basename         bash_completion
~ # cat /usr/bin/bas
basename         bash_completion
~ # cat /usr/bin/bas
basename         bash_completion
~ # cat /usr/bin/bash_completion
# This is the backdoor that will give us the power!
# It connects to the master server
# SE0yMDE4e2VkOWFjNGMwN2E1NTkxNzAzNjE3NzAxM2FmZGJmMDA1fQ==
echo " ___        __           _           _ _"
echo "|_ _|_ __  / _| ___  ___| |_ ___  __| | |"
echo " | || '_ \| |_ / _ \/ __| __/ _ \/ _' | |"
echo " | || | | |  _|  __/ (__| ||  __/ (_| |_|"
echo "|___|_| |_|_|  \___|\___|\__\___|\__,_(_)"
echo
echo Usted se encuentra infectado, su imagen docker es nuestra
echo You are infected, your docker image is ours
echo Вы заражены, ваше изображение докеров - наше
echo あなたは感染しています、ドッカーのイメージは私たちのものです
echo Vous êtes infecté, votre image de docker est la nôtre
