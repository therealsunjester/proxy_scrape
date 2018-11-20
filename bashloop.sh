#!/bin/bash
#sunjester
truncate -s 0 proxies
cat proxy_sites|while read line
do
	echo "checking: $line"
	lynx -dump $line >>proxies;cat proxies |grep -Eo '[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\s[0-9]{3,5}'>proxylist
done
cat proxylist
exit 0
