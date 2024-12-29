### command
```bash
balafon --users:register --controller:SiteNoteBookController cbondje@igkgdev.com
balafon --users:change --set:clStatus=1 cbondje@igkgdev.com
balafon --users:login SiteNoteBookController cbondje@igkgdev.com
balafon --db:resetdb SiteNoteBookController --force --querydebug
balafon --db:import SiteNoteBookController Sites -f:/Volumes/Data/Dev/JsonDatas/sites.json --querydebug --autoregister --entry:sites

# update to site
balafon --sync:project SiteNoteBookController --name:igkdev.com
```

```bash
open -a docker
docker-compose start
```

```sql
mysql -uroot -p -h 0.0.0.0 igkdev.dev
```


```sh
balafon --db:resetdb SiteNoteBookController --force --querydebug
balafon --db:import SiteNoteBookController Sites --querydebug --autoregister -f:/Users/charlesbondjedoue/Desktop/update_test.json
```


```
https://local.com:7300/sam
https://local.com:7300/forem
https://local.com:7300/notebook

```
